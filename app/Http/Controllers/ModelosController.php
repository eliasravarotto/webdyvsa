<?php

namespace App\Http\Controllers;

use App\File;
use App\Modelo;
use App\Version;
use App\TipoVehiculo;
use App\ModeloGallery;
use App\PortadaModelo;
use App\ParallaxModelo;
use App\ImagenColorModelo;
use App\ImagenSliderModelo;
use App\Traits\ApiResponser;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;
use App\CaracteristicaModelo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;


class ModelosController extends Controller
{

    use ApiResponser;
    use ImageHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::with('marca')->orderBy('nombre')->get();
        return view('backend.modelos.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new Modelo;
        $tiposVehiculos  = TipoVehiculo::all();
        return view('backend.modelos.create', compact('modelo', 'tiposVehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'nombre' => 'required',
            'tipo_vehiculo_id' => 'required|integer',
            'slogan' => 'required',
            'descripcion' => 'required',
            'link_ficha_tecnica' => 'required',
            'link_catalogo' => 'required',
        ];

        $this->validate($request, $rules);

        $modelo = Modelo::create($request->all());

        $modelo->gallery()->save(new ModeloGallery());

        if ($request->hasFile('img_logo')) {
            $modelo->img_logo = $this->storeFile($request->file('img_logo'), 'public/modelos');
        }

        if ($request->hasFile('img_modelo')) {
            $modelo->img_modelo = $this->storeFile($request->file('img_modelo'), 'public/modelos');
        }

        $modelo->update();

        \Session::flash('flash_message','Modelo guardado correctamente.'); //<--FLASH MESSAGE

        return redirect('admin/modelos/' . $modelo->id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);
        $tiposVehiculos  = TipoVehiculo::all();

        return view('backend.modelos.edit', compact('modelo', 'tiposVehiculos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $modelo = Modelo::findOrfail($id);


        if ($request->img_logo ) {
            if ($modelo->img_logo)
                unlink(public_path().$modelo->img_logo);
    
            $modelo->img_logo = $this->storeFile($request->file('img_logo'), 'public/modelos');
        } 
        
        if ($request->img_modelo ) {
            if ($modelo->img_modelo)
                unlink(public_path().$modelo->img_modelo);
    
            $modelo->img_modelo = $this->storeFile($request->file('img_modelo'), 'public/modelos');
        }      

        $modelo->update($request->all());

        \Session::flash('flash_message','Modelo actualizado correctamente'); //<--FLASH MESSAGE

        return redirect('admin/modelos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = Modelo::find($id);
        if (file_exists(public_path().$modelo->img_modelo)) {
            unlink($modelo->img_modelo);
        }
        if (file_exists(public_path().$modelo->img_logo)) {
            unlink($modelo->img_logo);
        }

        $modelo->delete();

        \Session::flash('flash_message','Modelo eliminado correctamente'); 

        return redirect('admin/modelos');

    }

    //------------------------------------------------------------
    // COLORES MODELO
    // -----------------------------------------------------------
    public function editColores($id)
    {
        $modelo = Modelo::find($id);
        return view('backend.modelos.formColores', compact('modelo'));
    }

    public function updateColores(Request $request, $id)
    {

        $modelo = Modelo::find($id);
        $modelo_name = strtolower($modelo->nombre);
       
        //Editar Colores
        for( $i=0 ; $i < sizeof($request->old_color_id) ; $i++ ) {
            $imagenColor = ImagenColorModelo::findOrFail($request->old_color_id[$i]);
            $imagenColor->color = $request->old_color[$i];
            $imagenColor->codigo = $request->old_codigo[$i];

            if ( isset($request->old_img_colores) ){
                if ( array_key_exists($i, $request->old_img_colores) ){

                    Storage::delete($imagenColor->url);

                    $file = $request->file('old_img_colores')[$i];
                    $file_path = Storage::put('public/modelos', $file);
                    $imagenColor->url = $file_path;
                    $imagenColor->public_path = Storage::url($file_path);
                }
            }

            $imagenColor->update();
        }
        
        //Crear nuevos colores
        for( $i=0 ; $i < sizeof($request->img_colores) ; $i++ ) {

            $file = $request->file('img_colores')[$i];
            $file_path = Storage::put('public/modelos', $file);

            $imagen_color = new ImagenColorModelo;
            $imagen_color->modelo_id = $modelo->id;
            $imagen_color->color = $request->color[$i];
            $imagen_color->codigo = $request->codigo[$i];
            $imagen_color->url = $file_path;
            $imagen_color->public_path = Storage::url($file_path);
            $imagen_color->save();
        }

        //Eliminar
        for( $i=0 ; $i < sizeof($request->delete_color_ids) ; $i++ ) {
            $imagenColor = ImagenColorModelo::findOrFail($request->delete_color_ids[$i]);
            Storage::delete($imagenColor->url);
            $imagenColor->delete();
        }

        return back()->with('success', 'Actualizado.');
    }



    //------------------------------------------------------------
    // CARACTERISTICAS MODELO
    // -----------------------------------------------------------
    public function editCaracteristicas(Modelo $id)
    {
        $modelo = $id;

        return view('backend.modelos.formCaracteristicas', compact('modelo'));
    }

    public function updateCaracteristicas(Request $request, $id)
    {
        $modelo = Modelo::find($id);
        $total = count($request->img);
        
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ) {
                $caracteristica = new CaracteristicaModelo;
                $caracteristica->modelo_id = $modelo->id;
                $caracteristica->titulo = $request->titulo[$i];
                $caracteristica->descripcion = $request->desc[$i];
                $caracteristica->img = $this->storeFile($request->file('img')[$i], 'public/modelos');
                $caracteristica->save();
            }
        }

        return redirect('admin/modelos');

    }

    public function borrarCaracteristica(CaracteristicaModelo $id)
    {   
        
        if ($id->delete()) {
            if ($id->img != null) {
                File::delete(public_path().$id->img);
            }
            return back()->with('success', 'El item fué eliminada correctamente!');
        }
            return back()->with('error', 'No se ha podido eliminar el item');
    }


    //------------------------------------------------------------
    // VERSIONES MODELO
    // -----------------------------------------------------------

    public function editVersiones(Modelo $modelo)
    {

        $modelo->versiones = $modelo->versiones()->get();

        return view('backend.modelos.formVersiones', compact('modelo'));
    }

    public function updateVersiones(Modelo $modelo, Request $request)
    {

        $sizeVersiones = count($request->versiones);
        $sizePrecios = count($request->precios);
        $sizeMonedas = count($request->monedas);

        if (($sizeVersiones == $sizePrecios) AND ($sizePrecios == $sizeMonedas)) {
            $modelo->versiones()->delete();


            if ($sizeVersiones>0) {
                for( $i=0 ; $i < $sizeVersiones ; $i++ ){
                    $version = new Version;
                    $version->nombre = $request->versiones[$i];
                    $version->precio = $request->precios[$i];
                    $version->moneda = $request->monedas[$i];
                    $version->modelo_id = $modelo->id;
                    $version->save();
                }
            }

            return back()->with('success', 'Versiones actualizadas');
        }

        return back()->with('error', 'Hay errores en el formulario');


    }

    public function publicarServicio(Request $request, $modelo_id)
    {
        // return $request;
        $modelo = Modelo::findOrFail($modelo_id);
        $modelo->publicar_servicio = $request->visible;
        $modelo->update();
        return;
    }


    //------------------------------------------------------------
    // API
    // -----------------------------------------------------------
    public function getModelos(Request $request)
    {

        $modelos = Modelo::with('versiones')->get();

        foreach ($request->query() as $query => $value) {
            $attribute = $query;

            if (isset($attribute, $value)) {
                $modelos = $modelos->where($attribute, $value);
            }
        }

        $data = new Collection;

        foreach ($modelos as $item)
            $data->push($item);
       

        return $this->showAll($data);
    }

    public function getModelo(Request $request, $slug)
    {
        $modelo = Modelo::with('versiones')
                        ->with('caracteristicas')
                        ->with('colores')
                        ->where('slug', $slug)
                        ->firstOrFail();       

        return $this->showOne($modelo);
    }


    public function crear()
    {
        $modelos = Modelo::all();

        foreach ($modelos as $modelo) {
            $modelo->gallery()->save(new ModeloGallery());
        }
    }

}

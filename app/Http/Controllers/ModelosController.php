<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Version;
use App\TipoVehiculo;
use App\PortadaModelo;
use App\ParallaxModelo;
use App\ImagenColorModelo;
use App\ImagenSliderModelo;
use App\ImagenGaleriaModelo;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\CaracteristicaModelo;
use Illuminate\Support\Facades\File;


class ModelosController extends Controller
{

    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::with('marca')->get();
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
        $modelo_name = strtolower($request->nombre);
       
        if ($request->hasFile('img_logo')) {
            $logo_img = $request->file('img_logo');
            $logo_name = $request->file('img_logo')->getClientOriginalName();
            $logo_img->move(public_path().'/imagenes/modelos/'.$modelo_name.'/',$logo_name);
        }

        if ($request->hasFile('img_logo')) {
            $modelo_img = $request->file('img_modelo');
            $modelo_name_img = $request->file('img_modelo')->getClientOriginalName();
            $modelo_img->move(public_path().'/imagenes/modelos/'.$modelo_name.'/',$modelo_name_img);
        }

        $modelo = new Modelo;
        $modelo->nombre = $request->nombre;
        $modelo->tipo_vehiculo_id = $request->tipo_vehiculo_id;
        $modelo->slogan = $request->slogan;
        $modelo->descripcion = $request->descripcion;
        $modelo->link_ficha_tecnica = $request->ficha_tecnica;
        $modelo->link_catalogo = $request->catalogo;
        $modelo->img_logo = '/imagenes/modelos/'.$modelo_name.'/'.$logo_name;
        $modelo->img_modelo = '/imagenes/modelos/'.$modelo_name.'/'.$modelo_name_img;

        $modelo->save();

        \Session::flash('flash_message','Modelo guardado correctamente.'); //<--FLASH MESSAGE

        return redirect('admin/modelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
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

         //return $request;
        $modelo = Modelo::find($id);
        $modelo_name = strtolower($request->nombre);

        if ($request->img_modelo ) {
            unlink(public_path().$modelo->img_modelo);
            $modelo_img = $request->file('img_modelo');
            $modelo_name_img = $request->file('img_modelo')->getClientOriginalName();
            $modelo_img->move(public_path().'/imagenes/modelos/'.$modelo_name.'/',$modelo_name_img);
            $modelo->img_modelo = '/imagenes/modelos/'.$modelo_name.'/'.$modelo_name_img;
        }
        if ($request->img_logo ) {
            unlink(public_path().$modelo->img_logo);
            $logo_img = $request->file('img_logo');
            $logo_name = $request->file('img_logo')->getClientOriginalName();
            $logo_img->move(public_path().'/imagenes/modelos/'.$modelo_name.'/',$logo_name);
            $modelo->img_logo = '/imagenes/modelos/'.$modelo_name.'/'.$logo_name;
        } 

        $modelo->nombre = $request->nombre;
        $modelo->slogan = $request->slogan;
        $modelo->tipo_vehiculo_id = $request->tipo_vehiculo_id;
        $modelo->descripcion = $request->descripcion;
        $modelo->link_ficha_tecnica = $request->ficha_tecnica;
        $modelo->link_catalogo = $request->catalogo;
        $modelo->update();

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
            unlink(public_path().$modelo->img_modelo);
        }
        if (file_exists(public_path().$modelo->img_logo)) {
            unlink(public_path().$modelo->img_logo);
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
        //return $request;

        $modelo = Modelo::find($id);
        $modelo_name = strtolower($modelo->nombre);
       
        //Editar Colores
        for( $i=0 ; $i < sizeof($request->old_color_id) ; $i++ ) {
            $color = ImagenColorModelo::findOrFail($request->old_color_id[$i]);
            $color->color = $request->old_color[$i];
            $color->codigo = $request->old_codigo[$i];

            if ( isset($request->old_img_colores) ){
                if ( array_key_exists($i, $request->old_img_colores) ){

                    if (file_exists(public_path() . $color->url))
                        unlink(public_path() . $color->url);
                   
                    $file = $request->file('old_img_colores')[$i];
                    $filename = $request->file('old_img_colores')[$i]->getClientOriginalName();
                    $file->move(public_path().'/imagenes/modelos/'.$modelo_name.'/colores/',$filename);
                    $color->url = '/imagenes/modelos/'.$modelo_name.'/colores/'.$filename;
                }
            }

            $color->update();
        }
        
        //Crear nuevos colores
        for( $i=0 ; $i < sizeof($request->img_colores) ; $i++ ) {
            $file = $request->file('img_colores')[$i];
            $filename = $request->file('img_colores')[$i]->getClientOriginalName();
            $file->move(public_path().'/imagenes/modelos/'.$modelo_name.'/colores/',$filename);
            $imagen_color = new ImagenColorModelo;
            $imagen_color->modelo_id = $modelo->id;
            $imagen_color->color = $request->color[$i];
            $imagen_color->codigo = $request->codigo[$i];
            $imagen_color->url = '/imagenes/modelos/'.$modelo_name.'/colores/'.$filename;
            $imagen_color->save();
        }

        //Eliminar
        for( $i=0 ; $i < sizeof($request->delete_color_ids) ; $i++ ) {
            $color = ImagenColorModelo::findOrFail($request->delete_color_ids[$i]);
            
            if (file_exists(public_path() . $color->url))
                    unlink(public_path() . $color->url);

            $color->delete();

        }

        return redirect('admin/modelos');
    }

    //------------------------------------------------------------
    // GALERIA MODELO
    // -----------------------------------------------------------
    public function editGaleria($id)
    {
        $modelo = Modelo::find($id);
        return view('backend.modelos.formGaleria', compact('modelo'));
    }

    public function updateGaleria(Request $request, $id)
    {
        $modelo = Modelo::find($id);
        $modelo_name = strtolower($modelo->nombre);
        $total = count($request->img_galeria);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ) {
                $file = $request->file('img_galeria')[$i];
                $filename = $request->file('img_galeria')[$i]->getClientOriginalName();
                $file->move(public_path().'/imagenes/modelos/'.$modelo_name.'/galeria/',$filename);
                $imagen = new ImagenGaleriaModelo;
                $imagen->modelo_id = $modelo->id;
                $imagen->url = '/imagenes/modelos/'.$modelo_name.'/galeria/'.$filename;
                $imagen->save();
            }
        }
        
        return redirect('admin/modelos');
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
        $modelo_name = strtolower($modelo->nombre);
        $total = count($request->img);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ) {
                $file = $request->file('img')[$i];
                $filename = $request->file('img')[$i]->getClientOriginalName();
                $file->move(public_path().'/imagenes/modelos/'.$modelo_name.'/caracteristicas/',$filename);
                $caracteristica = new CaracteristicaModelo;
                $caracteristica->modelo_id = $modelo->id;
                $caracteristica->titulo = $request->titulo[$i];
                $caracteristica->descripcion = $request->desc[$i];
                $caracteristica->img = '/imagenes/modelos/'.$modelo_name.'/caracteristicas/'.$filename;
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
    // PARALLAX / BANNER MODELO
    // -----------------------------------------------------------
    public function editParallax($id)
    {
        $modelo = Modelo::find($id);
        return view('backend.modelos.formParallax', compact('modelo'));
    }

    public function updateParallax(Request $request, $id)
    {
        $modelo = Modelo::find($id);
        $modelo_name = strtolower($modelo->nombre);
        $parallax = new ParallaxModelo;
        $parallax->modelo_id = $modelo->id;
        $parallax->texto = $request->texto;
        $file = $request->file('img');
        $filename = $request->file('img')->getClientOriginalName();
        $file->move(public_path().'/imagenes/modelos/'.$modelo_name.'/parallax/',$filename);
        $parallax->imagen = '/imagenes/modelos/'.$modelo_name.'/parallax/'.$filename;
        $parallax->save();

        return redirect('admin/modelos');
    }

    //------------------------------------------------------------
    // PORTADA MODELO
    // -----------------------------------------------------------
    public function editPortada($id)
    {
        $modelo = Modelo::find($id);
        
        //return view('backend.modelos.formSlider', compact('modelo'));
        return view('backend.modelos.formPortada', compact('modelo'));
    }

    public function updatePortada(Request $request, $id)
    {
        $modelo = Modelo::find($id);
        
        $modelo_name = strtolower($modelo->nombre);

        if ($request->create == 1) {

            $portada = new PortadaModelo;
            
            if ($request->hasFile('foto_desk')) {
                $portada->imagen_desktop = $request->file('foto_desk')->store('modelo-portada', ['disk' => 'public_uploads']); 
            }

            if ($request->hasFile('foto_mobile')) {
                $portada->imagen_mobile = $request->file('foto_mobile')->store('modelo-portada', ['disk' => 'public_uploads']);
            }
            if ($request->hasFile('foto_logo')) {
                $portada->logo = $request->file('foto_logo')->store('modelo-portada', ['disk' => 'public_uploads']); 
            }

            $portada->html = $request->html;

            $portada->modelo_id = $id;

            $portada->save();

        } else{

            $portada = $modelo->portada()->first();

            if ($request->hasFile('foto_desk')) {
                $portada->imagen_desktop = $request->file('foto_desk')->store('public/portada-modelos'); 
            }

            if ($request->hasFile('foto_mobile')) {
                $portada->imagen_mobile = $request->file('foto_mobile')->store('public/portada-modelos');
            }
            if ($request->hasFile('foto_logo')) {
                $portada->logo = $request->file('foto_logo')->store('public/portada-modelos'); 
            }

            $portada->html = $request->html;

            $portada->modelo_id = $id;

            $portada->update();
        }

        return back()->with('success', 'Portada Actualizada!');
    }

    public function editVersiones($id)
    {
        $modelo = Modelo::find($id);
        $versiones = Version::where('modelo_id','=', $id)->get();
        return view('backend.modelos.formVersiones', compact('modelo','versiones'));
    }

    public function updateVersiones($id, Request $request)
    {
        $modelo = Modelo::find($id);
        $total = count($request->versiones);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ){
                $version = new Version;
                $version->nombre = $request->versiones[$i];
                $version->precio = $request->precios[$i];
                $version->modelo_id = $modelo->id;
                $version->save();
            }
        }
        return redirect('admin/modelos');
    }

    public function publicarServicio(Request $request, $modelo_id)
    {
        // return $request;
        $modelo = Modelo::findOrFail($modelo_id);
        $modelo->publicar_servicio = $request->visible;
        $modelo->update();
        return;
    }

    public function getDestacados()
    {
        $modelos = Modelo::all();

        return $this->showAll($modelos);
    }
}

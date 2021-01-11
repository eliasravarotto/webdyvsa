<?php

namespace App\Http\Controllers;

use App\File;
use App\Color;
use App\Usado;
use App\ImagenGaleriaUsado;
use App\Traits\ImageHandler;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UsadoController extends Controller
{

    use ImageHandler;
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usados = Usado::all()->sortBy('interno');

        if( $request->ajax() ){
            return $usados;
        }

        return view('backend.usados.index', compact('usados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usado = new Usado;
        $colores = Color::select('color as text')->get();
        return view('backend.usados.create', compact('usado', 'colores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validarRequest($request);

        $usado = new Usado;
        $usado->dominio = $request->dominio;
        $usado->marca = $request->marca;
        $usado->modelo = $request->modelo;
        $usado->anio = $request->anio;
        $usado->interno = $request->interno;
        $usado->km = $request->km;
        $usado->precio = $request->precio;
        $usado->color = Color::where('color', $request->color)->first()->color;
        $usado->combustible = $request->combustible;
        $usado->transmision = $request->transmision;
        $usado->descripcion = $request->descripcion;
        $usado->uct = $request->uct;
        $request->visible == 'on' ? $usado->visible = 1 : $usado->visible = 0;
        $usado->orden = $request->orden;
        $usado->estado = $request->estado;
        $usado->save();

        if ($request->hasFile('foto')) {

            $usado->foto = $this->storeAndReziseImage($request, 'public/fotos', 'foto')->imagePath;

            $usado->update();
        } 

        return redirect('admin/usados/'.$usado->id.'/edit')->with('success', 'Datos guardados correctamente.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function edit(Usado $usado)
    {
        $colores = Color::select('color as text')->get();
        return view('backend.usados.edit', compact('usado', 'colores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usado $usado)
    {
        $this->validarRequest($request);

        $usado = Usado::find( $usado->id); 
        $usado->dominio = $request->dominio;
        $usado->marca = $request->marca;
        $usado->modelo = $request->modelo;
        $usado->anio = $request->anio;
        $usado->km = $request->km;
        $usado->color = Color::where('color', $request->color)->first()->color;
        $usado->precio = $request->precio;
        $usado->interno = $request->interno;
        $usado->combustible = $request->combustible;
        $usado->transmision = $request->transmision;
        $usado->descripcion = $request->descripcion;
        $usado->uct = $request->uct;
        $request->visible == 'on' ? $usado->visible = 1 : $usado->visible = 0;
        $usado->orden = $request->orden;
        $usado->estado = $request->estado;
        $usado->generateSlug();
        $usado->save();

        //Actualizar foto y borrar
        if ($request->hasFile('foto')) {
            if ($usado->foto != null) {
                Storage::delete($usado->foto);   
            }

            $usado->foto = $this->storeAndReziseImage($request, 'public/fotos', 'foto')->imagePath;

            $usado->update();
        }

        return  redirect('admin/usados')->with('success', 'Los datos fueron actulizados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Usado $usado)
    {
        foreach ($usado->photos as $photo) {
            Storage::delete($photo->path);
            $photo->delete();
        }

        Storage::delete($usado->foto);

        $usado->delete();
       
        return redirect('admin/usados')->with('success', 'La unidad fué eliminada correctamente!');

    }


    public function actualizarVisible(Request $request, $id)
    {
        $usado = Usado::find($id);
        $usado->visible = $request->visible;
        $usado->update();
        return $usado;
    }

    private function validarRequest( $request )
    {
       return $this->validate($request, [
            'anio' => 'required|integer|min:2008|max:' . date('Y'),
            'color' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'interno' => 'required|integer',
        ]);
    }


    public function addPhoto(Request $request, Usado $usado)
    {

        if ($request->hasFile('file')) {
            $photo = new File;

            $photo->path = $this->storeAndReziseImage($request, 'public/fotos', 'file')->imagePath;

            $photo->public_path = Storage::url($photo->path);

            $usado->photos()->save($photo);
            
            return $usado;
        }
        
    }

    public function deletePhoto(Request $request, Usado $usado)
    {
        $file = File::findOrFail($request->id);

        Storage::delete($file->path);

        $file->delete();

        return;
    }


    // APIRest

    public function getUsados(Request $request)
    {

        $usados = Usado::all();

        $usados = collect($this->filterData($usados));

        return $this->showAll($usados);


    }

    public function getUsado(Request $request, $slug)
    {


        $unidad = Usado::where('slug', '=', $slug)
                        ->with('photos')
                        ->firstOrFail();

        $unidad->foto = Storage::url($unidad->foto);

        return $this->showOne($unidad);


    }

}
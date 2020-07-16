<?php

namespace App\Http\Controllers;

use App\ImagenGaleriaUsado;
use App\Usado;
use App\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsadoController extends Controller
{
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
        $colores = Color::select('color as id', 'color as text')->get();
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
        $usado->color = Color::find($request->color)->color;
        $usado->combustible = $request->combustible;
        $usado->transmision = $request->transmision;
        $usado->descripcion = $request->descripcion;
        $usado->uct = $request->uct;
        $request->visible == 'on' ? $usado->visible = 1 : $usado->visible = 0;
        $usado->orden = $request->orden;
        $usado->estado = $request->estado;
        $usado->save();
        return $usado;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $extension = $request->file('foto')->extension();
            $foto_name = md5(date('Y-m-d H:i:s:u'));
            $foto->move(public_path().'/imagenes/usados/'.$usado->id.'/',$foto_name.'.'.$extension);
            $usado->foto = '/imagenes/usados/'.$usado->id.'/'.$foto_name.'.'.$extension;
            $usado->update();
        } 

        $this->uploadImages($request, $usado);

        return redirect('/admin/usados')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function show(Usado $usado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function edit(Usado $usado)
    {
        $imagenes_galeria = ImagenGaleriaUsado::where('usado_id', '=', $usado->id)->get();
        $colores = Color::select('id', 'color as text')->get();
        return view('backend.usados.edit', compact('usado', 'imagenes_galeria', 'colores'));
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
        $usado->color = $request->color;
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
                if(file_exists(public_path().$usado->foto)){
                    unlink(public_path().$usado->foto);    
                }
            }

            $foto = $request->file('foto');
            $foto_name = md5(date('Y-m-d H:i:s:u'));
            $extension = $request->file('foto')->extension();
            $foto->move(public_path().'/imagenes/usados/'.$usado->id.'/',$foto_name.'.'.$extension);
            $usado->foto = '/imagenes/usados/'.$usado->id.'/'.$foto_name.'.'.$extension;
            $usado->update();

        }

        $this->uploadImages($request, $usado);

        return redirect('/admin/usados')->with('success', 'Los datos fueron actulizados correctamente.');
    }

    public function uploadImages( $request, $usado )
    {
        $total = count($request->img_galeria);

        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ){
                $file = $request->file('img_galeria')[$i];
                $extension = $request->file('img_galeria')[$i]->extension();
                $originalName = $request->file('img_galeria')[$i]->getClientOriginalName();
                $filename = md5(date('Y-m-d H:i:s:u').$originalName).'.'.$extension;
                $file->move(public_path().'/imagenes/usados/'.$usado->id.'/',$filename);
                $imagen = new ImagenGaleriaUsado;
                $imagen->usado_id = $usado->id;
                $imagen->url = '/imagenes/usados/'.$usado->id.'/'.$filename;
                $imagen->save();
            }
        }

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usado  $usado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Usado $usado)
    {
        try {
            $imagenes_galeria = ImagenGaleriaUsado::where('usado_id', '=', $usado->id)->get();
            $total = count($imagenes_galeria);

            if ($total>0) {
                for( $i=0 ; $i < $total ; $i++ ){
                    unlink(public_path().$imagenes_galeria[$i]->url);
                    $imagenes_galeria[$i]->delete();
                }
            }

            $unlink = '';
            if ($usado->foto != null) {
                if (unlink(public_path().$usado->foto)) {
                    $unlink = '';
                } else{
                    $unlink = 'Error al eliminar la foto. No se encontró '.$usado->foto;
                }

                File::deleteDirectory(public_path('/imagenes/usados/'.$usado->id));
                
            }

            $usado->delete();

        } catch (Exception $e) {
            return back()->with('error', 'Error!'.$e);
        }
       
        return back()->with('success', 'La unidad fué eliminada correctamente!'.$unlink);

    }

    public function deleteImgGaleria($id)
    {
        $img_galeria = ImagenGaleriaUsado::find($id);
        unlink(public_path().$img_galeria->url);
        $img_galeria->delete();
        return back()->with('success', 'La imagen fué eliminada correctamente!');
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
            'anio' => 'required|integer|min:2012|max:2020',
        ]);
    }
}

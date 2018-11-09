<?php

namespace App\Http\Controllers;

use App\ImagenGaleriaUsado;
use App\Usado;
use Illuminate\Http\Request;

class UsadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usados = Usado::all();

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
        return view('backend.usados.create', compact('usado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $usado = new Usado;
        $usado->dominio = $request->dominio;
        $usado->marca = $request->marca;
        $usado->modelo = $request->modelo;
        $usado->anio = $request->anio;
        $usado->km = $request->km;
        $usado->precio = $request->precio;
        $usado->color = $request->color;
        $usado->descripcion = $request->descripcion;
        $usado->foto = '';
        $usado->save();

        $foto = $request->file('foto');
        $foto_name = $request->file('foto')->getClientOriginalName();
        $foto->move(public_path().'/imagenes/usados/'.$usado->id.'/',$foto_name);
        $usado->foto = '/imagenes/usados/'.$usado->id.'/'.$foto_name;
        $usado->update();

        $total = count($request->img_galeria);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ) { 
                $file = $request->file('img_galeria')[$i];
                $filename = $request->file('img_galeria')[$i]->getClientOriginalName();
                $file->move(public_path().'/imagenes/usados/'.$usado->id.'/',$filename);
                $imagen = new ImagenGaleriaUsado;
                $imagen->usado_id = $usado->id;
                $imagen->url = '/imagenes/usados/'.$usado->id.'/'.$filename;
                $imagen->save();
            }
        }
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
        return view('backend.usados.edit', compact('usado', 'imagenes_galeria'));
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
        $usado = Usado::find( $usado->id); 
        $usado->dominio = $request->dominio;
        $usado->marca = $request->marca;
        $usado->modelo = $request->modelo;
        $usado->anio = $request->anio;
        $usado->km = $request->km;
        $usado->color = $request->color;
        $usado->precio = $request->precio;
        $usado->descripcion = $request->descripcion;
        //$usado->foto = $request->foto;
        $usado->update();

        $total = count($request->nuevas_imagenes);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ){
                $file = $request->file('nuevas_imagenes')[$i];
                $filename = $request->file('nuevas_imagenes')[$i]->getClientOriginalName();
                $file->move(public_path().'/imagenes/usados/'.$usado->id.'/',$filename);
                $imagen = new ImagenGaleriaUsado;
                $imagen->usado_id = $usado->id;
                $imagen->url = '/imagenes/usados/'.$usado->id.'/'.$filename;
                $imagen->save();
            }
        }
   
        return redirect('/admin/usados')->with('success', 'Los datos fueron actulizados correctamente.');
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

            unlink(public_path().$usado->foto);
            $usado->delete();

        } catch (Exception $e) {
            return $e;
        }
       

    }

    public function deleteImgGaleria($id)
    {
        $img_galeria = ImagenGaleriaUsado::find($id);
        unlink(public_path().$img_galeria->url);
        $img_galeria->delete();
    }
}

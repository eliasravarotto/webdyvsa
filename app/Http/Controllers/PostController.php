<?php

namespace App\Http\Controllers;

use App\ImagenGaleriaPost;
use App\Post;
use App\PostTema;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $temas = PostTema::all();
        return view('backend.posts.create', compact('post', 'temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'titulo' => 'required',
            'tema_id' => 'required',
            'imagen_portada' => 'image',
            'contenido' => 'required'
        ]);

        $post = new Post;


        $post->titulo=$request->titulo;
        $post->tema_id=$request->tema_id;
        $post->contenido = $request->contenido;
        $post->orden = $request->orden;
        $post->generateSlug();
        $post->save();

        if ($request->hasFile('imagen_portada')) {
            $foto = $request->file('imagen_portada');
            $foto_name = $request->file('imagen_portada')->getClientOriginalName();
            $foto->move(public_path().'/imagenes/posts/'.$post->id.'/',$foto_name);
            $post->imagen_portada = '/imagenes/posts/'.$post->id.'/'.$foto_name;
            $post->update();
        } 

        return redirect('/admin/posts')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $temas = PostTema::all();
        return view('backend.posts.edit', compact('temas', 'post'));
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

        $this->validate($request, [
            'titulo' => 'required',
            'tema_id' => 'required',
            'imagen_portada' => 'image',
            'contenido' => 'required'
        ]);

        $post = Post::find($id);
        $post->titulo=$request->titulo;
        $post->tema_id=$request->tema_id;
        $post->contenido = $request->contenido;
        $post->orden = $request->orden;

        if ($request->hasFile('imagen_portada')) {
            if ($post->imagen_portada != null) {
                if(file_exists(public_path().$post->imagen_portada)){
                    unlink(public_path().$post->imagen_portada);    
                }
            }

            $foto = $request->file('imagen_portada');
            $foto_name = $request->file('imagen_portada')->getClientOriginalName();
            $foto->move(public_path().'/imagenes/posts/'.$post->id.'/',$foto_name);
            $post->imagen_portada = '/imagenes/posts/'.$post->id.'/'.$foto_name;
            $post->update();
        }

        $total = count($request->img_galeria);
        if ($total>0) {
            for( $i=0 ; $i < $total ; $i++ ) { 
                $file = $request->file('img_galeria')[$i];
                $originalname = $request->file('img_galeria')[$i]->getClientOriginalName();
                $filename = md5(date('Y-m-d H:i:s:u').$originalname);
                $file->move(public_path().'/imagenes/posts/'.$post->id.'/',$filename);
                $imagen = new ImagenGaleriaPost;
                $imagen->post_id = $post->id;
                $imagen->url = '/imagenes/posts/'.$post->id.'/'.$filename;
                $imagen->save();
            }
        }

        $post->update();

        return redirect('/admin/posts')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post->delete()) {
            return back()->with('success', 'El post fué eliminado correctamente!');
        } else{
            return back()->with('error', 'No se pudo eliminar el post!');
        }
    }

    public function deleteImgGaleria($id)
    {
        $img = ImagenGaleriaPost::find($id);
        unlink(public_path().$img->url);
        $img->delete();
        return back()->with('success', 'La imagen fué eliminada correctamente!');
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('frontend.posts.show', compact('post'));
    }
}

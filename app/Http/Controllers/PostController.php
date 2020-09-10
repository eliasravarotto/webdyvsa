<?php

namespace App\Http\Controllers;

use App\File;
use App\Post;
use App\PostTema;
use App\ImagenGaleriaPost;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use ImageHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

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
            'contenido' => 'required',
            'alt_img' => 'required'
        ]);

        $post = new Post;


        $post->titulo=$request->titulo;
        $post->tema_id=$request->tema_id;
        $post->contenido = $request->contenido;
        $post->orden = $request->orden;
        $post->alt_img = $request->alt_img;
        $post->generateSlug();
        $post->save();

        if ($request->hasFile('imagen_portada')) {

            $file = new File;

            $file->path = $this->storeAndRezise($request->file('imagen_portada'), 'public/fotos')->imagePath;

            $file->public_path = Storage::url($file->path);

            $file->save();
            
            $post->image()->save($file);

            $post->update();
        } 

        return redirect('/admin/posts')->with('success', 'Datos guardados correctamente.');
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
            'contenido' => 'required',
            'alt_img' => 'required'
        ]);

        $post = Post::find($id);
        $post->titulo=$request->titulo;
        $post->tema_id=$request->tema_id;
        $post->contenido = $request->contenido;
        $post->orden = $request->orden;
        $post->alt_img = $request->alt_img;

        if ($request->hasFile('imagen_portada')) {
            if ($post->image != null) {
                
                Storage::delete($post->image->path);     
                
                $post->image->delete();
            }


            $file = new File;

            $file->path = $this->storeAndRezise($request->file('imagen_portada'), 'public/fotos')->imagePath;

            $file->public_path = Storage::url($file->path);

            $file->save();
            
            $post->image()->save($file);
            
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
        $post = Post::findOrFail($id);

        if ($post->image != null) {
                
            Storage::delete($post->image->path);     
            
            $post->image->delete();
        }

        if ($post->delete()) {
            return back()->with('success', 'El post fué eliminado correctamente!');
        } else{
            return back()->with('error', 'No se pudo eliminar el post!');
        }
    }


    public function showPost($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('frontend.posts.show', compact('post'));
    }

    public function listPosts(Request $request)
    {
        return $request;
    }
}

<?php

namespace App\Http\Controllers;

use App\File;
use App\Post;
use App\Category;
use App\PostTema;
use App\ImagenGaleriaPost;
use App\Traits\ApiResponser;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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

        $posts = Post::containCategory($request->category)
                        ->orderBy('created_at', 'DESC')
                        ->get();

        $categories = Category::orderBy('name')->get();

        return view('backend.posts.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $categories = Category::all();
        return view('backend.posts.create', compact('post', 'categories'));
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
            'categories' => 'required',
            'imagen_portada' => 'image|required',
            'contenido' => 'required',
        ]);

        $post = Post::create($request->all());

        if(isset($request->vencimiento)){
            $post->vencimiento = $request->vencimiento;
            $post->update();
        }

        $post->categories()->sync($request->categories);

        if ($request->hasFile('imagen_portada')) {

            $file = new File;

            $file->path = $this->storeAndRezise($request->file('imagen_portada'), 'public/fotos')->imagePath;

            $file->public_path = Storage::url($file->path);

            $file->save();
            
            $post->image()->save($file);

            $post->imagen_portada = $post->image()->first()->public_path;
            
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
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('backend.posts.edit', compact('categories', 'post'));
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

        $this->validate($request, [
            'titulo' => 'required',
            'categories' => 'required',
            'contenido' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post->update($request->all());

        if(isset($request->vencimiento)){
            $post->vencimiento = $request->vencimiento;
        }else{
            $post->vencimiento = null;
        }


        $post->categories()->sync($request->categories);
        
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

            $post->imagen_portada = $post->image()->first()->public_path;
            
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
            return redirect()->route('posts.index')->with('success', 'El post fué eliminado correctamente!');
        } else{
            return redirect()->route('posts.index')->with('error', 'No se pudo eliminar el post!');
        }
    }


    public function getPosts(Request $request)
    {
        $today = date('Y-m-d');

        $posts = Post::with('image')
                        ->where('vencimiento', '>', $today)
                        ->orWhere('vencimiento', null)
                        ->with('categories')
                        ->orderBy('created_at', 'DESC')
                        ->get();

        $postsFiltered = new Collection();

        if (isset($request->categorias)) {

            $categories = explode(",", $request->categorias);


            foreach ($posts as $post) {
                
                $postCategories = $post->categories()->get()->pluck('slug')->toArray();
                
                if (sizeof(array_intersect($postCategories, $categories)) > 0)
                    $postsFiltered->push($post);
               
            }

            $posts = $postsFiltered;
        }

        foreach ($posts as $p) {
            $p->contenido = strip_tags($p->contenido);
            $json = html_entity_decode($p->contenido);
            $p->contenido = $json;
        }

        return $this->showAll($posts);
    }

    public function getPost(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return $this->showOne($post, 201);

    }
}

<?php

namespace App\Http\Controllers;

use App\File;
use App\Modelo;
use App\Accesorio;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

class AccesorioController extends Controller
{
    use ImageHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->texto_a_buscar == '') {
            $accesorios = Accesorio::paginate(10);
        }else{
            $texto_a_buscar = $request->texto_a_buscar;
            $accesorios_ids = Accesorio::join('modelos', 'accesorios.modelo_id', '=', 'modelos.id')
                                    ->where('accesorios.nombre', 'LIKE', '%' . $texto_a_buscar . '%')
                                   ->orWhere('modelos.nombre', 'LIKE', '%' . $texto_a_buscar . '%')
                                   ->select('accesorios.id')->get();

            $accesorios = Accesorio::whereIn('id', $accesorios_ids)->paginate(10);
        }
        return view('backend.accesorios.index', compact('accesorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accesorio = new Accesorio;
        $modelos = Modelo::select('id', 'nombre as text')->get();
        return view('backend.accesorios.create', compact('accesorio', 'modelos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validarRequest( $request );

        $accesorio = Accesorio::create($request->all());

        $files = $request->file('imagenes');
        $filesIds = [];
        foreach ($files as $foto) {
            $file = new File;

            // $file->store($foto);

            $file->path = $this->storeAndRezise($foto, 'public/fotos')->imagePath;

            $file->public_path = Storage::url($file->path);

            $file->save();

            array_push($filesIds, $file->id);
        }

        $accesorio->fotos()->attach($filesIds);

        return redirect('admin_accesorios')->with('success', 'Accesorio creado correctamente.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function edit( $accesorio )
    {   
        $accesorio = Accesorio::find($accesorio);
        $modelos = Modelo::select('id', 'nombre as text')->get();
        return view('backend.accesorios.edit', compact('accesorio', 'modelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $accesorio_id)
    {
        $this->validate($request, [
            'nombre' => 'required|string',
        ]);

        if ( !isset($request->imagenes) && !isset($request->imagenesOld)) {
           $this->validarRequest($request);
        }

        $fotos = [];
        // Guardar y subir las nuevas fotos
        if ($request->imagenes) {
            foreach ($request->imagenes as $foto) {
                $file = new File;

                $file->path = $this->storeAndRezise($foto, 'public/fotos')->imagePath;

                $file->public_path = Storage::url($file->path);

                $file->save();
                array_push($fotos, $file->id);
            }
        }

        if ($request->imagenesOld) {
            foreach ($request->imagenesOld as $foto_id) {
                array_push($fotos, intval($foto_id));
            }
        }

        $accesorio = Accesorio::findOrFail($accesorio_id);
        $accesorio->update($request->all());
        $accesorio->fotos()->sync($fotos);

        return redirect('admin_accesorios')->with('success', 'Actualizado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($accesorio_id)
    {   
        $accesorio = Accesorio::findOrFail($accesorio_id);
        $fotos = $accesorio->fotos()->get();
        $accesorio->fotos()->detach();
        foreach ($fotos as $f) {
            $f->delete();
        }
        $accesorio->delete();

        return redirect('admin_accesorios')->with('success', 'Accesorio eliminado.');
    }

    private function validarRequest( $request )
    {
       return $this->validate($request, [
            'nombre' => 'required|string',
            'imagenes' => 'required|array|min:1',
        ]);
    }

    public function indexFront( Request $request )
    {
        $modelo_id = null;
        $modelo = null;
        if ($request->modelo_id != null) {
            $modelo_id = $request->modelo_id;
            $accesorios = Accesorio::where('modelo_id', $modelo_id)->get();
        }else{
            $accesorios = Accesorio::all();
        }
        $modelos = Modelo::orderBy('orden', 'asc')->get();
        $modelo = Modelo::find($modelo_id);
        return view('frontend.posventa.accesorios.index', compact('accesorios', 'modelos', 'modelo_id', 'modelo'));
    }
}

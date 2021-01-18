<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Servicio;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ServicioController extends Controller
{

    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $modelos = Modelo::has('servicios', '>', 0)->get();

        return view('backend.servicios.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio = new Servicio;

        $modelos = Modelo::all();

        return view('backend.servicios.create', compact('servicio', 'modelos'));
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
        $servicio = Servicio::create($request->all());

        if(Input::get('add_another'))
        {
            return redirect()->route( 'admin_servicios.edit', $request->modelo_id );        
        }
        else
        {
            return redirect()->route( 'admin_servicios.index' );
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($modelo_id)
    {
        $modelo = Modelo::findOrFail($modelo_id);
        $modelos = Modelo::all();
        $servicio = new Servicio;
        $servicio->modelo_id = $modelo_id;
        return view('backend.servicios.edit', compact('modelo', 'modelos', 'servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $modelo_id)
    {
        // return $request;
        $i = 0;
        foreach ($request->servicios_ids as $id) {
            $servicio = Servicio::findOrFail($id);
            $servicio->nombre = $request->nombres[$i];
            $servicio->precio = $request->precios[$i];
            $servicio->update();
            $i++;
        }

        return redirect('admin_servicios')->with('success', 'Actualizados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $servicio_id;
    }

    private function validarRequest( $request )
    {
       return $this->validate($request, [
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            'modelo_id' => 'required|numeric',
        ]);
    }

    public function eliminarServicio(Request $request, $servicio_id)
    {
        // return $servicio_id;

        $servicio = Servicio::findOrFail($servicio_id);
        $servicio->delete();

        return back()->with('success', 'Eliminado');
    }


    public function listaDePrecios(Request $request)    {
       
        $modelos = Modelo::has('servicios', '>', 0)->with('servicios')->get();

        return $this->showAll($modelos);
    }

}

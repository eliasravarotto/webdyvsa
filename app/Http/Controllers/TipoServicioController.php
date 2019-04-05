<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\TipoServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TipoServicioController extends Controller
{

	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$servicios = TipoServicio::all();
        return view('backend.servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio = new TipoServicio;

        return view('backend.servicios.create', compact('servicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new TipoServicio;
        $servicio->nombre = $request->nombre;
        $servicio->etios = $request->etios;
        $servicio->corolla = $request->corolla;
        $servicio->hilux = $request->hilux;
        $servicio->hilux_sw4_4x4 = $request->hilux_sw4_4x4;
        $servicio->yaris = $request->yaris;
        $servicio->innova = $request->innova;
        $servicio->prius = $request->prius;
        $servicio->save();

        if(Input::get('add_another'))
        {
            return Redirect::to('admin/servicios/create');
        }
        else
        {
            return Redirect::to('admin/servicios');
        }
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
        $servicio = TipoServicio::find($id);
        return view('backend.servicios.edit', compact('servicio'));
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
        $servicio = TipoServicio::find($id);
        $servicio->nombre = $request->nombre;
        $servicio->etios = $request->etios;
        $servicio->corolla = $request->corolla;
        $servicio->hilux = $request->hilux;
        $servicio->hilux_sw4_4x4 = $request->hilux_sw4_4x4;
        $servicio->yaris = $request->yaris;
        $servicio->innova = $request->innova;
        $servicio->prius = $request->prius;
        $servicio->update();

        return redirect()->action('TipoServicioController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

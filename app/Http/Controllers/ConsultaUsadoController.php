<?php

namespace App\Http\Controllers;

use App\ConsultaUsado;
use App\Events\SeConsultoPorUsado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultaUsadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $consulta = new ConsultaUsado;
        $consulta->nombre = $request->nombre;
        $consulta->telefono = $request->telefono;
        $consulta->email = $request->email;
        $consulta->mensaje = $request->mensaje;
        $consulta->marca = $request->marca;
        $consulta->modelo = $request->modelo;
        $consulta->enviar_a = 'fabianaaranda@derkayvargas.com.ar';
        //$consulta->enviar_a = 'eliasravarotto@derkayvargas.com.ar';

        $consulta->save();

        event( new SeConsultoPorUsado($consulta));

        if($request->ajax()){
            return 'ok';
        }  
              
        return redirect('/usados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsultaUsado  $consultaUsado
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultaUsado $consultaUsado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsultaUsado  $consultaUsado
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultaUsado $consultaUsado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsultaUsado  $consultaUsado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultaUsado $consultaUsado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsultaUsado  $consultaUsado
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultaUsado $consultaUsado)
    {
        //
    }
}

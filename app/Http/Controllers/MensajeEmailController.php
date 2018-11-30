<?php

namespace App\Http\Controllers;

use App\MensajeEmail;
use Illuminate\Http\Request;

class MensajeEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = MensajeEmail::all();
        return view('backend.contacto.index', compact('mensajes'));
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
        try {
            $mensaje = new MensajeEmail;
            $mensaje->cliente = $request->cliente;
            $mensaje->telefono = $request->telefono;
            $mensaje->email = $request->email;
            $mensaje->mensaje = $request->mensaje;
            $mensaje->save();

            //event( new SeHaSolicitadoTestDrive($test_drive));

            return redirect('/contacto')->with('status', 'Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad.');

        } catch (Exception $e) {
            return redirect('/contacto')->with('error', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MensajeEmail  $mensajeEmail
     * @return \Illuminate\Http\Response
     */
    public function show(MensajeEmail $mensajeEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MensajeEmail  $mensajeEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(MensajeEmail $mensajeEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MensajeEmail  $mensajeEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MensajeEmail $mensajeEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MensajeEmail  $mensajeEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MensajeEmail $mensajeEmail)
    {
        //
    }
}

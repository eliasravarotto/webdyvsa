<?php

namespace App\Http\Controllers;

use Validator;
use App\MensajeEmail;
use Illuminate\Http\Request;


class MensajeEmailController extends Controller
{
    private $froms=['contacto', 'financiacion', 'tpa', 'la_voz_del_cliente', 'usados'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $froms = $this->froms;
        $filterFroms = collect($request->filterFroms);
        $cliente = $request->cliente;
        $desde = $request->desde;
        $hasta = $request->hasta;

        $mensajes = MensajeEmail::cliente($request->cliente)
                    ->filterFroms($request->filterFroms)
                    ->desde($request->desde)
                    ->hasta($request->hasta)
                    ->orderBy('created_at', 'DESC')
                    ->get();

        return view('backend.contacto.index', compact('mensajes', 'froms', 'filterFroms', 'cliente', 'desde', 'hasta'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MensajeEmail  $mensajeEmail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = MensajeEmail::find($id);
        return view('backend.contacto.show', compact('mensaje'));
    }

}

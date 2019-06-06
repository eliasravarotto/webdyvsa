<?php

namespace App\Http\Controllers;

use App\Events\HaIngresadoUnaConsulta;
use App\MensajeEmail;
use Illuminate\Http\Request;
use Validator;

use GuzzleHttp\Client;
use App\Http\Requests\ReCaptchataTestFormRequest;


class MensajeEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($from = null)
    {
        if ($from == null) {
            $mensajes = MensajeEmail::all()->orderBy('created_at', 'DESC')->get();
        } else{
            $mensajes = MensajeEmail::where('from', '=', $from)->orderBy('created_at', 'DESC')->get();
        }

        return view('backend.contacto.index', compact('mensajes', 'from'));
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
    public function store(ReCaptchataTestFormRequest $request)
    {
        if ($request->email == null) {
            $this->validate($request, [
                'from' => 'required',
                'cliente' => 'required',
                'telefono' => 'required',
                'mensaje' => 'required',
                'g-recaptcha-response' => 'required',
            ]);
        }
        if ($request->telefono == null) {
            $this->validate($request, [
                'from' => 'required',
                'cliente' => 'required',
                'email' => 'required',
                'mensaje' => 'required',
                'g-recaptcha-response' => 'required',
            ]);

        }

        try {
            $mensaje = new MensajeEmail;
            $mensaje->cliente = $request->cliente;
            $mensaje->telefono = $request->telefono;
            $mensaje->email = $request->email;
            $mensaje->mensaje = $request->mensaje;
           
            switch ($request->from) {
                case 'financiacion':
                    $from = 'financiacion';
                    $asunto ='Consulta - Financiación';
                    $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                    break;
                case 'tpa':
                    $from = 'tpa';
                    $asunto ='Consulta desde Pagina Web TPA';
                    $enviar_a = env('RECEPTOR_EMAILS_TPA');
                    break;
                case 'usados':
                    $from = 'usados';
                    $asunto ='Consulta desde Pagina Web TPA';
                    $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                    break;
                case 'financiacion_plan_nacional':
                    $from = 'Financiacion Plan Nacional';
                    $asunto ='Consulta por Financiación Nuevo Plan Nacional';
                    $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                    break;
                default:
                    $from = 'contacto';
                    $asunto ='Consulta desde Pagina Web';
                    $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                    break;
            }

            $mensaje->from = $from;
            $mensaje->enviar_a = $enviar_a;
            $mensaje->save();

            event( new HaIngresadoUnaConsulta($mensaje, $asunto));

            return back()->with('success','Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad!');

        } catch (Exception $e) {

            return back()->with('success','Lo sentimos ha ocurrido un error, por favor intente mas tarde.');
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

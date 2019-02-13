<?php

namespace App\Http\Controllers;

use App\Events\HaIngresadoUnaConsulta;
use App\Http\Requests\ReCaptchataTestFormRequest;
use App\MensajeEmail;
use Illuminate\Http\Request;
// use GuzzleHttp\Client;


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

        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $data = array(
        //     'secret' => 'API-SECRET',
        //     'response' => $request["g-recaptcha-response"]
        // );

        // $options = array(
        //     'http' => array (
        //         'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
        //             "User-Agent:MyAgent/1.0\r\n",
        //         'method' => 'POST',
        //         'content' => http_build_query($data)
        //     )
        // );

        // $context  = stream_context_create($options);
        // $verify = file_get_contents($url, false, $context);
        // $captcha_success = json_decode($verify);
        
        // if ($captcha_success->success) {
        //     return 'Se envía el formulario';
        // } else {
        //     return 'No se envía el formulario';
        // }
        // return $request;

        try {
            $mensaje = new MensajeEmail;
            $mensaje->cliente = $request->cliente;
            $mensaje->telefono = $request->telefono;
            $mensaje->email = $request->email;
            $mensaje->mensaje = $request->mensaje;
           
            switch ($request->from) {
                case 'financiacion':
                    $asunto ='Consulta - Financiación';
                    $enviar_a = 'fabianaaranda@derkayvargas.com.ar';
                    // $enviar_a = 'eliasravarotto@derkayvargas.com.ar';
                    break;
                case 'tpa':
                    $asunto ='Consulta desde Pagina Web TPA';
                    $enviar_a = 'santiagogaliano@derkayvargas.com.ar';
                    // $enviar_a = 'eliasravarotto@derkayvargas.com.ar';
                    break;
                default:
                    $asunto ='Consulta desde Pagina Web';
                    $enviar_a = 'fabianaaranda@derkayvargas.com.ar';
                    // $enviar_a = 'eliasravarotto@derkayvargas.com.ar';
                    break;
            }

            $mensaje->enviar_a = $enviar_a;
            $mensaje->save();

            event( new HaIngresadoUnaConsulta($mensaje, $asunto));

            if ($request->from == 'contacto') {
                return redirect('/contacto')->with('status', 'Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad.');
            } else if($request->from == 'tpa') {
                 return redirect('/plan-de-ahorro')->with('status', 'Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad.');
            } else{
                return redirect('/financiacion')->with('status', 'Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad.');
            }

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

<?php

namespace App\Http\Controllers;

use Validator;
use App\MensajeEmail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\HaIngresadoUnaConsulta;
use App\Http\Requests\ReCaptchataTestFormRequest;


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
        //return $request;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(ReCaptchataTestFormRequest $request)
    public function store(Request $request)
    {

        $this->validate($request, [
            'from' => 'required',
            'cliente' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required',
            'sucursal' => 'required',
            'g-recaptcha-response' => 'required',
        ]);


        $mensaje = new MensajeEmail;
        $mensaje->cliente = $request->cliente;
        $mensaje->telefono = $request->telefono;
        $mensaje->email = $request->email;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->derivar_a = $request->sucursal;
           
        switch ($request->from) {
            case 'financiacion':
                $from = 'financiacion';
                $asunto ='Consulta - Financiación';
                $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['maurovargas@derkayvargas.com.ar'];
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            case 'tpa':
                $from = 'tpa';
                $asunto ='Consulta desde Pagina Web TPA';
                $enviar_a = env('RECEPTOR_EMAILS_TPA');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['maurovargas@derkayvargas.com.ar'];
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            case 'usados':
                $from = 'usados';
                $asunto ='Consulta desde Pagina Web';
                $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['maurovargas@derkayvargas.com.ar'];
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            default:
                $from = 'contacto';
                $asunto ='Consulta desde Pagina Web';
                $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['eliasravarotto@gmail.com'];
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
        }

        return back()->with('success','Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad!');
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

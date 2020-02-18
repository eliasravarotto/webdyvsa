<?php

namespace App\Http\Controllers;

use App\Events\HaIngresadoUnaConsulta;
use App\MensajeEmail;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
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
        //return $request;
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
                $cc = ['elias.ravarotto@gmail.com']; //$cc = ['rukyguerra@derkayvargas.com.ar'];
                $this->enviarRtaAutomatica($mensaje->email);
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            case 'tpa':
                $from = 'tpa';
                $asunto ='Consulta desde Pagina Web TPA';
                $enviar_a = env('RECEPTOR_EMAILS_TPA');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['elias.ravarotto@gmail.com']; //$cc = ['rukyguerra@derkayvargas.com.ar'];
                $this->enviarRtaAutomatica($mensaje->email);
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            case 'usados':
                $from = 'usados';
                $asunto ='Consulta desde Pagina Web TPA';
                $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $this->enviarRtaAutomatica($mensaje->email); 
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
            default:
                $from = 'contacto';
                $asunto ='Consulta desde Pagina Web';
                $enviar_a = env('RECEPTOR_EMAILS_CONTACTO');
                $mensaje->from = $from;
                $mensaje->enviar_a = $enviar_a;
                $mensaje->save();
                $cc = ['elias.ravarotto@gmail.com']; //$cc = ['rukyguerra@derkayvargas.com.ar'];
                $this->enviarRtaAutomatica($mensaje->email); 
                event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));
                break;
        }

        return back()->with('success','Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad!');
    }

    public function storeVozDelCli(ReCaptchataTestFormRequest $request)
    {
        $this->validate($request, [
            'vdc_from' => 'required',
            'vdc_cliente' => 'required',
            'vdc_email' => 'required',
            'vdc_telefono' => 'required',
            'vdc_mensaje' => 'required',
            'g-recaptcha-response' => 'required',
        ], [
            'vdc_cliente.required' => 'El campo nombre y apellido es obligatorio',
            'vdc_email.required' => 'El campo email es obligatorio',
            'vdc_telefono.required' => 'El campo teléfono es obligatorio',
            'vdc_mensaje.required' => 'El campo mensaje es obligatorio',
        ]);

        $mensaje = new MensajeEmail;
        $mensaje->cliente = $request->vdc_cliente;
        $mensaje->telefono = $request->vdc_telefono;
        $mensaje->email = $request->vdc_email;
        $mensaje->mensaje = $request->vdc_mensaje;
        $mensaje->from = $request->vdc_from;
        $mensaje->enviar_a = env('RECEPTOR_EMAILS_VOZ_DEL_CLIENTE');
        $mensaje->save();
        $asunto ='La voz del Cliente - Nuevo Mensaje';
        $cc = ['elias.ravarotto@gmail.com']; //$cc = ['rukyguerra@derkayvargas.com.ar'];

        event( new HaIngresadoUnaConsulta($mensaje, $asunto, $cc));

        // Mail::send('emails.consulta', ['consulta' => $mensaje], function ($message) use ($mensaje, $asunto){
        //     $message->subject($asunto);
        //     $message->to($mensaje->enviar_a)
        //             ->cc(['rukyguerra@derkayvargas.com.ar','fabianaaranda@derkayvargas.com.ar']);
        // });
        $this->enviarRtaAutomatica($mensaje->email); 

        return back()->with('success','Gracias por escribirnos, su mensaje ha sido enviado.');
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

    public function enviarRtaAutomatica($email)
    {
        Mail::send('emails.rta-aut', [], function ($message) use ($email){
            $message->subject('Recibimos tu mensaje');
            $message->to($email);
        });
    }
}

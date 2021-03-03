<?php

namespace App\Http\Controllers;

use App\Message;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    use ApiResponser;

    protected $refer = 'contacto, financiacion, tpa, la_voz_del_cliente, usados';


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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'sucursal' => 'in:Sáenz Peña,Resistencia,Charata,Villa Ángela',
            'from' => 'required|in:contacto,financiacion,tpa,la_voz_del_cliente,usados',
        ];

        $this->validate($request, $rules);

        $message = Message::create($request->all());

        if ($request->from == 'contacto' ){
            Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        if ($request->from == 'financiacion' ){
            Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        if ($request->from == 'tpa' ){
            $message->message .= ' - Localidad: ' . $request->localidad;
            Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        if ($request->from == 'la_voz_del_cliente' ){
            Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        if ($request->from == 'usados' ){
            Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        return $this->showOne($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}

<?php

namespace App\Listeners;

use App\Events\HaIngresadoUnaConsulta;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailConsulta
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HaIngresadoUnaConsulta  $event
     * @return void
     */
    public function handle(HaIngresadoUnaConsulta $event)
    {
        $consulta = $event->consulta;
        $asunto = $event->asunto;
        $cc = $event->cc;

        if ( (stripos($consulta->mensaje,'mail') !== false) ||
             (stripos($consulta->mensaje,'email') !== false) ||
             (stripos($consulta->mensaje,'correo') !== false)
        ){
            $asunto = 'Lead Web - Posible mistery';
        }

        Mail::send('emails.consulta', ['consulta' => $consulta], function ($message) use ($consulta, $asunto, $cc){
            $message->subject($asunto);
            $message->to($consulta->enviar_a)->cc($cc);
        });

        Mail::send('emails.rta-aut', [], function ($message) use ($consulta){
            $message->subject('Recibimos tu mensaje');
            $message->to($consulta->email);
        });
    }
}

<?php

namespace App\Listeners;

use App\Events\SeConsultoPorUsado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailConsultaUsado implements ShouldQueue
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
     * @param  SeConsultoPorUsado  $event
     * @return void
     */
    public function handle(SeConsultoPorUsado $event)
    {
        $consulta = $event->consulta_usado;
        //return $consulta->modelo;

        Mail::send('emails.consulta-usado', ['consulta' => $consulta], function ($message) use ($consulta){

            $unidad = $consulta->marca.' '.$consulta->modelo;
            $message->subject('Consulta sobre la unidad -'.$unidad);
            $message->to($consulta->enviar_a);

        });
    }
}

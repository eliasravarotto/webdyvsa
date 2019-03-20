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

        Mail::send('emails.consulta', ['consulta' => $consulta], function ($message) use ($consulta, $asunto){
            $message->subject($asunto);
            $message->to($consulta->enviar_a)->cc('rukyguerra@derkayvargas.com.ar');
        });
    }
}

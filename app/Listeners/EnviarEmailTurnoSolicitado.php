<?php

namespace App\Listeners;

use App\Events\SeHaSolicitadoUnTurno;
use App\TurnoServicio;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnviarEmailTurnoSolicitado
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
     * @param  SeHaSolicitadoUnTurno  $event
     * @return void
     */
    public function handle(SeHaSolicitadoUnTurno $event)
    {
        $turno = TurnoServicio::where('id', $event->turno->id)->with('sucursal')->first();
        
        Mail::send('emails.solicitud-turno', ['turno' => $turno], function ($message) use ($turno){

            $message->subject('Solicitud de Turno');

            $receptores = unserialize($turno->enviar_a);

            foreach ($receptores as $receptor) {
                $message->to($receptor);
            }
        });
    }
}

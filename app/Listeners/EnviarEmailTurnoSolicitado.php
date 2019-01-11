<?php

namespace App\Listeners;

use App\Events\SeHaSolicitadoUnTurno;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnviarEmailTurnoSolicitado implements ShouldQueue
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
        $turno = DB::select('SELECT
                                turno_servicios.id,
                                turno_servicios.cliente,
                                turno_servicios.telefono,
                                turno_servicios.email,
                                turno_servicios.fecha,
                                turno_servicios.modelo,
                                turno_servicios.dominio,
                                turno_servicios.comentario,
                                turno_servicios.enviar_a,
                                turno_servicios.created_at,
                                sucursales.nombre AS sucursal,
                                tipo_servicios.nombre as tipo_de_servicio
                                FROM
                                turno_servicios
                                INNER JOIN sucursales ON turno_servicios.sucursal_id = sucursales.id
                                INNER JOIN tipo_servicios ON turno_servicios.servicio_id = tipo_servicios.id
                                WHERE
                                turno_servicios.id = ?
                                ',[$event->turno->id])[0];
        
        Mail::send('emails.solicitud-turno', ['turno' => $turno], function ($message) use ($turno){

            $message->subject('Solicitud de Turno');

            $receptores = unserialize($turno->enviar_a);

            foreach ($receptores as $receptor) {
                $message->to($receptor);
            }
        });
    }
}

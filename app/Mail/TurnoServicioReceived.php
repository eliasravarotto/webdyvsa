<?php

namespace App\Mail;

use App\TurnoServicio;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TurnoServicioReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $turno;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TurnoServicio $turno)
    {
        $this->turno = $turno;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.turno-servicio-received')->subject('Solicitud de turno.');
    }
}

<?php

namespace App\Mail;

use App\SolicitudTestDrive;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestDriveReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitudTD;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SolicitudTestDrive $solicitudTD)
    {
        $this->solicitudTD = $solicitudTD;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.solicitud-testdrive-received')->subject('Solicitud de Test Drive.');
    }
}

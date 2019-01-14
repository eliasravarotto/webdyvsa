<?php

namespace App\Listeners;

use App\Events\SeHaSolicitadoTestDrive;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailTestDriveSolicitado
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
     * @param  SeHaSolicitadoTestDrive  $event
     * @return void
     */
    public function handle(SeHaSolicitadoTestDrive $event)
    {
        $test_drive = $event->test_drive;

        Mail::send('emails.solicitud-test-drive', ['test_drive' => $test_drive], function ($message) use ($test_drive){

            $message->subject('Solicitud de Test Drive');
            $message->to($test_drive->enviar_a);
            //$message->to('eliasravarotto@derkayvargas.com.ar');
        });
    }
}

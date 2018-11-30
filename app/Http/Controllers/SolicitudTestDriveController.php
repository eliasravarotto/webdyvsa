<?php

namespace App\Http\Controllers;

use App\SolicitudTestDrive;
use App\Sucursal;
use Illuminate\Http\Request;
use App\Events\SeHaSolicitadoTestDrive;

class SolicitudTestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = SolicitudTestDrive::orderBy('id', 'DESC')->get();
        return view('backend.test-drive.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::where('tiene_test_drive', '=', 1)->get();
        return view('frontend.test-drive.form', compact('sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $test_drive = new SolicitudTestDrive;
            $test_drive->cliente = $request->cliente;
            $test_drive->telefono = $request->telefono;
            $test_drive->fecha_estimada = $request->fecha_estimada;
            $test_drive->modelo = $request->modelo;
            $test_drive->sucursal_id = $request->sucursal;

            switch ($request->sucursal) {
                case 1:
                    $email = 'eliasravarotto@derkayvargas.com.ar';
                    break;
                case 2:
                    $email = 'elias.ravarotto@gmail.com';
                    break;
                case 3:
                   $email = 'eliasravarotto@derkayvargas.com.ar';
                    break;
                case 4:
                    $email = 'eliasravarotto@derkayvargas.com.ar';
                    break;
                case 5:
                    $email = 'eliasravarotto@derkayvargas.com.ar';
                    break;
            }
            $test_drive->enviar_a = $email;
            $test_drive->save();

            event( new SeHaSolicitadoTestDrive($test_drive));

            return redirect('/test-drive/create')->with('status', 'Su solicitud fué enviada correctamente, estaremos en contacto con usted a la brevedad.');
        }
        catch (\Exception $e) {
            return redirect('/test-drive/create')->with('error', 'Lo sentimos ha ocurrido un error por favor intente más tarde');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitudTestDrive  $solicitudTestDrive
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitudTestDrive $solicitudTestDrive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitudTestDrive  $solicitudTestDrive
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitudTestDrive $solicitudTestDrive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SolicitudTestDrive  $solicitudTestDrive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudTestDrive $solicitudTestDrive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SolicitudTestDrive  $solicitudTestDrive
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitudTestDrive $solicitudTestDrive)
    {
        //
    }
}

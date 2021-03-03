<?php

namespace App\Http\Controllers;

use App\Sucursal;
use App\SolicitudTestDrive;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Mail\TestDriveReceived;
use Illuminate\Support\Facades\Mail;
use App\Events\SeHaSolicitadoTestDrive;

class SolicitudTestDriveController extends Controller
{

    use ApiResponser;

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
        //return $request;
        $rules = [
            'cliente' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'fecha_estimada' => 'required',
            'modelo' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'sucursal' => 'in:Sáenz Peña,Resistencia,Charata,Villa Ángela',
            'from' => 'in:app,web-site',
        ];

        $this->validate($request, $rules);

        $test_drive = SolicitudTestDrive::create($request->all());

        switch ($request->sucursal) {
            case 'Sáenz Peña':
                // $email = env('RECEPTOR_EMAILS_TESTDRIVE'); //SAENZ PEÑA
                $email  = 'eliasravarotto@derkayvargas.com.ar';
                Mail::to($email)->send(new TestDriveReceived($test_drive));
                break;
            case 'Resistencia':
                // $email = env('RECEPTOR_EMAILS_TESTDRIVE'); //RESISTENCIA
                $email = 'eliasravarotto@derkayvargas.com.ar';
                Mail::to($email)->send(new TestDriveReceived($test_drive));
                break;
            case 'Charata':
                // $email = env('RECEPTOR_EMAILS_TESTDRIVE'); //CHARATA
                $email = 'eliasravarotto@derkayvargas.com.ar';
                Mail::to($email)->send(new TestDriveReceived($test_drive));
                break;
            case 'Villa Ángela':
                // $email = env('RECEPTOR_EMAILS_TESTDRIVE'); //VILLA ANGELA
                $email = 'eliasravarotto@derkayvargas.com.ar';
                Mail::to($email)->send(new TestDriveReceived($test_drive));
                break;
        }

        $test_drive->enviar_a = $email;
        $test_drive->save();

        return $this->showOne($test_drive);
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

<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Servicio;
use App\Sucursal;
use App\TurnoServicio;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\TurnoServicioReceived;
use Illuminate\Support\Facades\Mail;
use App\Events\SeHaSolicitadoUnTurno;
use App\Http\Requests\ReCaptchataTestFormRequest;

class TurnoServicioController extends Controller
{

    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = TurnoServicio::orderBy('created_at', 'DESC')->get();
        
        return view('backend.solicitudes-turno.index', compact('solicitudes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = ['from' => 'in:web-site,app'];

        if ($request->from == 'app') {
            $rules = [
                'cliente' => 'required|string', 
                'telefono' =>'required|int', 
                'email' => 'required|email', 
                'modelo' => 'required|string',
                'dominio' => 'required|string',
                'servicio' => 'required|string',
                'fecha' => 'required|string',
                'sucursal' => 'in:Sáenz Peña,Resistencia,Charata',
                'from' => 'in:web-site,app',
            ];
        }

        if ($request->from == 'web-site') {
            $rules = [
                'cliente' => 'required|string', 
                'telefono' =>'required|int', 
                'email' => 'required|email', 
                'modelo' => 'required|string',
                'dominio' => 'required|string',
                'servicio' => 'required|string',
                'fecha' => 'required|string',
                'g-recaptcha-response' => 'required|captcha',
                'sucursal' => 'in:Sáenz Peña,Resistencia,Charata',
                'from' => 'in:web-site,app',
            ];
        }

        $this->validate($request, $rules);

        $turno = TurnoServicio::create($request->all());

        return $this->showOne($turno, 200);

        switch ($turno->sucursal) {
            case 'Sáenz Peña':
                Mail::to('fabianaaranda@derkayvargas.com.ar')->send(new TurnoServicioReceived($turno));
                //"fabianaaranda@derkayvargas.com.ar";
                break;
            case 'Resistencia':
                Mail::to('franciscozago@derkayvargas.com.ar')
                    ->cc(['marcoruiz@derkayvargas.com.ar', 'federicow@derkayvargas.com.ar'])
                    ->send(new TurnoServicioReceived($turno));
                //"franciscozago@derkayvargas.com.ar" "marcoruiz@derkayvargas.com.ar" "federicow@derkayvargas.com.ar";
                break;
            case 'Charata':
                Mail::to('fabianaaranda@derkayvargas.com.ar')->send(new TurnoServicioReceived($turno));
                //"fabianaaranda@derkayvargas.com.ar"
                break;
        }


        return $this->showOne($turno, 200);

    }

    public function show($id)
    {
        $solicitud = TurnoServicio::findOrFail($id);

        
        return view('backend.solicitudes-turno.show', compact('solicitud'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Servicio;
use App\Sucursal;
use App\TurnoServicio;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
    public function index(Request $request)
    {

        //$solicitudes = TurnoServicio::orderBy('created_at', 'DESC')->get();

        $solicitudes = TurnoServicio::cliente($request->cliente)
                    ->from($request->from)
                    ->email($request->email)
                    ->telefono($request->telefono)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(20);

                    // return $solicitudes->total();
        
        return view('backend.solicitudes-turno.index', compact('solicitudes'));
    }

    public function panelPrincipal(Request $request)
    {

        $total = TurnoServicio::all()->count();

        $atendidas = TurnoServicio::where('atendido', 1)->count();

        $pendientes = TurnoServicio::where('atendido', 0)->count();

        $solicitudes = TurnoServicio::whereDate('created_at', Carbon::today())->paginate(20);

        return view('backend.solicitudes-turno.panel-ppal', compact('solicitudes', 'total', 'atendidas', 'pendientes'));
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


    public function update(Request $request, TurnoServicio $solicitud)
    {
        $rules = [
                'atendido' => 'required|boolean', 
        ];

        $this->validate($request, $rules);

        $solicitud->atendido = $request->atendido;

        $solicitud->update();

        return back()->with('success', 'Solicitud actualizada.');

    }

    public function show(TurnoServicio $solicitud)
    {
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
    

    public function atender(Request $request, TurnoServicio $solicitud)
    {

        $solicitud->atendido = !$solicitud->atendido;

        $solicitud->update();

        return back()->with('success', 'Solicitud actualizada.');
    }
}

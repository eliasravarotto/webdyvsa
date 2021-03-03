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
        $solicitudes = TurnoServicio::with('sucursal')->get();
        
        return view('backend.solicitudes-turno.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sucursales = Sucursal::where('tiene_posventa', '=', 1)->get();

        $servicios = Servicio::groupBy('nombre')->get();

        $modelos = Modelo::where('activo', 1)->orderBy('orden', 'ASC')->get();

        return view('frontend.posventa.form-turno-servicio', compact('sucursales','servicios', 'modelos', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
                'from' => 'in:web-site, app',
            ];

            $this->validate($request, $rules);

            $turno = TurnoServicio::create($request->all());

            switch ($turno->sucursal) {
                case 'Sáenz Peña':
                    Mail::to('eliasravarotto@derkayvargas.com.ar')->cc(['elias.ravarotto@gmail.com', 'elias_rvt@hotmail.com'])->send(new TurnoServicioReceived($turno));
                    //"fabianaaranda@derkayvargas.com.ar";
                    break;
                case 'Resistencia':
                    Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new TurnoServicioReceived($turno));
                    //"franciscozago@derkayvargas.com.ar" "marcoruiz@derkayvargas.com.ar" "federicow@derkayvargas.com.ar";
                    break;
                case 'Charata':
                    Mail::to('eliasravarotto@derkayvargas.com.ar')->send(new TurnoServicioReceived($turno));
                    //"fabianaaranda@derkayvargas.com.ar"
                    break;
            }

            if($request->is('api/*')){
                return $this->showOne($turno, 200);
            }else{
                return back()->with('success','Su turno fue solicitado, estaremos en contacto con usted a la brevedad para su confirmación');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud = TurnoServicio::find($id);
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

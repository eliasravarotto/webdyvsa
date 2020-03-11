<?php

namespace App\Http\Controllers;

use App\Events\SeHaSolicitadoUnTurno;
use App\Http\Requests\ReCaptchataTestFormRequest;
use App\Modelo;
use App\Servicio;
use App\Sucursal;
use App\TurnoServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurnoServicioController extends Controller
{
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
    public function store(ReCaptchataTestFormRequest $request)
    {
        // return $request;
            $turno = new TurnoServicio;
            $turno->cliente = $request->cliente;
            $turno->telefono = $request->telefono;
            $turno->email = $request->email;
            $turno->fecha = $request->fecha;
            $turno->modelo = $request->modelo;
            $turno->dominio = $request->dominio;
            $turno->servicio = $request->servicio;
            $turno->sucursal_id = $request->sucursal;
            $turno->comentario = $request->comentario;

            $receptopres = [];

            switch ($turno->sucursal_id) {
                case 1:
                    array_push($receptopres, "fabianaaranda@derkayvargas.com.ar");
                    break;
                case 2:
                    array_push($receptopres, "franciscozago@derkayvargas.com.ar", "marcoruiz@derkayvargas.com.ar", "federicow@derkayvargas.com.ar");
                    break;
                case 3:
                    array_push($receptopres, "fabianaaranda@derkayvargas.com.ar");
                    break;
            }
            
            $turno->enviar_a = serialize($receptopres);
            $turno->save();

            event( new SeHaSolicitadoUnTurno($turno));

            if($request->is('api/*')){
                return response()->json(['mensaje' => 'Turno solicitado.',
                                         'status' => 200 ], 200);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

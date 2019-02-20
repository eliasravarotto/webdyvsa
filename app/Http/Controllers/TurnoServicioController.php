<?php

namespace App\Http\Controllers;

use App\Events\SeHaSolicitadoUnTurno;
use App\Sucursal;
use App\TipoServicio;
use App\TurnoServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReCaptchataTestFormRequest;

class TurnoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = DB::select('SELECT
                                turno_servicios.id,
                                turno_servicios.cliente,
                                turno_servicios.telefono,
                                turno_servicios.email,
                                turno_servicios.fecha,
                                turno_servicios.modelo,
                                turno_servicios.dominio,
                                turno_servicios.comentario,
                                turno_servicios.created_at,
                                sucursales.nombre AS sucursal,
                                tipo_servicios.nombre as tipo_de_servicio
                                FROM
                                turno_servicios
                                INNER JOIN sucursales ON turno_servicios.sucursal_id = sucursales.id
                                INNER JOIN tipo_servicios ON turno_servicios.servicio_id = tipo_servicios.id
                                ORDER BY turno_servicios.created_at DESC');
        
        return view('backend.solicitudes-turno.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::where('tiene_posventa', '=', 1)->get();
        $servicios = TipoServicio::all();
        return view('frontend.posventa.form-turno-servicio', compact('sucursales','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReCaptchataTestFormRequest $request)
    {
        try {
            $turno = new TurnoServicio;
            $turno->cliente = $request->cliente;
            $turno->telefono = $request->telefono;
            $turno->email = $request->email;
            $turno->fecha = $request->fecha;
            $turno->modelo = $request->modelo;
            $turno->dominio = $request->dominio;
            $turno->servicio_id = $request->tipo_de_servicio;
            $turno->comentario = $request->comentario;
            $turno->sucursal_id = $request->sucursal;

            $receptopres = [];

            switch ($turno->sucursal_id) {
                case 1:
                    array_push($receptopres, "fabianaaranda@derkayvargas.com.ar");
                    //array_push($receptopres, "eliasravarotto@derkayvargas.com.ar");
                    break;
                case 2:
                    array_push($receptopres, "franciscozago@derkayvargas.com.ar", "marcoruiz@derkayvargas.com.ar");
                    //array_push($receptopres, "eliasravarotto@derkayvargas.com.ar");
                    break;
                case 3:
                    array_push($receptopres, "fabianaaranda@derkayvargas.com.ar");
                    //array_push($receptopres, "eliasravarotto@derkayvargas.com.ar");
                    break;
            }
            
            $turno->enviar_a = serialize($receptopres);
            $turno->save();

            event( new SeHaSolicitadoUnTurno($turno));

            return back()->with('success','Su turno fue solicitado, estaremos en contacto con usted a la brevedad para su confirmación');
        }
        catch (\Exception $e) {
            return $e->getMessage();
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
        //
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

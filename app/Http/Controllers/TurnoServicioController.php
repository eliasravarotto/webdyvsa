<?php

namespace App\Http\Controllers;

use App\Events\SeHaSolicitadoUnTurno;
use App\Sucursal;
use App\TipoServicio;
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
                                INNER JOIN tipo_servicios ON turno_servicios.servicio_id = tipo_servicios.id');
        
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
    public function store(Request $request)
    {
        try {
            $turno = new TurnoServicio;
            $turno->cliente = $request->cliente;
            $turno->telefono = $request->telefono;
            $turno->email = $request->email;
            $turno->fecha = $request->fecha;
            $turno->sucursal_id = $request->sucursal;
            $turno->modelo = $request->modelo;
            $turno->dominio = $request->dominio;
            $turno->servicio_id = $request->tipo_de_servicio;
            $turno->comentario = $request->comentario;
            $turno->save();

            event( new SeHaSolicitadoUnTurno($turno));

            return redirect('/turno-servicios/create')->with('status', 'Su turno fue solicitado, estaremos en contacto con usted a la brevedad para su confirmación');
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

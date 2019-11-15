<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TpaAdjudicado;

class TpaAdjudicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adjudicados = TpaAdjudicado::all();

        return view('backend.tpa.adjudicados.index', compact('adjudicados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adjudicado = new TpaAdjudicado;

        return view('backend.tpa.adjudicados.create', compact('adjudicado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'grupo' => 'required|int',
            'orden' => 'required|int',
            'unidad' => 'required|string',
            'modalidad' => 'required|string',
            'avance_cuotas' => 'required|int',
            'precio_venta' => 'required|numeric',
            'cuota_pura' => 'required|numeric'
        ]);

        TpaAdjudicado::create($request->all());

        return redirect()->route('tpa_adjudicados.index')->with('success','Guardado correctamente.');

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
        $adjudicado = TpaAdjudicado::find($id);
        return view('backend.tpa.adjudicados.edit', compact('adjudicado'));
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
        $this->validate($request, [
            'grupo' => 'required|int',
            'orden' => 'required|int',
            'unidad' => 'required|string',
            'modalidad' => 'required|string',
            'avance_cuotas' => 'required|int',
            'precio_venta' => 'required|numeric',
            'cuota_pura' => 'required|numeric'
        ]);

        $adjudicado = TpaAdjudicado::find($id);
        $adjudicado->grupo = $request->grupo;
        $adjudicado->orden = $request->orden;
        $adjudicado->unidad = $request->unidad;
        $adjudicado->modalidad = $request->modalidad;
        $adjudicado->avance_cuotas = $request->avance_cuotas;
        $adjudicado->precio_venta = $request->precio_venta;
        $adjudicado->cuota_pura = $request->cuota_pura;
        $adjudicado->update();

         return redirect()->route('tpa_adjudicados.index')->with('success','Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adjudicado = TpaAdjudicado::find($id);
        $adjudicado->delete();
         return redirect()->route('tpa_adjudicados.index')->with('success','Eliminado correctamente.');
    }
}

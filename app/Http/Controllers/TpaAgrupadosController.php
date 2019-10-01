<?php

namespace App\Http\Controllers;
use App\TpaAgrupado;

use Illuminate\Http\Request;

class TpaAgrupadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrupados = TpaAgrupado::all();

        return view('backend.tpa.agrupados.index', compact('agrupados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agrupado = new TpaAgrupado;

        return view('backend.tpa.agrupados.create', compact('agrupado'));
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
            'precio_venta' => 'required|int',
            'cuota_pura' => 'required|int'
        ]);

        TpaAgrupado::create($request->all());

        return redirect()->route('tpa_agrupados.index')->with('success','Guardado correctamente.');

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
        $agrupado = TpaAgrupado::find($id);
        return view('backend.tpa.agrupados.edit', compact('agrupado'));
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
            'precio_venta' => 'required|int',
            'cuota_pura' => 'required|int'
        ]);

        $agrupado = TpaAgrupado::find($id);
        $agrupado->grupo = $request->grupo;
        $agrupado->orden = $request->orden;
        $agrupado->unidad = $request->unidad;
        $agrupado->modalidad = $request->modalidad;
        $agrupado->avance_cuotas = $request->avance_cuotas;
        $agrupado->precio_venta = $request->precio_venta;
        $agrupado->cuota_pura = $request->cuota_pura;
        $agrupado->update();
        
        return redirect()->route('tpa_agrupados.index')->with('success','Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agrupado = TpaAgrupado::find($id);
        $agrupado->delete();
         return redirect()->route('tpa_agrupados.index')->with('success','Eliminado correctamente.');
    }
}

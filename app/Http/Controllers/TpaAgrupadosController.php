<?php

namespace App\Http\Controllers;
use App\TpaAgrupado;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TpaAgrupadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrupados = TpaAgrupado::with('planTpa')->get();

        foreach ($agrupados as $a) {
            if ($a->planTpa()->first()->modalidad == TpaAdjudicado::MODALIDAD_70_30) {
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas+($a->planTpa()->first()->precio_lista*0.3);
            }else{
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas;
            }         

            $a->valor_ahorrado = $a->avance_en_cuotaspura - $a->precio_venta;   
        }

        return $agrupados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarRequest( $request );
        
        if ($validator->passes()) {
            $agrupado = TpaAgrupado::create($request->all());
            return response()->json($agrupado);
        }

        return response()->json(['error'=>$validator->errors()->all()]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avanzado = TpaAgrupado::findOrFail($id);
        return $avanzado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $agrupado = TpaAgrupado::findOrFail($id);

        $validator = $this->validarRequest( $request );

        if ($validator->passes()) {
            $agrupado = TpaAgrupado::findOrFail($id);
            $agrupado->update($request->all());
            return response()->json($agrupado);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
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

        return response()->json(['success'=>'Eliminado correctamente.']);
    }

    private function validarRequest( $request )
    {
       return Validator::make($request->all(), [
            'grupo_orden' => 'required|string',
            'plan_id' => 'required|int',
            'avance_cuotas' => 'required|int',
            'precio_venta' => 'required|int',
        ]);
    }

    public function indexAvanzados()
    {
        $agrupados = TpaAgrupado::all();

        foreach ($agrupados as $a) {
            if ($a->planTpa()->first()->modalidad == TpaAgrupado::MODALIDAD_70_30) {
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas+($a->planTpa()->first()->precio_lista*0.3);
            }else{
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas;
            }         

            $a->valor_ahorrado = $a->avance_en_cuotaspura - $a->precio_venta;   
        }
        

        return view('frontend.plan-de-ahorro.planes-avanzados' ,compact('agrupados'));
    }
}

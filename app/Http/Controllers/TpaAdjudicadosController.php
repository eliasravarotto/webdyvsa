<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TpaAdjudicado;
use Illuminate\Support\Facades\Validator;

class TpaAdjudicadosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adjudicados = TpaAdjudicado::with('planTpa')->get();

        foreach ($adjudicados as $a) {
            if ($a->planTpa()->first()->modalidad == TpaAdjudicado::MODALIDAD_70_30) {
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas+($a->planTpa()->first()->precio_lista*0.3);
            }else{
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas;
            }         

            $a->valor_ahorrado = $a->avance_en_cuotaspura - $a->precio_venta;   
        }
        

        return $adjudicados;
 
    }

    
    public function indexAdjudicados()
    {
        $adjudicados = TpaAdjudicado::all();

        foreach ($adjudicados as $a) {
            if ($a->planTpa()->first()->modalidad == TpaAdjudicado::MODALIDAD_70_30) {
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas+($a->planTpa()->first()->precio_lista*0.3);
                $a->valor_ahorrado = $a->avance_en_cuotaspura - $a->precio_venta + $a->planTpa()->first()->precio_lista*0.3;   
            }else{
                $a->avance_en_cuotaspura = $a->planTpa()->first()->cuota_pura*$a->avance_cuotas;
                $a->valor_ahorrado = $a->avance_en_cuotaspura - $a->precio_venta;   
            }         

        }
        

        return view('frontend.plan-de-ahorro.planes-adjudicados', compact('adjudicados'));
    }


    //NUEVA IMPLEMETACION


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
            $adjudicado = TpaAdjudicado::create($request->all());
            return response()->json($adjudicado);
        }

        return response()->json(['error'=>$validator->errors()->all()]);

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
        $validator = $this->validarRequest( $request );

        if ($validator->passes()) {
            $adjudicado = TpaAdjudicado::findOrFail($id);
            $adjudicado->update($request->all());
            return response()->json($adjudicado);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
      
    }

    /**
     * Get the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $adjudicado = TpaAdjudicado::findOrFail($id);
        return $adjudicado;
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
}

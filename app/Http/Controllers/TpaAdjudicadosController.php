<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TpaAdjudicado;
use Illuminate\Support\Facades\Validator;

class TpaAdjudicadosController extends Controller
{


    //ETIOS X 4P 6M/T
    private $valor_cuota_pura_etios70_30 = 7461; // (precio - valor_30porciento_etios) / 84
    private $valor_30porciento_etios = 268620;

    //HILUX 4X2 C/D DX 2,4 TDI 6 M/T
    private $valor_cuota_pura_hilux70_30 = 15046; // (precio - valor_30porciento_hilux) / 84
    private $valor_30porciento_hilux = 541680;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adjudicados = TpaAdjudicado::with('planTpa')->get();

        return $adjudicados;


        //----------------------------------

        foreach ($adjudicados as $adjudicado) {

            $valor_ahorrado = 0;
            $avance_en_cuota_pura = 0;

            #CALCULAR VALOR AVANCE DEL PLAN EN CUOTAS PURA
            if( $adjudicado->modalidad == '70/30' ){
                if( $adjudicado->unidad == 'Etios' ){
                    $avance_en_cuota_pura = 
                            $adjudicado->cuota_pura
                            *
                            $adjudicado->avance_cuotas
                            +
                            $this->valor_30porciento_etios;
                }
                if( $adjudicado->unidad == 'Hilux' ){
                    $avance_en_cuota_pura = 
                            $adjudicado->cuota_pura
                            *
                            $adjudicado->avance_cuotas
                            +
                            $this->valor_30porciento_hilux;
                }
            }else{
               $avance_en_cuota_pura = $adjudicado->cuota_pura*$adjudicado->avance_cuotas;
            }

            #CALCULAR VALOR AHORRADO
            if( $adjudicado->modalidad == '70/30' ){
                if( $adjudicado->unidad == 'Etios' ){
                    $valor_ahorrado = $adjudicado->cuota_pura
                                    *$adjudicado->avance_cuotas
                                    +$this->valor_30porciento_etios 
                                    - $adjudicado->precio_venta;
                }
                if( $adjudicado->unidad == 'Hilux' ){
                    $valor_ahorrado = $adjudicado->cuota_pura*$adjudicado->avance_cuotas+$this->valor_30porciento_hilux - $adjudicado->precio_venta;
                }
            }else{
                $valor_ahorrado = 
                    $adjudicado->cuota_pura
                    *
                    $adjudicado->avance_cuotas 
                    - 
                    $adjudicado->precio_venta;
            }

            $adjudicado->valor_ahorrado = $valor_ahorrado;
            $adjudicado->avance_en_cuota_pura = $avance_en_cuota_pura;
        }
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

    
    public function indexAdjudicados()
    {
        $adjudicados = TpaAdjudicado::all();

        foreach ($adjudicados as $adjudicado) {

            $valor_ahorrado = 0;
            $avance_en_cuota_pura = 0;

            #CALCULAR VALOR AVANCE DEL PLAN EN CUOTAS PURA
            if( $adjudicado->modalidad == '70/30' ){
                if( $adjudicado->unidad == 'Etios' ){
                    $avance_en_cuota_pura = 
                            $adjudicado->cuota_pura
                            *
                            $adjudicado->avance_cuotas
                            +
                            $this->valor_30porciento_etios;
                }
                if( $adjudicado->unidad == 'Hilux' ){
                    $avance_en_cuota_pura = 
                            $adjudicado->cuota_pura
                            *
                            $adjudicado->avance_cuotas
                            +
                            $this->valor_30porciento_hilux;
                }
            }else{ //100%
               $avance_en_cuota_pura = $adjudicado->cuota_pura*$adjudicado->avance_cuotas;
            }

            #CALCULAR VALOR AHORRADO
            if( $adjudicado->modalidad == '70/30' ){
                if( $adjudicado->unidad == 'Etios' ){
                    $valor_ahorrado = $adjudicado->cuota_pura*$adjudicado->avance_cuotas+$this->valor_30porciento_etios - $adjudicado->precio_venta;
                }
                if( $adjudicado->unidad == 'Hilux' ){
                    $valor_ahorrado = $adjudicado->cuota_pura*$adjudicado->avance_cuotas+$this->valor_30porciento_hilux - $adjudicado->precio_venta;
                }
            }else{
                $valor_ahorrado = $adjudicado->cuota_pura*$adjudicado->avance_cuotas - $adjudicado->precio_venta;
            }

            $adjudicado->valor_ahorrado = $valor_ahorrado;
            $adjudicado->avance_en_cuota_pura = $avance_en_cuota_pura;
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

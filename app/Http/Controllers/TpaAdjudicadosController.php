<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TpaAdjudicado;

class TpaAdjudicadosController extends Controller
{


    //ETIOS X 4P 6M/T
    private $valor_cuota_pura_etios70_30 = 7244.16; // (precio - valor_30porciento_etios) / 84
    private $valor_30porciento_etios = 252120;

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
            }else{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'grupo' => 'required|string',
            'orden' => 'required|string',
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
            'grupo' => 'required|string',
            'orden' => 'required|string',
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
            }else{
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
}

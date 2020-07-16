<?php

namespace App\Http\Controllers;

use App\TPAPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TPAPlanController extends Controller
{

	private $unidadesTpa = ['Etios X 4P', 'Etios X 5P', 'Corolla XLI'];
	private $modalidadesTPA = ['100%', '70/30'];

    public function panelTpa(Request $request)
    {
    	return view('backend.tpa.planes.index');

    }

    public function index(Request $request)
    {
    	$planes = TPAPlan::all();
    	return $planes;

    }

    public function store(Request $request)
    {
    	$validator = $this->validarRequest( $request );

    	if ($validator->passes()) {
    		$plan = TPAPlan::create($request->all());
			return response()->json($plan);
        }

    	return response()->json(['error'=>$validator->errors()->all()]);

    }


    public function update(Request $request, $id)
    {
    	$validator = $this->validarRequest( $request );

    	if ($validator->passes()) {
    		$plan = TPAPlan::findOrFail($id);
         	$plan->update($request->all());
			return response()->json($plan);
        }

    	return response()->json(['error'=>$validator->errors()->all()]);

    }


    public function show(Request $request, $id)
    {
    	$plan = TPAPlan::findOrFail($id);
    	return $plan;
    }


    public function destroy(Request $request, $id)
    {
        $plan = TPAPlan::findOrFail($id);

        $adjudicados = $plan->adjudicados()->count();
        $agrupados = $plan->agrupados()->count();

        if ($agrupados > 0)
            return response()->json(['error'=>'No se puede eliminar, existen agrupados asociados']);

        if ($adjudicados > 0)
            return response()->json(['error'=>'No se puede eliminar, existen adjudicados asociados']);
        
        $plan->delete();

        return;
    }



    public function getModalidades()
    {
    	return response()->json(collect($this->modalidadesTPA));
    }

     public function getUnidades()
    {
    	return response()->json(collect($this->unidadesTpa));
    }


    private function validarRequest( $request )
    {
       return Validator::make($request->all(), [
            'unidad' => 'required|string',
            'modalidad' => 'required|string',
            'precio_lista' => 'required|integer',
            'cuota_pura' => 'required|integer',
            'activo' => 'required|integer',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Repositories\ModeloRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function posventa()
    {
        return view('frontend.posventa');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }



    //------------MODELOS------------------//

 	public function modelo($modelo, ModeloRepository $modeloRepo)
    {
        
        $modelo = Modelo::where('nombre', '=', $modelo)->first();
        
        $imagenesSlider = $modeloRepo->getImagenesSlider($modelo->id);
        $imagenesColores = $modeloRepo->getImagenesColores($modelo->id);
        $imagenesGaleria = $modeloRepo->getImagenesGaleria($modelo->id);
        $caracteristicas = $modeloRepo->getCaracteristicas($modelo->id);
        $versiones = $modeloRepo->getVersiones($modelo->id);
        $parallax = $modeloRepo->getParallax($modelo->id);
        //return $imagenesGaleria;
        //return $imagenesSlider;
        //return $parallax;
        //$versiones =
        return view('frontend.modelo', 
                    compact('modelo',
                            'imagenesSlider', 
                            'imagenesColores', 
                            'imagenesGaleria',
                            'caracteristicas',
                            'parallax',
                            'versiones')
        );
    }

    public function getModelos()
    {
        $modelos = Modelo::all();
        return $modelos;
    }



    //SECCION UNIDADES USADAS--------------//

    public function usadosIndex()
    {
        return view('frontend.usados.index');
    }

    public function usadosShow($id)
    {
        return view('frontend.usados.show');
    }

    public function consultaUsado(Request $request)
    {
        //return $request;

        Mail::send('emails.template', ['data' => $request], function ($message) use ($request){

            $unidad = $request->marca.' '.$request->modelo;
            
            $message->subject('Consulta sobre usado -'.$unidad);
            $message->to('elias.ravarotto@gmail.com');
            //$message->to('eliasravarotto@derkayvargas.com.ar');


        });
        return 'ok';

    }
}

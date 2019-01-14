<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\ImagenGaleriaUsado;
use App\Modelo;
use App\Repositories\ModeloRepository;
use App\TipoServicio;
use App\Usado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        $productos = Modelo::all();
        return view('frontend.home', compact('productos'));
    }

    public function posventa()
    {
        $servicios = TipoServicio::all();
        return view('frontend.posventa', compact('servicios'));
    }

    public function planDeAhorro()
    {
        return view('frontend.plan-de-ahorro.index');
    }

    public function financiacion()
    {
        return view('frontend.financiacion.index');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function contacto()
    {
        return view('frontend.contacto.index');
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
        return view('frontend.modelos.show', 
                    compact('modelo',
                            'imagenesSlider', 
                            'imagenesColores', 
                            'imagenesGaleria',
                            'caracteristicas',
                            'parallax',
                            'versiones')
        );
    }

    public function getModelos(Request $request)
    {
        $modelos = Modelo::all();
        
        if ($request->ajax()) {
            return $modelos;
        } else {
            return view('frontend.modelos.index', compact('modelos'));
        }

    }


    //SECCION UNIDADES USADAS--------------//

    public function usadosIndex()
    {
        $unidades = Usado::all();

        return view('frontend.usados.index', compact('unidades'));
    }

    public function usadosShow($id)
    {
        $unidad = Usado::find($id);
        $imagenes = ImagenGaleriaUsado::where('usado_id','=', $id)->get();
        return view('frontend.usados.show', compact('unidad', 'imagenes'));
    }

    public function ultimosUsados()
    {
        $unidades = Usado::take(3)->get();

        return $unidades;
    }

    public function consultaUsado(Request $request)
    {
        //return $request;
        $consulta = new Consulta;
        $consulta->nombre = $request->nombre;
        $consulta->telefono = $request->telefono;
        $consulta->email = $request->email;
        $consulta->mensaje = $request->mensaje;
        $consulta->enviar_a = 'elias.ravarotto@gmail.com';
        $consulta->save();
        Mail::send('emails.template', ['data' => $request], function ($message) use ($request){

            $unidad = $request->marca.' '.$request->modelo;
            
            $message->subject('Consulta sobre la unidad -'.$unidad);
            $message->to('elias.ravarotto@gmail.com');
            //$message->to('eliasravarotto@derkayvargas.com.ar');
        });

        return 'ok';
    }
}
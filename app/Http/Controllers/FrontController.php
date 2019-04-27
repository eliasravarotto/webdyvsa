<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\ImagenGaleriaUsado;
use App\Modelo;
use App\PushSubscriptions;
use App\Repositories\ModeloRepository;
use App\TipoServicio;
use App\Usado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        $productos = Modelo::all();

        $slides_img = $this->imagesSlideHome();

        $push_cookie = \Request::cookie('quiere_suscribirse', 1, 3600*24);

        //return $push_cookie;

        return view('frontend.home', compact('productos', 'slides_img', 'push_cookie'));
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

    public function publicidad()
    {
        return view('frontend.promo');
    }
    

    public function contacto()
    {
        return view('frontend.contacto.index');
    }

    private function imagesSlideHome()
    {
        $slides_img = [];
        array_push($slides_img, '/imagenes/home/slide4.png');
        array_push($slides_img, '/imagenes/home/slide1.png');
        array_push($slides_img, '/imagenes/home/slide2.png');
        array_push($slides_img, '/imagenes/home/slide3.png');
        return $slides_img;
    }

    public function thexpe()
    {
        return view('frontend.thexp');
    }

    public function tecnoHibrid()
    {
        return view('frontend.tecnohibrida');
    }

    public function empresa()
    {
        return view('frontend.empresa.index');
    }

    public function checkIfTokenExist(Request $request, $token)
    {
        return;
    }
    
    public function subscribeClient(Request $request, $token)
    {

        if (PushSubscriptions::where('token', '=', $token)->count() > 0) {
            return;
        } 

        $subs = new PushSubscriptions;

        $subs->token = $token;

        $subs->save();

        return;
    }

    public function unsubscribeClient(Request $request, $token)
    {
        $subs = PushSubscriptions::where('token', '=', $token)->exists();

        if ($subs) {
            return PushSubscriptions::where('token', '=', $token)->delete();
        }

        return 'no exist';
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

    public function usadosShow($slug)
    {
        $unidad = Usado::where('slug', '=', $slug)->firstOrFail();;
        $imagenes = $unidad->imagenes()->get();

        //Agrego la foto de la unidad al array de imagenes de la galeria.
        $img = ['id' => null, 'url' => $unidad->foto];
        $imagenes = $imagenes->toArray();
        array_push($imagenes, $img);
        $imagenes = collect($imagenes);

        return view('frontend.usados.show', compact('unidad', 'imagenes'));
    }

    public function ultimosUsados()
    {
        $unidades = Usado::take(3)->get();

        return $unidades;
    }

    public function usadosFilter(Request $request)
    {

        return Usado::marca($request->filtro_marca)
                    ->color($request->filtro_color)
                    ->anio($request->filtro_anio)
                    ->get();
    }
}
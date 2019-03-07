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
        return view('frontend.home', compact('productos', 'slides_img'));
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
    
    public function subscribeClient(Request $request, $token)
    {
        $subs = new PushSubscriptions;

        $subs->token = $token;

        $subs->save();

        return;
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

    public function usadosFilter(Request $request)
    {
        //$cond = ' ';
        //if ($request->filtro_marca != '0') { $cond = $cond." AND usados.marca = '".$request->filtro_marca."'"; }
        //if ($request->filtro_color != '0') { $cond = $cond." AND usados.color = '".$request->filtro_color."'"; }
        //if ($request->filtro_anio != '0') { $cond = $cond." AND usados.anio = '".$request->filtro_anio."'"; }
        
        return Usado::marca($request->filtro_marca)
                    ->color($request->filtro_color)
                    ->anio($request->filtro_anio)
                    ->get();

        return DB::select('SELECT
                            usados.id,
                            usados.dominio,
                            usados.marca,
                            usados.modelo,
                            usados.anio,
                            usados.km,
                            usados.color,
                            usados.precio,
                            usados.descripcion,
                            usados.foto,
                            usados.interno
                            FROM
                            usados
                            WHERE
                            usados.id <> 0'.$cond);
    }
}
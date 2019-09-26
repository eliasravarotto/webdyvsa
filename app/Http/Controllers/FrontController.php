<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\ImagenGaleriaUsado;
use App\Modelo;
use App\Post;
use App\PushSubscriptions;
use App\Repositories\ModeloRepository;
use App\TipoServicio;
use App\Usado;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function home()
    {
        $productos = Modelo::all();

        $slides_img = $this->imagesSlideHome();

        $push_cookie = \Request::cookie('quiere_suscribirse', 1, 3600*24);

        return view('frontend.home', compact('productos', 'slides_img', 'push_cookie'));
    }

    public function homeMin()
    {
        $productos = Modelo::all();

        $slides_img = $this->imagesSlideHome();

        $push_cookie = \Request::cookie('quiere_suscribirse', 1, 3600*24);

        return view('frontend.home-min', compact('productos', 'slides_img', 'push_cookie'));
    }

    public function posventa()
    {
        $servicios = TipoServicio::all();
        return view('frontend.posventa.index', compact('servicios'));
    }

    public function planDeAhorro()
    {
        return view('frontend.plan-de-ahorro.index');
    }

    public function planesAvanzados()
    {
        return view('frontend.plan-de-ahorro.planes-avanzados');
    }

        public function planesAdjudicados()
    {
        return view('frontend.plan-de-ahorro.planes-adjudicados');
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


    public function rse(Request $request)
    {
        $posts = DB::select('SELECT * FROM posts INNER JOIN posts_temas ON posts_temas.id = posts.tema_id WHERE posts.tema_id = 1 ORDER BY posts.id DESC');

        $posts = $this->arrayPaginator($posts, $request);

        return view('frontend.rse.index', compact('posts'));
    }

    public function rseProgramaDesarrolloConcesionarios(Request $request)
    {
        return view('frontend.rse.programa-rse-concesionarios');
    }
    
    public function rseProgramaDyv(Request $request)
    {
        return view('frontend.rse.programa-rse-dyv');
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

        $modelo->portada = $modelo->portada()->first();

        if ($modelo->portada != null) {
            $modelo->portada->imagen_desktop = Storage::url($modelo->portada->imagen_desktop);
            $modelo->portada->imagen_mobile = Storage::url($modelo->portada->imagen_mobile);
            $modelo->portada->logo = Storage::url($modelo->portada->logo);
        }

        //return $modelo;
        
        $imagenesSlider = $modeloRepo->getImagenesSlider($modelo->id);
        $imagenesColores = $modeloRepo->getImagenesColores($modelo->id);
        $imagenesGaleria = $modeloRepo->getImagenesGaleria($modelo->id);
        $caracteristicas = $modeloRepo->getCaracteristicas($modelo->id);
        $versiones = $modeloRepo->getVersiones($modelo->id);
        $parallax = $modeloRepo->getParallax($modelo->id);


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
        $unidades = Usado::orderBy('orden', 'ASC')->get();

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


    public function arrayPaginator($array, $request, $cantidad_registros = 20)
    {
        $page = Input::get('page', 1);
        $perPage = $cantidad_registros;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(
                        array_slice($array, $offset, $perPage, true), 
                        count($array), 
                        $perPage, 
                        $page,
                        ['path' => $request->url(), 
                        'query' => $request->query()]
                    );
    }


    public function nuevaRav4()
    {
        return view('frontend.modelos.rav4');
    }

    public function planNacional()
    {
        return view('frontend.plan-nacional');
    }
}
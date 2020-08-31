<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\ImagenGaleriaUsado;
use App\Modelo;
use App\Post;
use App\PushSubscriptions;
use App\Repositories\ModeloRepository;
use App\Servicio;
use App\Usado;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{

    public function homeMin()
    {
        $push_cookie = \Request::cookie('quiere_suscribirse', 1, 3600*24);

        return view('frontend.home', compact('push_cookie'));
    }

    public function posventa()
    {
        $servicios = Servicio::all();
        return view('frontend.posventa.index', compact('servicios'));
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

        $temas = "";

        foreach ($request->options as $tema)
            $temas.=" ".$tema;

        $subs = new PushSubscriptions;

        $subs->token = $token;
        
        $subs->temas = $temas;

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
        $modelos = Modelo::where('activo', 1)
                           ->orderBy('orden', 'ASC')
                           ->get();

        if ($request->ajax()) {
            return $modelos;
        } else {
            return view('frontend.modelos.index', compact('modelos'));
        }

    }


    //***SECCION USADOS***//

    public function usadosIndex()
    {
        $unidades = Usado::where('visible', 1)
                        ->orderBy('uct', 'DESC')
                        ->orderBy('orden', 'ASC')
                        ->get();

        foreach ($unidades as $u) {
            if ($u->foto!=null)
                $u->foto = Storage::url($u->foto);
        }

        return view('frontend.usados.index', compact('unidades'));
    }

    public function usadosShow($slug)
    {
        $unidad = Usado::where('slug', '=', $slug)
                        ->with('photos')
                        ->firstOrFail();

        $unidad->foto = Storage::url($unidad->foto);

        return view('frontend.usados.show', compact('unidad'));
    }

    public function usadosFilter(Request $request)
    {

        return Usado::where('visible', 1)
                    ->orderBy('uct', 'DESC')
                    ->orderBy('orden', 'ASC')
                    ->marca($request->filtro_marca)
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

    public function mobilityServices( Request $request )
    {
        return view('frontend.mobility.index');
    }

    public function icons()
    {
        return view('frontend.icons');
    }

    public function cotizadorOnlineComoFunciona()
    {
        return view('frontend.e-toyota.como-funciona');
    }

}
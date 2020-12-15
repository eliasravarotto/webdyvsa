<?php

namespace App\Http\Controllers;

use App\Post;
use App\Usado;
use App\Modelo;
use App\Consulta;
use App\Servicio;
use App\MensajeEmail;
use App\PushSubscriptions;
use App\ImagenGaleriaUsado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Events\HaIngresadoUnaConsulta;
use App\Repositories\ModeloRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

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
        return view('frontend.rse.index');
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

    public function usadosContactForm(Request $request)
    {

            $unidades = Usado::where('visible', 1)
                                ->orderBy('uct', 'DESC')
                                ->orderBy('orden', 'ASC')
                                ->get();

            return view('frontend.usados.contact-form', compact('unidades'));

    }

    public function usadosContactFormPost(Request $request)
    {
        $this->validate($request, [
            'cliente' => 'required',
            'telefono' => 'required',
            'vehicle_id' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        $unidad = Usado::findOrFail($request->vehicle_id);

        $mensaje = new MensajeEmail;
        $mensaje->cliente = $request->cliente;
        $mensaje->telefono = $request->telefono;
        $mensaje->email = 'notiene@notiene.com';
        $mensaje->mensaje = 'Me interesa la unidad ' . $unidad->marca . ' ' . $unidad->modelo . ' ' . $unidad->color . ' ' . $unidad->anio;
        $mensaje->derivar_a = $request->sucursal;

        $mensaje->from = 'usados';
        $mensaje->enviar_a = 'marceloaguirre@derkayvargas.com';
        $mensaje->save();
        $cc = ['eliasravarotto@derkayvargas.com.ar'];
        event( new HaIngresadoUnaConsulta($mensaje, 'Solicitud de Presupuesto de Usados', $cc));

        return back()->with('success','Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad!');
        
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
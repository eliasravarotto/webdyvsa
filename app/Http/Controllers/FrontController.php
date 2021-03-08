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
        return redirect()->away('https://derkayvargas.com/');
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


    //***SECCION USADOS***//

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
        $mensaje->enviar_a = 'marceloaguirre@derkayvargas.com.ar';
        $mensaje->save();
        $cc = ['eliasravarotto@derkayvargas.com.ar'];
        event( new HaIngresadoUnaConsulta($mensaje, 'Solicitud de Presupuesto de Usados', $cc));

        return back()->with('success','Su mensaje ha sido enviado, estaremos en contacto con usted a la brevedad!');
        
    }

    public function usadosContactForm(Request $request)
    {

            $unidades = Usado::where('visible', 1)
                                ->orderBy('uct', 'DESC')
                                ->orderBy('orden', 'ASC')
                                ->get();

            return view('frontend.usados.contact-form', compact('unidades'));

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


    public function icons()
    {
        return view('frontend.icons');
    }

}
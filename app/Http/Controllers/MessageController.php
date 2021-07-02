<?php

namespace App\Http\Controllers;

use App\Message;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    use ApiResponser;

    protected $refer = 'contacto, financiacion, tpa, la_voz_del_cliente, usados';
    private $froms=['contacto', 'financiacion', 'tpa', 'la_voz_del_cliente', 'usados'];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $froms = $this->froms;
        $filterFroms = collect($request->filterFroms);
        $cliente = $request->cliente;
        $desde = $request->desde;
        $hasta = $request->hasta;

        $messages = Message::cliente($request->cliente)
                    ->filterFroms($request->filterFroms)
                    ->desde($request->desde)
                    ->hasta($request->hasta)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(15);

        return view('backend.contacto.index', compact('messages', 'froms', 'filterFroms', 'cliente', 'desde', 'hasta'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $rules = [
            'name' => 'required|min:3|max:30',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'sucursal' => 'in:Sáenz Peña,Resistencia,Charata,Villa Ángela',
            'from' => 'required|in:contacto,financiacion,tpa,la_voz_del_cliente,usados',
        ];

        $this->validate($request, $rules);

        $message = Message::create($request->all());

        if ($request->from == 'contacto' ){
            Mail::to('fabianaaranda@derkayvargas.com.ar')
            ->cc(['eliasravarotto@derkayvargas.com.ar'])
            ->send(new MessageReceived($message));
        }

        if ($request->from == 'financiacion' ){
            Mail::to('fabianaaranda@derkayvargas.com.ar')
            ->cc(['eliasravarotto@derkayvargas.com.ar'])
            ->send(new MessageReceived($message));
        }

        if ($request->from == 'tpa' ){
            $message->message .= ' - Localidad: ' . $request->localidad;
            Mail::to('santiagogaliano@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        if ($request->from == 'la_voz_del_cliente' ){
            Mail::to('matiasromero@derkayvargas.com.ar')
                ->cc(['fabianaaranda@derkayvargas.com.ar'])
                ->send(new MessageReceived($message));
        }

        if ($request->from == 'usados' ){
            Mail::to('fabianaaranda@derkayvargas.com.ar')->send(new MessageReceived($message));
        }

        return $this->showOne($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        // $mensaje = Message::find($id);
        return view('backend.contacto.show', compact('message'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}

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
            // 'g-recaptcha-response' => 'required|captcha',
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

        if ($request->from == 'usados' ){
            Mail::to('fabianaaranda@derkayvargas.com.ar')
                ->cc(['eliasravarotto@derkayvargas.com.ar'])
                ->send(new MessageReceived($message));
        }

        if ($request->from == 'financiacion' ){
            Mail::to('fabianaaranda@derkayvargas.com.ar')
                ->cc(['eliasravarotto@derkayvargas.com.ar'])
                ->send(new MessageReceived($message));
        }
        
        if ($request->from == 'la_voz_del_cliente' ){
            Mail::to('matiasromero@derkayvargas.com.ar')
                ->cc(['fabianaaranda@derkayvargas.com.ar', 'eliasravarotto@derkayvargas.com.ar'])
                ->send(new MessageReceived($message));
        }

        if ($request->from == 'tpa' ){
            $message->message .= ' - Localidad: ' . $request->localidad;
            Mail::to('santiagogaliano@derkayvargas.com.ar')
                ->send(new MessageReceived($message));
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



    public function sendLeadToSalesforce()
    {
        $curl = curl_init();

        try {

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.toyota.com.ar:9201/dcx/api/leads',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "prospect":{
                    "requestdate":"09/02/2020 10:27:03",
                    "customer":{
                        "comments":"Probando API prospectos..",
                        "interest":"PLAN",
                        "contacts":[{
                            "emails":[
                                {
                                    "value":"eliasravarotto@derkayvargas.com.ar"
                                }
                            ],
                            "names":[
                                {
                                    "part":"first",
                                    "value":"Elias"
                                },
                                {
                                    "part":"last",
                                    "value":"RAVAROTTO"
                                }
                            ],
                            "phones":[
                                {
                                    "type":"phone",
                                    "value":"52511271"
                                },
                                {
                                    "type":"mobile",
                                    "value":"+5491114059886"
                                }
                            ],
                            "addresses":[
                                {
                                "city":"CABA",
                                "country":"Argentina"
                                }
                            ]
                        }]
                    },
                    "vehicles":[
                        {
                            "make":"Toyota",
                            "model":"Plan Hilux 4x4",
                            "code": "1"
                        }
                    ],
                    "provider":{
                        "name":{
                            "value":"Página Web",
                            "origin":"Contacto"
                        }
                    }
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'username: fGvova1i0J1nYiwXKgIY',
                'password: o0dz2qd2nDnyI05TGS28',
                'dealer: DYV',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;

            
        } catch (Exception $e) {
            return $e;
        }


    }
}

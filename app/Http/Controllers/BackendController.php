<?php

namespace App\Http\Controllers;

use App\MensajeEmail;
use App\Modelo;
use App\PushSubscriptions;
use App\Repositories\ModeloRepository;
use App\TipoServicio;
use App\TurnoServicio;
use App\Usado;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BackendController extends Controller
{
    public function inicio()
    {
        return view('backend.inicio');
    }

    public function createPushNotication()
    {
    	return view('backend.notificaciones-push.create');
    }

    public function sendPushNotication(Request $request)
    {

    	// $tokens = PushSubscriptions::where()->pluck('token')->toArray();

    	$subscriptions = PushSubscriptions::query();

		foreach($request->temas as $tema){
		    $subscriptions->orWhere('temas', 'LIKE', '%'.$tema.'%');
		}

		$tokens = $subscriptions->distinct()->pluck('token')->toArray();

		$data = array(
					   	"data" => 
						    	["notification" =>
						    		["title" => $request->title,
						    		 "body" => $request->body,
						    		 "icon" => $request->icon,
						    		 "click_action" => $request->action
						    		]
						    	],
		  				"registration_ids" => $tokens
		  			);

		$data_string = json_encode($data); 

	   $ch = curl_init();
	   curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
	   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	                                            "content-type: application/json",
	                                            "Authorization: key=AAAApfZBaXY:APA91bEYw2wELGsLG2WsxFmrEj-xmPvKdpPqv6y8OeTa7mDA3HMSkKZhcJ5tE3uDXSInXReVy-cJvC4f20_7ySbfqZhXCSeLrf5JEccLdQjd3mNkx8mduKjh5Gdg07SZbF4AIGsZ1Db-",
	                                            ));
	   curl_setopt($ch, CURLOPT_POST, TRUE);
	   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	   curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	   $result = curl_exec($ch);
	   curl_close($ch);

	   return back()->with('success', 'Notificación enviada! '.$result);
    }

}
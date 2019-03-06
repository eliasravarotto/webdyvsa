<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' => 'auth'], function(){


	Route::get('/admin', 'BackendController@inicio');


	// Route::resource('admin/modelos','ModelosController',['as' => 'prefix']);
	Route::resource('admin/modelos','ModelosController');
	Route::get('admin/modelos/{id}/edit/colores','ModelosController@editColores');
	Route::put('admin/modelos/{id}/edit/colores','ModelosController@updateColores');
	Route::get('admin/modelos/{id}/edit/galeria','ModelosController@editGaleria');
	Route::put('admin/modelos/{id}/edit/galeria','ModelosController@updateGaleria');
	Route::get('admin/modelos/{id}/edit/caracteristicas','ModelosController@editCaracteristicas');
	Route::put('admin/modelos/{id}/edit/caracteristicas','ModelosController@updateCaracteristicas');
	Route::get('admin/modelos/{id}/edit/parallax','ModelosController@editParallax');
	Route::put('admin/modelos/{id}/edit/parallax','ModelosController@updateParallax');
	Route::get('admin/modelos/{id}/edit/slider','ModelosController@editSlider');
	Route::put('admin/modelos/{id}/edit/slider','ModelosController@updateSlider');
	Route::get('admin/modelos/{id}/edit/versiones','ModelosController@editVersiones');
	Route::put('admin/modelos/{id}/edit/versiones','ModelosController@updateVersiones');
	Route::get('admin/turnos-servicios','TurnoServicioController@index')->name('solicitudes_index');
	Route::get('admin/turnos-servicios/{id}','TurnoServicioController@show')->name('solicitud_show');
	Route::get('admin/solicitudes-test-drive','SolicitudTestDriveController@index')->name('testdrive_index');
	Route::get('admin/mensajes-contacto/{from?}','MensajeEmailController@index')->name('contacto_mensajes_index');
	Route::resource('admin/usados','UsadoController');
	Route::resource('admin/servicios','TipoServicioController');
	Route::get('admin/usados/borrar-img-galeria/{id}','UsadoController@deleteImgGaleria')->name('borrar_img_usado');

});

Route::get('/','FrontController@home');
Route::get('/financiacion','FrontController@financiacion');
Route::get('/posventa','FrontController@posventa');
Route::get('/plan-de-ahorro','FrontController@planDeAhorro');
Route::get('/contacto','FrontController@contacto')->name('contacto');
Route::get('/nosotros','FrontController@aboutUs');
Route::get('/modelos/{modelo}','FrontController@modelo');
Route::get('/modelos','FrontController@getModelos');
Route::get('/usados','FrontController@usadosIndex');
Route::get('/usados/get-last','FrontController@ultimosUsados');
Route::get('/usados/{id}','FrontController@usadosShow');
Route::post('/usados/filter','FrontController@usadosFilter');
Route::get('/turno-servicios/create','TurnoServicioController@create');
Route::post('/turno-servicios','TurnoServicioController@store');
Route::get('/test-drive/create','SolicitudTestDriveController@create')->name('test_drive_form');
Route::post('/test-drive','SolicitudTestDriveController@store');
Route::post('/contacto','MensajeEmailController@store');
// Route::post('/consultar/usado/{id?}','ConsultaUsadoController@store');
Route::get('/dia-de-la-mujer','FrontController@publicidad');


Route::get('/push', function(){
	$data = [
	   [
	   	"data" => 
		    	["notification" =>
		    		["title" => "FCM Message",
		    		 "body" => "This is an FCM Message",
		    		 "icon" => "https://www.derkayvargas.com/imagenes/logo-toyota.png",
		    		]
		    	],
	   	"to" => "cAOGvv3cEW8:APA91bF6hb9c_NYORHM4WeQDoQtnUn9yHTOg2aaffWmU1ebw1Jivadk8kbG1x5MZkOO860heqO0WrHp1cwiWvCZ3EYTgUInPY0aW_Jp7R8W-yTXZKKBhn-TPliYqTMBDLJalIJQ7iUF-"
	   ]
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	    CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_MAXREDIRS => 10,
	    CURLOPT_TIMEOUT => 30000,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "POST",
	    CURLOPT_POSTFIELDS => json_encode($data),
	    CURLOPT_HTTPHEADER => array(
	    	// Set here requred headers
	        "accept: */*",
	        "accept-language: en-US,en;q=0.8",
	        "content-type: application/json",
	        "Authorization: key=AAAApfZBaXY:APA91bEYw2wELGsLG2WsxFmrEj-xmPvKdpPqv6y8OeTa7mDA3HMSkKZhcJ5tE3uDXSInXReVy-cJvC4f20_7ySbfqZhXCSeLrf5JEccLdQjd3mNkx8mduKjh5Gdg07SZbF4AIGsZ1Db-",
	    ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	 

	if ($err) {
	    echo "cURL Error #:" . $err;
	} else {
	   return json_decode($response);
	}

	// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

	//$statusCode = $response->getStatusCode();
	//$content = $response->getBody();
});
<?php

use App\PushSubscriptions;

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
	Route::resource('admin/posts','PostController');
	Route::get('admin/usados/borrar_img_post/{id}','PostController@deleteImgGaleria')->name('borrar_img_post');
	Route::get('admin/usados/actualizar-visible/{id}','UsadoController@actualizarVisible');
	Route::resource('admin/usados','UsadoController');
	Route::resource('admin/servicios','TipoServicioController');
	Route::get('admin/usados/borrar-img-galeria/{id}','UsadoController@deleteImgGaleria')->name('borrar_img_usado');
	Route::get('admin/notificacion-push','BackendController@createPushNotication')->name('create_push_notification');
	Route::post('admin/notificacion-push','BackendController@sendPushNotication')->name('send_push_notification');

	Route::get('/push', function(){

		$tokens = PushSubscriptions::all()->pluck('token')->toArray();;

			$data = array(
						   	"data" => 
							    	["notification" =>
							    		["title" => "NOVEDADES DERKA Y VARGAS",
							    		 "body" => "Ingresó una nueva unidad usada.",
							    		 "icon" => "https://www.derkayvargas.com/imagenes/icons/dyv100x100.png",
							    		 "click_action" => "https://www.derkayvargas.com/usados"
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
	});

});

// Route::get('/min','FrontController@homeMin');
Route::get('/','FrontController@homeMin');
Route::get('/financiacion','FrontController@financiacion');
Route::get('/posventa','FrontController@posventa');
Route::get('/plan-de-ahorro','FrontController@planDeAhorro');
Route::get('/contacto','FrontController@contacto')->name('contacto');
Route::get('/nosotros','FrontController@aboutUs');
Route::get('/modelos/{modelo}','FrontController@modelo');
Route::get('/modelos','FrontController@getModelos');
Route::get('/usados','FrontController@usadosIndex');
Route::get('/usados/{slug}','FrontController@usadosShow');
Route::get('/usados/get-last','FrontController@ultimosUsados');
Route::post('/usados/filter','FrontController@usadosFilter');
Route::get('/turno-servicios/create','TurnoServicioController@create');
Route::post('/turno-servicios','TurnoServicioController@store');
Route::get('/test-drive/create','SolicitudTestDriveController@create')->name('test_drive_form');
Route::post('/test-drive','SolicitudTestDriveController@store');
Route::post('/contacto','MensajeEmailController@store');
Route::get('/empresa','FrontController@empresa');
Route::get('/responsabilidad-social-empresarial','FrontController@rse')->name('rse');
Route::get('/noticias','FrontController@rse')->name('noticias');
Route::get('/eventos','FrontController@rse')->name('eventos');
Route::get('/tecnologia-hibrida','FrontController@tecnoHibrid');
Route::get('/push-subscription/{token}','FrontController@subscribeClient');
Route::delete('/push-subscription/{token}','FrontController@unsubscribeClient');
Route::get('/posts/{slug}','PostController@showPost')->name('show_post');
Route::get('nueva-rav4-hibrida','FrontController@nuevaRav4')->name('nueva_rav4');
// Route::get('/toyota-hibrid-experience','FrontController@thexpe');
// Route::post('/consultar/usado/{id?}','ConsultaUsadoController@store');

<?php

use App\PushSubscriptions;

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/admin', 'BackendController@inicio')->name('admin');
	Route::resource('admin/modelos','ModelosController');
	Route::post('/admin/modelos/publicar_servicio/{modelo_id}','ModelosController@publicarServicio');
	Route::resource('admin_slides','SlideController');
	Route::get('admin_slides_eliminar_item/{id}','SlideController@eliminarItem');
	Route::get('tpa','TPAPlanController@panelTpa')->name('panel_tpa');
	Route::get('tpa_planes_modalidades','TPAPlanController@getModalidades');
	Route::get('tpa_planes_unidades','TPAPlanController@getUnidades');
	Route::resource('tpa_planes','TPAPlanController');
	Route::resource('tpa_adjudicados','TpaAdjudicadosController');
	Route::resource('tpa_agrupados','TpaAgrupadosController');
	Route::get('admin/modelos/{id}/edit/colores','ModelosController@editColores');
	Route::put('admin/modelos/{id}/edit/colores','ModelosController@updateColores');
	Route::get('admin/modelos/{id}/edit/galeria','ModelosController@editGaleria');
	Route::put('admin/modelos/{id}/edit/galeria','ModelosController@updateGaleria');
	Route::get('admin/modelos/{id}/edit/caracteristicas','ModelosController@editCaracteristicas');
	Route::put('admin/modelos/{id}/edit/caracteristicas','ModelosController@updateCaracteristicas');
	Route::get('admin/modelos/{id}/edit/parallax','ModelosController@editParallax');
	Route::put('admin/modelos/{id}/edit/parallax','ModelosController@updateParallax');
	Route::get('admin/modelos/{id}/edit/portada','ModelosController@editPortada');
	Route::put('admin/modelos/{id}/edit/portada','ModelosController@updatePortada');
	Route::get('admin/modelos/{id}/edit/versiones','ModelosController@editVersiones');
	Route::put('admin/modelos/{id}/edit/versiones','ModelosController@updateVersiones');
	Route::get('admin/turnos-servicios','TurnoServicioController@index')->name('solicitudes_index');
	Route::get('admin/turnos-servicios/{id}','TurnoServicioController@show')->name('solicitud_show');
	Route::get('admin/solicitudes-test-drive','SolicitudTestDriveController@index')->name('testdrive_index');
	Route::get('admin/leads','MensajeEmailController@index')->name('admin_leads');
	Route::get('admin/mensajes-contacto/{id}/show','MensajeEmailController@show')->name('contacto_mensajes_show');
	Route::resource('admin/posts','PostController');
	Route::get('admin/usados/borrar_img_post/{id}','PostController@deleteImgGaleria')->name('borrar_img_post');
	Route::get('admin/modelo/borrar_caracterisica_modelo/{id}','ModelosController@borrarCaracteristica')->name('borrar_caracterisica_modelo');
	Route::get('admin/usados/actualizar-visible/{id}','UsadoController@actualizarVisible');
	Route::resource('admin/usados','UsadoController');
	Route::resource('admin_servicios','ServicioController');
	Route::get('admin_servicios/{servicio_id}/eliminar','ServicioController@eliminarServicio')->name('admin_servicios_eliminar');
	Route::get('admin/usados/borrar-img-galeria/{id}','UsadoController@deleteImgGaleria')->name('borrar_img_usado');
	Route::get('admin/notificacion-push','BackendController@createPushNotication')->name('create_push_notification');
	Route::post('admin/notificacion-push','BackendController@sendPushNotication')->name('send_push_notification');
	Route::resource('admin_accesorios','AccesorioController');

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

Route::get('/','FrontController@homeMin');
Route::get('/icons','FrontController@icons');
Route::get('/financiacion','FrontController@financiacion');
Route::get('/posventa','FrontController@posventa')->name('posventa');
Route::get('/plan-de-ahorro','FrontController@planDeAhorro')->name('landing_tpa');
Route::get('/plan-de-ahorro/listado-planes-avanzados','TpaAgrupadosController@indexAvanzados')->name('planes_avanzados');
Route::get('/plan-de-ahorro/listado-planes-adjudicados','TpaAdjudicadosController@indexAdjudicados')->name('planes_adjudicados');
Route::get('/contacto','FrontController@contacto')->name('contacto');
Route::get('/nosotros','FrontController@aboutUs');
Route::get('/modelos/{modelo}','FrontController@modelo')->name('detalle_modelo');
Route::get('/modelos','FrontController@getModelos')->name('modelos');
Route::get('/usados','FrontController@usadosIndex')->name('usados_index');
Route::get('/usados/{slug}','FrontController@usadosShow');
Route::get('/usados/get-last','FrontController@ultimosUsados');
Route::get('/usados/get_page_views/{slug}','FrontController@usadosGetPageViews');
Route::post('/usados/filter','FrontController@usadosFilter');
Route::get('/turno-servicios/create','TurnoServicioController@create')->name('turno_servicio_create');
Route::post('/turno-servicios','TurnoServicioController@store');
Route::get('/test-drive/create','SolicitudTestDriveController@create')->name('test_drive_form');
Route::post('/test-drive','SolicitudTestDriveController@store');
Route::post('/contacto','MensajeEmailController@store');
Route::post('/contacto-tpa','MensajeEmailController@storeContactTpa')->name('contact_tpa');
Route::post('/contacto-vdc','MensajeEmailController@storeVozDelCli');
Route::get('/responsabilidad-social-empresarial','FrontController@rse')->name('rse');
Route::get('/noticias','FrontController@rse')->name('noticias');
Route::get('/eventos','FrontController@rse')->name('eventos');
Route::get('/tecnologia-hibrida','FrontController@tecnoHibrid');
Route::get('/push-subscription/{token}','FrontController@subscribeClient');
Route::delete('/push-subscription/{token}','FrontController@unsubscribeClient');
Route::get('/posts','PostController@listPosts')->name('posts');
Route::get('/posts/{slug}','PostController@showPost')->name('show_post');
Route::get('nueva-rav4-hibrida','FrontController@nuevaRav4')->name('nueva_rav4');
Route::get('/responsabilidad-social-empresarial/programa-desarrollo-concesionarios-2018','FrontController@rseProgramaDesarrolloConcesionarios')->name('programa_desarrollo_concesionarios');
Route::get('/responsabilidad-social-empresarial/programa-rse-derkayvargas-2018-2021','FrontController@rseProgramaDyv')->name('programa_rse_dyv');
Route::get('/empresa','FrontController@empresa');
Route::get('/kinto-alquiler-de-autos-toyota','FrontController@mobilityServices')->name('mobility_services');
Route::get('/posventa-accesorios','AccesorioController@indexFront')->name('accesorios');
Route::get('/cotiza-tu-vehiculo-online-como-funciona','FrontController@cotizadorOnlineComoFunciona')->name('cotizador_online_como_funciona');

Route::get('/slide_get_data/{id}','SlideController@getDataSlide');

Route::get('/email', function(){

	$consulta = App\MensajeEmail::find(258);

	// Mail::send('emails.consulta', ['consulta' => $consulta], function ($message) use ($consulta){
 //        $message->subject('Probando Leads');
 //        $message->to('elias.ravarotto@gmail.com')->cc('eliasravarotto@derkayvargas.com.ar');
 //    });

	return view('emails.consulta', compact('consulta'));
});

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


	Route::get('/admin', function () {
	    return view('backend.inicio');
	});


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
	Route::get('admin/turno-servicios','TurnoServicioController@index');
	Route::get('admin/solicitudes-test-drive','SolicitudTestDriveController@index')->name('testdrive_index');
	Route::get('admin/mensajes-contacto/{from?}','MensajeEmailController@index')->name('contacto_mensajes_index');
	Route::resource('admin/usados','UsadoController');
	Route::resource('admin/servicios','TipoServicioController');
	Route::post('admin/usados/borrar-img-galeria/{id}','UsadoController@deleteImgGaleria')->name('borrar_img_usado');

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
Route::post('/consultar/usado/{id?}','ConsultaUsadoController@store');
Route::get('/turno-servicios/create','TurnoServicioController@create');
Route::post('/turno-servicios','TurnoServicioController@store');
Route::get('/test-drive/create','SolicitudTestDriveController@create')->name('test_drive_form');
Route::post('/test-drive','SolicitudTestDriveController@store');
Route::post('/contacto','MensajeEmailController@store');

Route::get('/t', function () {
	    $users = Tracker::onlineUsers();
	    return $users;
});
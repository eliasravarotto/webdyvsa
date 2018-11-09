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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

// Route::get('/home', function () {
//     return view('home');
// });


Route::get('/admin', function () {
    return view('backend.sufee_admin.dashboard');
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
Route::resource('admin/usados','UsadoController');
Route::get('admin/usados/borrar-img-galeria/{id}','UsadoController@deleteImgGaleria');


Route::get('/home','FrontController@home');
Route::get('/financiacion','FrontController@financiacion');
Route::get('/posventa','FrontController@posventa');
Route::get('/plan-de-ahorro','FrontController@planDeAhorro');
Route::get('/contacto','FrontController@contacto');
Route::get('/nosotros','FrontController@aboutUs');
Route::get('/modelo/{modelo}','FrontController@modelo');
Route::get('/modelo','FrontController@getModelos');
Route::get('/usados','FrontController@usadosIndex');
Route::get('/usados/{id}','FrontController@usadosShow');
Route::post('/consultar/usado/{id}','FrontController@consultaUsado');
Route::get('/turno-servicios/create','TurnoServicioController@create');
Route::post('/turno-servicios','TurnoServicioController@store');

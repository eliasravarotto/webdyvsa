<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cliente')->get('/novedades','ApiController@getNovedades');
Route::middleware('cliente')->get('/modelos','ApiController@getModelos');
Route::middleware('cliente')->get('/tipos-de-servicios','ApiController@getTiposServicios');
// Route::middleware('cliente')->post('/turno-servicio','TurnoServicioController@store');
Route::middleware('cliente')->get('/sucursales/{sucursales_de?}','ApiController@getSucursales');

Route::get('/entradas','PostController@getPosts')->name('posts');
Route::get('/entradas/{slug}','PostController@getPost')->name('single_post');
Route::get('/modelos','ModelosController@getModelos');
Route::get('/modelos/{slug}','ModelosController@getModelo');
Route::get('/usados','UsadoController@getUsados');
Route::get('/usados/{slug}','UsadoController@getUsado');
Route::post('/message','MessageController@store');
Route::post('/turno-servicio','TurnoServicioController@store');
Route::post('/solicitar-test-drive','SolicitudTestDriveController@store');
Route::get('/team-tpa','ApiController@getTeamTpa');
Route::get('/plan-de-ahorro/oportunidades/avanzados','TpaAgrupadosController@index');
Route::get('/plan-de-ahorro/oportunidades/adjudicados','TpaAdjudicadosController@index');
Route::get('/plan-de-ahorro/planes-vigentes','TPAPlanController@planesVigentes');
Route::get('/sucursales-usados','ApiController@sucursalesUsados');
Route::get('/sucursales-ventas','ApiController@sucursalesVentas');
Route::get('/sucursales-posventa','ApiController@sucursalesPosventa');
Route::get('/posventa/lista-de-precios','ServicioController@listaDePrecios');

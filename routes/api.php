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
Route::middleware('cliente')->get('/sucursales/{sucursales_de?}','ApiController@getSucursales');

Route::get('/slide_get_data/{id}','SlideController@getDataSlide');
Route::get('/slide/{id}','SlideController@getDataSlide');
Route::get('/entradas','PostController@getPosts')->name('posts');
Route::get('/entradas/{slug}','PostController@getPost')->name('single_post');
Route::get('/modelos','ModelosController@getModelos');
Route::get('/modelos/{slug}','ModelosController@getModelo');
Route::get('/usados','UsadoController@getUsados');
Route::get('/usados/{slug}','UsadoController@getUsado');
Route::post('/message','MessageController@store');
Route::post('/message-test','MessageController@sendLeadToSalesforce');
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
Route::get('/accesorios','AccesorioController@getAccesorios');
Route::post('/push-subscription/{token}','FrontController@subscribeClient');
Route::get('/tipos-de-servicios','ApiController@getTiposServicios');


Route::group(['middleware' => 'jwt.auth'], function(){

    Route::get('/verify-token','ApiAuthController@verifyToken');
    Route::get('/users/{user}','UserController@apiGetUser');
    Route::post('/users/{user}/edit','UserController@apiUpdateUser');
    Route::post('/user-vehicles','UserVehicleController@store');
    Route::get('/user-vehicles','UserVehicleController@myVehicles');
    Route::get('/user-vehicles/{vehicle}','UserVehicleController@show');
    Route::delete('/user-vehicles/{vehicle}','UserVehicleController@destroy');

    Route::get('/modelos-versiones','ApiController@modelosVersiones');
});

Route::post('/auth/login','ApiAuthController@login');
Route::get('/auth/logout','ApiAuthController@logout');
Route::post('/auth/register','ApiAuthController@register');
Route::post('/auth/refresh','ApiAuthController@refreshToken');
Route::post('/auth/reset-password','Auth\ForgotPasswordController@sendResetLinkEmail');
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
Route::middleware('cliente')->post('/turno-servicio','TurnoServicioController@store');
Route::middleware('cliente')->get('/sucursales/{sucursales_de?}','ApiController@getSucursales');

Route::get('/entradas','PostController@getPosts')->name('posts');
Route::get('/entradas/{slug}','PostController@getPost')->name('single_post');
Route::get('/modelos','ModelosController@getModelos');
Route::get('/modelos/{slug}','ModelosController@getModelo');

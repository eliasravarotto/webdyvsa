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

// Route::get('/home', function () {
//     return view('home');
// });


Route::get('/admin', function () {
    return view('backend.sufee_admin.dashboard');
});

Route::resource('admin/modelos','ModelosController');
Route::get('/home','FrontController@home');
Route::get('/nosotros','FrontController@aboutUs');
Route::get('/modelo','FrontController@modelo');
Route::get('/usados','FrontController@usadosIndex');

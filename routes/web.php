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

Route::get('/','InicioController@index');
Route::resource('registro','RegistroController');
Route::resource('registrar','RegistraController');
Route::get('buscar_persona','RegistroController@buscar_persona');
Route::get('carga','RegistroController@cargamunicipios');
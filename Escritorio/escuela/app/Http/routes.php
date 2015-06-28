<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('inicio',['as'=>'inicio','uses'=>'RegistrosController@inicio']);
Route::get('registroal',['as'=>'registroal','uses'=>'RegistrosController@registroal']);
Route::get('registropro',['as'=>'registropro','uses'=>'RegistrosController@registropro']);
Route::get('registroexpro',['as'=>'registroexpro','uses'=>'RegistrosController@registroexpro']);
Route::get('registroexal',['as'=>'registroexal','uses'=>'RegistrosController@registroexal']);
Route::get('registroasig',['as'=>'registroasig','uses'=>'RegistrosController@registroasig']);
Route::get('registronotasal',['as'=>'registronotasal','uses'=>'RegistrosController@registronotasal']);
Route::get('registroasigpro',['as'=>'registroasigpro','uses'=>'RegistrosController@registroasigpro']);
Route::get('registroasigal',['as'=>'registroasigal','uses'=>'RegistrosController@registroasigal']);

Route::post('guardaralumno',['as'=>'guardaralumno','uses'=>'RegistrosController@guardaralumno']);
Route::post('guardarexalumno',['as'=>'guardarexalumno','uses'=>'RegistrosController@guardarexalumno']);
Route::post('guardarprofesor',['as'=>'guardarprofesor','uses'=>'RegistrosController@guardarprofesor']);
Route::post('guardarexprofesor',['as'=>'guardarexprofesor','uses'=>'RegistrosController@guardarexprofesor']);
Route::post('guardarasignatura',['as'=>'guardarasignatura','uses'=>'RegistrosController@guardarasignatura']);
Route::post('guardarexasignatura',['as'=>'guardarexasignatura','uses'=>'RegistrosController@guardarexasignatura']);


Route::get('exasignatura',['as'=>'exasignatura','uses'=>'RegistrosController@exasignatura']);
Route::get('menu', ['as'=>'menu','uses'=> 'HomeController@index']); 
Route::get('actualizacional',['as'=>'actualizacional','uses'=>'ActualizacionController@actualizacional']);
Route::get('modificaral',['as'=>'modificaral','uses'=>'ActualizacionController@modificaral']); 

Route::get('modificarexal',['as'=>'modificarexal','uses'=>'ActualizacionController@modificarexal']);
Route::get('actualizacionpro',['as'=>'actualizacionpro','uses'=>'ActualizacionController@actualizacionpro']);
Route::get('actualizarasig',['as'=>'actualizarasig','uses'=>'ActualizacionController@actualizarasig']);
Route::get('modificarexpro',['as'=>'modificarexpro','uses'=>'ActualizacionController@modificarexpro']);

Route::get('modificarexasig',['as'=>'modificarexasig','uses'=>'ActualizacionController@modificarexasig']);
Route::get('modificarnotas',['as'=>'modificarnotas','uses'=>'ActualizacionController@modificarnotas']);
Route::get('modificarasigpro',['as'=>'modificarasigpro','uses'=>'ActualizacionController@modificarasigpro']);
Route::get('modificarasigal',['as'=>'modificarasigal','uses'=>'ActualizacionController@modificarasigal']);

Route::get('buscaral',['as'=>'buscaral','uses'=>'ActualizacionController@buscaral']);
Route::get('buscarpro',['as'=>'buscarpro','uses'=>'ActualizacionController@buscarpro']);
Route::get('buscarexal',['as'=>'buscarexal','uses'=>'ActualizacionController@buscarexal']);
Route::get('buscarexpro',['as'=>'buscarexpro','uses'=>'ActualizacionController@buscarexpro']);
Route::get('buscaras',['as'=>'buscaras','uses'=>'ActualizacionController@buscaras']);
Route::get('buscarexas',['as'=>'buscarexas','uses'=>'ActualizacionController@buscarexas']);


Route::get('modificacional',['as'=>'modificacional','uses'=>'ActualizacionController@modificacional']);
Route::get('modificacionexal',['as'=>'modificacionexal','uses'=>'ActualizacionController@modificacionexal']);
Route::get('modificacionpro',['as'=>'modificacionpro','uses'=>'ActualizacionController@modificacionpro']);
Route::get('modificacionexpro',['as'=>'modificacionexpro','uses'=>'ActualizacionController@modificacionexpro']);
Route::get('modificacionasi',['as'=>'modificacionasi','uses'=>'ActualizacionController@modificacionasi']);
Route::get('modificacionexasi',['as'=>'modificacionexasi','uses'=>'ActualizacionController@modificacionexasi']);


Route::get('buscarasial',['as'=>'buscarasial','uses'=>'BusquedaController@buscarasial']);
Route::post('guardarasignal',['as'=>'guardarasignal','uses'=>'RegistrosController@guardarasignal']);
Route::get('buscarcodreg',['as'=>'buscarcodreg','uses'=>'BusquedaController@buscarcodreg']);
Route::get('modificacionasig',['as'=>'modificacionasig','uses'=>'BusquedaController@modificacionasig']);

Route::get('buscarasipro',['as'=>'buscarasipro','uses'=>'BusquedaController@buscarasipro']);
Route::post('guardarasigpro',['as'=>'guardarasigpro','uses'=>'RegistrosController@guardarasigpro']);
Route::get('buscarcodregpro',['as'=>'buscarcodregpro','uses'=>'BusquedaController@buscarcodregpro']);
Route::get('modificacionasigpro',['as'=>'modificacionasigpro','uses'=>'BusquedaController@modificacionasigpro']);

Route::get('buscarregasi',['as'=>'buscarregasi','uses'=>'BusquedaController@buscarregasi']);
Route::post('modificacionnota',['as'=>'modificacionnota','uses'=>'RegistrosController@modificacionnota']);
Route::get('buscarcodregnotas',['as'=>'buscarcodregnotas','uses'=>'BusquedaController@buscarcodregnotas']);
Route::get('modificarnotafinal',['as'=>'modificarnotafinal','uses'=>'BusquedaController@modificarnotafinal']);

Route::post('iralmenu',['as'=>'iralmenu','uses'=>'BusquedaController@iralmenu']);
Route::get('menu',['as'=>'menu','uses'=>'BusquedaController@menu']);




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
    return view('contenido/contenido');
});

Route::get('/sms', function () {
    return view('sms');
});

Route::get('/correo', function(){
	return view('correo');
});

Route::get('/sms2', function () {
    return view('sms_to_all');
});

Route::post('sms_all','SmsController@sendSms');

Route::post('enviarCorreo','MailController@SendMail');
Route::post('sms','SmsController@sendSmsOne');


Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');

Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');

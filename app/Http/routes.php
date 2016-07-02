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


Route::get('/','holaController@index');
Route::get('contacto','holaController@contacto');
Route::get('revi','holaController@revi');

Route::resource('normal','normalController');
#Route::get('controlador','holaController@index');




/*
Route::get('name/{nombre}','holaController@nombre');
Route::resource('memo','memoController');


Route::get('prueba',function(){
	return "Hola";
});

Route::get('nombre/{nombre?}',function($nombre = 20){
	return "Mi nombre es:".$nombre;
});
	

Route::get('/', function () {
    return view('welcome');
});
*/
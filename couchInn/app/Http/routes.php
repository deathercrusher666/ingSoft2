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

/*

POSIBLES tipos de rutas

GET , POST , PUT , DELETE , RESOURCE

*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();
Route::group(['prefix'=> 'admin'],function(){
    Route::resource('usuario','UsuariosControlador');
    Route::resource('tipo_hospedaje','Tipo_HospedajeControlador');


    Route::get('tipo_hospedaje/{id}/destroy',[
        'uses'=>'Tipo_HospedajeControlador@destroy',
        'as'=>'admin.tipo_hospedaje.destroy'
    ]);
    Route::get('usuario/{id}/destroy',[
        'uses'=>'UsuariosControlador@destroy',
        'as'=>'admin.usuario.destroy'
    ]);

    Route::get('/',['as'=>'admin.index',function(){
        return view('admin.index');
    }]);
});


/*
Route::get('auth/login', 'Auth/AuthController@getLogin' );
Route::post('auth/login', 'Auth/AuthController@postLogin' );
Route::get('auth/logout', 'Auth/AuthController@getLogout' );
*/



//Route::get('/home', 'HomeController@index');

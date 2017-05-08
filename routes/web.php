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

/**
 * Ruta inicial hacia la vista donde
 * los usuarios se registran o inician sesion.
 */
use Illuminate\Support\Facades\Auth;

Route::get('/', 'Auth\LoginController@index');

/**
 * Ruta hacia la pagina de inicio una vez iniciada una sesion.
 */
Route::get('/inicio', function () {
    return view('home.index');
})/*->middleware('auth')*/;

Route::get('/salir', 'Auth\LoginController@salir');


//Catalogos
Route::group(['prefix' => 'catalogos'], function () {
	Route::resource('clientes','ClienteController');
	Route::post('clientes_store','ClienteController@store');
	Route::get('clientes.tabla','ClienteController@tabla');
	Route::post('clientes.editar','ClienteController@editar');
	Route::post('cliente.getCliente','ClienteController@getCliente');
	Route::post('cliente.eliminar','ClienteController@eliminar');


});



//Movimientos
Route::group(['prefix' => 'movimientos'], function () {
    Route::resource('solicitudes', 'SolicitudController');
});

//Rutas de Autenticación de usuarios

Auth::routes(function(){

    Route::post('solicitudes.store','SolicitudController@store');
    Route::post('solicitud.getSolicitud','SolicitudController@getSolicitud');
    Route::post('solicitud.editar','SolicitudController@editar');
});

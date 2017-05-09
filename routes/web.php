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
})->middleware('auth');

Route::get('/salir', 'Auth\LoginController@salir');


//Catalogos
Route::group(['prefix' => 'catalogos'], function () {
	Route::resource('clientes','ClienteController');
	Route::post('clientes_store','ClienteController@store');
	Route::get('clientes.tabla','ClienteController@tabla');
	Route::post('clientes.editar','ClienteController@editar');
	Route::post('cliente.getCliente','ClienteController@getCliente');
	Route::post('cliente.eliminar','ClienteController@eliminar');

	Route::resource('vendedores','VendedorController');
	Route::post('vendedores.store','VendedorController@store');
	Route::get('vendedores.tabla','VendedorController@tabla');
	Route::post('vendedores.editar','VendedorController@editar');
	Route::post('vendedores.getVendedor','VendedorController@getVendedor');
	Route::post('vendedores.eliminar','VendedorController@eliminar');

	Route::resource('fraccionamientos','FraccionamientoController');
	Route::post('fraccionamientos.store','FraccionamientoController@store');
	Route::get('fraccionamientos.tabla','FraccionamientoController@tabla');
	Route::post('fraccionamientos.editar','FraccionamientoController@editar');
	Route::post('fraccionamientos.getFraccionamiento','FraccionamientoController@getFraccionamiento');
	Route::post('fraccionamientos.eliminar','FraccionamientoController@eliminar');
});



//Movimientos
Route::group(['prefix' => 'movimientos'], function () {
    Route::resource('solicitudes', 'SolicitudController');
    Route::post('solicitudes.store','SolicitudController@store');
    Route::get('solicitudes.tabla','SolicitudController@tabla');
    Route::post('solicitudes.editar','SolicitudController@editar');
    Route::post('solicitudes.getSolicitud','SolicitudController@getSolicitud');
    Route::post('solicitudes.eliminar', 'SolicitudController@eliminar');
});

//Rutas de Autenticación de usuarios

Auth::routes();

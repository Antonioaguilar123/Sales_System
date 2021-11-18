<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/cliente/listarr');
    });
    Route::get('/cliente', 'App\Http\Controllers\TestController@crearCliente')->name('cliente.agregar');
    Route::post('/cliente', 'App\Http\Controllers\TestController@registrarCliente')->name('cliente.guardar');
    Route::get('/cliente/listar', 'App\Http\Controllers\TestController@listarClientes')->name('cliente.listar');
    Route::get('/cliente/editar/{cliente}', 'App\Http\Controllers\TestController@formularioEditarCliente')->name('cliente.editar');
    Route::patch('/cliente/editar/{cliente}', 'App\Http\Controllers\TestController@ActualizarCliente')->name('cliente.actualizar');
    Route::get('/cliente/{cliente}', 'App\Http\Controllers\TestController@VerCliente')->name('cliente.ver');
    Route::delete('/cliente/{cliente}', 'App\Http\Controllers\TestController@EliminarCliente')->name('cliente.eliminar');
    
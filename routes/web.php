<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
return redirect('/cliente/listar');
});
Route::get('/cliente', 'App\Http\Controllers\TestController@crearCliente')->name('cliente.agregar');
Route::post('/cliente', 'App\Http\Controllers\TestController@registrarCliente')->name('cliente.guardar');
Route::get('/cliente/listar', 'App\Http\Controllers\TestController@listarClientes')->name('cliente.listar');
Route::get('/cliente/editar/{cliente}', 'App\Http\Controllers\TestController@formularioEditarCliente')->name('cliente.editar');
Route::patch('/cliente/editar/{cliente}', 'App\Http\Controllers\TestController@ActualizarCliente')->name('cliente.actualizar');
Route::get('/cliente/{cliente}', 'App\Http\Controllers\TestController@VerCliente')->name('cliente.ver');
Route::delete('/cliente/{cliente}', 'App\Http\Controllers\TestController@EliminarCliente')->name('cliente.eliminar');
//Route::patch('/cliente/editar/{cliente}', 'App\Http\Controllers\TestController@ActualizarCliente2')->name('cliente.actualizar');


/*Route::get('/directorio', function () {
    return view('contactos');
    });
*/
/*
Route::get('/conDatos/{var?}', function ($var = null) {
    return "El parámetro pasado por ruta:" . $var;
    });*/
    /*
Route::get('/conDatos/{var1}', function ($var1) {
    return view('contactos')->with('var1', $var1);
    });*/
   /*Route::get('/conDatos/{var1}/{var2} ',function($var1,$var2){
return view('contactos')->with('var1',$var1)->with('var2',$var2);
});*/

/*Route::get('/conDatos/{var}', function ($var) {
    return "Solo texto:" . $var;
    })->where('var', '[0-9]+');*/
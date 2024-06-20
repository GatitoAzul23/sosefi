<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Ruta para proveedores
Route::resource('/proveedores', App\Http\Controllers\ProveedorController::class)
->except(['show'])
->middleware(['auth']);

//Ruta para borrado lógico en proveedores
Route::get('/delete-proveedor/{proveedor_id}', array(
    'as' => 'proveedorDelete',
    'middleware' => 'auth',
    'uses' =>'\App\Http\Controllers\ProveedorController@deleteProveedor'
));
//Ruta para hacer el PDF
Route::get('/imprimir', [App\Http\Controllers\GeneradorController::class, 'imprimir'])->name('imprimir');
//Imrprimir todos los proveedores
Route::get('/imprimirProveedor', [App\Http\Controllers\ProveedorController::class, 'imprimir'])->name('imprimirProv');
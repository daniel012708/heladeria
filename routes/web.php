<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductoController::class, 'index']);


Route::resource('productos', ProductoController::class);

Route::resource('ventas', VentaController::class);

Route::get('/', function () {
    return view('login');
});

Route::post('/iniciar', function () {
    return redirect()->route('productos.index');
})->name('login.enviar');




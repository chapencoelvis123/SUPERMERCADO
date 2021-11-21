<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CompraDetalleController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DetalleVentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('user', UserController::class);
Route::resource('empresa', EmpresaController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('compra', CompraController::class);
Route::resource('compradetalle',CompraDetalleController::class);
Route::resource('contacto', ContactoController::class);
Route::resource('detalleventa', DetalleVentaController::class);
Route::resource('producto',ProductoController::class);
Route::resource('venta', VentaController::class);

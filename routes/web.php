<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\LlantaController;
use App\Http\Controllers\HomeController;

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
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('marca', MarcaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('vehiculo', VehiculoController::class);
Route::resource('llanta', LlantaController::class);
<?php

use App\Http\Controllers\ApiController\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ver_medida', [ApiController::class, 'ver_medida']);
Route::post('alta_llanta', [ApiController::class, 'alta_llanta']);
Route::post('actualizar_stock', [ApiController::class, 'actualizar_stock']);
Route::post('baja_llanta', [ApiController::class, 'baja_llanta']);
Route::post('eliminar_llanta', [ApiController::class, 'eliminar_llanta']);
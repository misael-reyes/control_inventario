<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\LlantaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReporteController;

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

//ruta para los reportes
Route::get('reportes', [ReporteController::class, 'index'])->name('reporte.index');
Route::get('reportes/marcas', [ReporteController::class, 'pdfMarcas'])->name('reporte.marcas');
Route::get('reportes/vehiculos', [ReporteController::class, 'pdfVehiculos'])->name('reporte.vehiculos');
Route::get('reportes/proveedores', [ReporteController::class, 'pdfProveedores'])->name('reporte.proveedores');
Route::get('reportes/llantas', [ReporteController::class, 'pdfLlantas'])->name('reporte.llantas');
//reportes en excel
Route::get('reportes/excel/marcas', [ExcelController::class, 'excelMarcas'])->name('excel.marcas');
Route::get('reportes/excel/vehiculos', [ExcelController::class, 'excelVehiculos'])->name('excel.vehiculos');
Route::get('reportes/excel/proveedores', [ExcelController::class, 'excelProveedores'])->name('excel.proveedores');
Route::get('reportes/excel/llantas', [ExcelController::class, 'excelLlantas'])->name('excel.llantas');
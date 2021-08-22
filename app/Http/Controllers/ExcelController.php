<?php

namespace App\Http\Controllers;

use App\Exports\LlantasExport;
use App\Exports\MarcasExport;
use App\Exports\MarcasExport2;
use App\Exports\ProveedoresExport;
use App\Exports\VehiculosExport;
use App\Models\Llanta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function excelMarcas() {
        return Excel::download(new MarcasExport, 'marcas.xlsx');
    }

    public function excelVehiculos() {
        return Excel::download(new VehiculosExport, 'vehiculos.xlsx');
    }

    public function excelProveedores() {
        return Excel::download(new ProveedoresExport, 'proveedores.xlsx');
    }

    public function excelLlantas() {
        return Excel::download(new LlantasExport, 'llantas.xlsx');
    }
}

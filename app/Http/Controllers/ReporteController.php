<?php

namespace App\Http\Controllers;

use App\Models\Llanta;
use App\Models\Marca;
use App\Models\Proveedor;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use \Barryvdh\DomPDF\Facade as PDF;

class ReporteController extends Controller
{
    public function index() {
        return view('reporte.index');
    }

    public function pdfMarcas() {
        $marcas = Marca::all();
        $pdf = PDF::loadView('reporte.marcaspdf', compact('marcas'));
        return $pdf->download('marcas.pdf');
    }

    public function pdfProveedores() {
        $proveedores = Proveedor::all();
        return PDF::loadView('reporte.proveedorespdf', compact('proveedores'))
        ->setPaper('a4', 'landscape')
        ->download('proveedores.pdf');
    }

    public function pdfVehiculos() {
        $vehiculos = Vehiculo::all();
        $pdf = PDF::loadView('reporte.vehiculospdf', compact('vehiculos'));
        return $pdf->download('vehiculos.pdf');
    }

    public function pdfLlantas() {
        $llantas = Llanta::all();
        return PDF::loadView('reporte.llantaspdf', compact('llantas'))
        ->setPaper('a4', 'landscape')
        ->download('llantas.pdf');
    }
}

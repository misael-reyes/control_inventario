<?php

namespace App\Exports;

use App\Models\Proveedor;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ProveedoresExport implements FromView
{
    public function view(): View
    {
        return view('reporte.proveedorespdf', [
            'proveedores' => Proveedor::all()
        ]);
    }
}

<?php

namespace App\Exports;

use App\Models\Vehiculo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class VehiculosExport implements FromView
{
    public function view(): View
    {
        return view('reporte.vehiculospdf', [
            'vehiculos' => Vehiculo::all()
        ]);
    }
}

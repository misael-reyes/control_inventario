<?php

namespace App\Exports;

use App\Models\Marca;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class MarcasExport implements FromView
{
    public function view(): View
    {
        return view('reporte.marcaspdf', [
            'marcas' => Marca::all()
        ]);
    }
}

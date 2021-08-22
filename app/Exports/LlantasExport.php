<?php

namespace App\Exports;

use App\Models\Llanta;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class LlantasExport implements FromView
{
    public function view(): View
    {
        return view('reporte.llantaspdf', [
            'llantas' => Llanta::all()
        ]);
    }
}

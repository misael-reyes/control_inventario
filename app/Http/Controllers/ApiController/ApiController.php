<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Llanta;

class ApiController extends Controller {

    public function ver_medida(Request $request){
        $medida = $request->input('medida_');
        $llantas = Llanta::select('id','medida','gama','stock')
            ->where('medida',$medida)
            ->where('stock', '>', 0)
            ->where('activo', 1)
            ->get();

        return $llantas;
    }

    public function alta_llanta(Request $r){
        $llanta = Llanta::create($r->all());
        return response()->json(['mensaje' => 'se ha registrado una llanta']);
    }

    public function actualizar_stock(Request $re){
        $id = $re->input('id');
        $piezas = $re->input('piezas');
        $llanta = Llanta::find($id);
        $llanta->stock -= $piezas;
        $llanta->save();
        return response()->json(['mensaje' => 'se ha actualizado el stock']);
    }

    public function baja_llanta(Request $re){
        $id = $re->input('id');
        $llanta = Llanta::find($id);
        $llanta->activo = 0;
        $llanta->save();
        return response()->json(['mensaje' => 'se ha dado de baja una llanta']);
    }

    public function eliminar_llanta(Request $re){
        $id = $re->input('id');
        $llanta = Llanta::where('id',$id)->delete();
        return response()->json(['mensaje' => 'se ha eliminado una llanta']);
    }
}
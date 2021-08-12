<?php

namespace App\Http\Controllers;

use App\Models\Llanta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos las llantas que se encuentre en la BD
        $datos = Llanta::all();
        //  return response()->json($marcas);
        return view('llanta.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //recuperamos las marcas
        $marcas = DB::table('marcas')->get();
        //recuperamos los proveedores
        $proveedores = DB::table('proveedors')->get();
        //recuperamos a los vehiculos
        $vehiculos = DB::table('vehiculos')->get();
        return view('llanta.create', compact('marcas','proveedores','vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos campos
        $request->validate([
            'medida' => 'required',
            'marca_id' => 'required',
            'proveedor_id' => 'required',
            'mspn' => 'required',
            'gama' => 'required',
            'descripcion' => 'required',
            'ic_rv' => 'required',
            'vehiculo_id' => 'required',
            'precio_v' => 'required',
            'precio_c' => 'required',
            'descuento' => 'required'
        ]);

        $llanta = Llanta::create($request->all());
        return redirect('llanta');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function show(Llanta $llanta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $llanta = Llanta::findOrFail($id);
        
        //recuperamos las marcas
        $marcas = DB::table('marcas')->get();
        //recuperamos los proveedores
        $proveedores = DB::table('proveedors')->get();
        //recuperamos a los vehiculos
        $vehiculos = DB::table('vehiculos')->get();
        return view('llanta.edit', compact('llanta','marcas','proveedores','vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'medida' => 'required',
            'marca_id' => 'required',
            'proveedor_id' => 'required',
            'mspn' => 'required',
            'gama' => 'required',
            'descripcion' => 'required',
            'ic_rv' => 'required',
            'vehiculo_id' => 'required',
            'precio_v' => 'required',
            'precio_c' => 'required',
            'descuento' => 'required'
        ]);

        $datosLlanta = request()->except(['_token', '_method']);
        Llanta::where('id', '=', $id)->update($datosLlanta); //actualizamos en la BD
        return redirect('llanta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Llanta::destroy($id);
        return redirect('llanta');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Proveedor::all();
        //  return response()->json($marcas);
        return view('proveedor.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
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
            'nombre' => 'required',
            'num_telefono' => 'required',
            'e_mail' => 'required',
            'direccion_calle' => 'required',
            'direccion_colonia' => 'required',
            'direccion_numero' => 'required',
            'direccion_ciudad' => 'required',
            'direccion_estado' => 'required'
        ]);

        $proveedor = Proveedor::create($request->all());
        return redirect('proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$proveedor = Proveedor::findOrFail($id);
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'num_telefono' => 'required',
            'e_mail' => 'required',
            'direccion_calle' => 'required',
            'direccion_colonia' => 'required',
            'direccion_numero' => 'required',
            'direccion_ciudad' => 'required',
            'direccion_estado' => 'required'
        ]);

        $datosProveedor = request()->except(['_token', '_method']);
        Proveedor::where('id', '=', $id)->update($datosProveedor); 
        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        Proveedor::destroy($id);
        return redirect('proveedor');
    }
}

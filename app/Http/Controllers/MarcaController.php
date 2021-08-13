<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Marca::all();
        return view('marca.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_marca'=>'required'
        ]);
        $datosMarca = request()->except('_token');
        try {
            Marca::insert($datosMarca);
            return redirect('marca')->with('mensaje', 'Chofer agregado con éxito');
        } catch (\Illuminate\Database\QueryException $e) {
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$verM = Marca::select('id','nombre_marca')
        //->where('id',$id)
        //->first();

        $marca = Marca::findOrFail($id);

        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMarca = request()->except(['_token', '_method']);
        Marca::where('id', '=', $id)->update($datosMarca); //actualizamos en la BD
        return redirect('marca')->with('mensaje', 'Chofer modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Marca::destroy($id);
        return redirect('marca')->with('mensaje', 'Marca eliminada');
    }
}

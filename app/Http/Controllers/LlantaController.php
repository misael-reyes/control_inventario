<?php

namespace App\Http\Controllers;

use App\Models\Llanta;
use Illuminate\Http\Request;

class LlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('llanta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Llanta $llanta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llanta $llanta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Llanta  $llanta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Llanta $llanta)
    {
        //
    }
}

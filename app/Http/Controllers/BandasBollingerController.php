<?php

namespace App\Http\Controllers;

use App\Models\BandasBollinger;
use Illuminate\Http\Request;

class BandasBollingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bandas_de_bollinger = BandasBollinger::all()->where('activo', '=', '1');
        return $bandas_de_bollinger;
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
     * @param  \App\Models\BandasBollinger  $bandasBollinger
     * @return \Illuminate\Http\Response
     */
    public function show(BandasBollinger $bandasBollinger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BandasBollinger  $bandasBollinger
     * @return \Illuminate\Http\Response
     */
    public function edit(BandasBollinger $bandasBollinger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BandasBollinger  $bandasBollinger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BandasBollinger $bandasBollinger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BandasBollinger  $bandasBollinger
     * @return \Illuminate\Http\Response
     */
    public function destroy(BandasBollinger $bandasBollinger)
    {
        //
    }
}

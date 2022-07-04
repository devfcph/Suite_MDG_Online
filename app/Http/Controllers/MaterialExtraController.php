<?php

namespace App\Http\Controllers;

use App\Models\MaterialExtra;
use Illuminate\Http\Request;
use App\Http\Controllers\PsicotradingController;

class MaterialExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clases = new PsicotradingVideosController();
        $videos = $clases->ObtenerVideosClases();
        return view('materialextra.galeria', compact('videos'));
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
     * @param  \App\Models\MaterialExtra  $materialExtra
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialExtra $materialExtra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialExtra  $materialExtra
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialExtra $materialExtra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialExtra  $materialExtra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialExtra $materialExtra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialExtra  $materialExtra
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialExtra $materialExtra)
    {
        //
    }
}

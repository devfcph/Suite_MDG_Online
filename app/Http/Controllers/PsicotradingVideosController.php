<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB as database;
use App\Models\PsicotradingVideos;
use Illuminate\Http\Request;


class PsicotradingVideosController extends Controller
{

    public function ObtenerVideosPsicotrading()
    {
        $videos = PsicotradingVideos::all()->where('activo', '=', '1')->where('psicotrading', '=', '1');
        return $videos;
    }

    public function ObtenerVideosClases()
    {
        $videos = PsicotradingVideos::all()->where('activo', '=', '1')->where('psicotrading', '=', '0');
        return $videos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\PsicotradingVideos  $psicotradingVideos
     * @return \Illuminate\Http\Response
     */
    public function show(PsicotradingVideos $psicotradingVideos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PsicotradingVideos  $psicotradingVideos
     * @return \Illuminate\Http\Response
     */
    public function edit(PsicotradingVideos $psicotradingVideos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PsicotradingVideos  $psicotradingVideos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PsicotradingVideos $psicotradingVideos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PsicotradingVideos  $psicotradingVideos
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsicotradingVideos $psicotradingVideos)
    {
        //
    }
}

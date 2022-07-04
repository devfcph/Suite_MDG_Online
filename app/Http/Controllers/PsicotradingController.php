<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PsicotradingVideosController;

class PsicotradingController extends Controller
{
    //
    public function GaleriaPsicotrading()
    {
        $psico_videos = new PsicotradingVideosController();
        $videos = $psico_videos->ObtenerVideosPsicotrading();
        //dd($videos);
        return view('piscotrading.galeria.videos', compact('videos'));
    }


    public function GaleriaVideosClases()
    {
        $clases = new PsicotradingVideosController();
        $videos = $clases->ObtenerVideosClases();
        //dd($videos);
        return view('piscotrading.galeria.videos', compact('videos'));
    }

    public function BeforeTrading()
    {
        return view('piscotrading.before-trading');
    }

}

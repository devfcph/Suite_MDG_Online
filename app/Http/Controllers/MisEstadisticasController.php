<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as database;

class MisEstadisticasController extends Controller
{
    //
    public function index()
    {

        $data = database::select("call suitemdg.getTradesByUser('".auth()->user()->sys_guid."', '2021-10-10', '2021-10-27', 0);");
        
        
        if ($data) {
            // SE CONVIERTE A JSON
            $data = json_encode($data);
            // SE DECODIFICA EL JSON
            $data = json_decode($data, true);

            session()->flash('success', $data[0]['_success']);
            session()->flash('info', $data[0]['_msg']);

            $resumen_porcentajes = database::select("call suitemdg._sp_ObtenerResumenPorcentajeEntradas('".auth()->user()->sys_guid."');"); 
            $resumen_porcentajes = json_encode($resumen_porcentajes);
            $resumen_porcentajes = json_decode($resumen_porcentajes, true);


            return view('plantrading.stats-all-trades', compact('data', 'resumen_porcentajes'));
        } else {
            
            session()->flash('success', 'false');
            session()->flash('info', 'Error al obtener las operaciones registradas.');

            return view('plantrading.stats-all-trades');
        }

        //return view('plantrading.stats-all-trades');
    }

    

    /*
    public function indexOnWins()
    {
        return view('plantrading.win-trades');
    }

    public function indexOnLost()
    {
        return view('plantrading.lost-trades');
    }

    public function indexOnNeutral()
    {
        return view ('plantrading.neutral-trades');
    }
    */

}

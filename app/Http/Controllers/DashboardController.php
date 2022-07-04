<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\GraficasController;


class DashboardController extends Controller
{
    //
    public function index()
    {
        //$usuarios = User::all()->where('id', '=', );
        //dd(session()->all(), auth()->user()->sys_guid);

        $grafica  = new GraficasController();

        $data  = $grafica->ObtenerResumenEntradas();
        $UltimasImagenes = $grafica->ObtenerUltimasImagenes();
        $EstadisticasPrincipales = json_encode($data['ResumenPorcentajes']);
        $TotalGanadas = $data['TotalGanadas'];
        $TotalEmpatadas = $data['TotalEmpatadas'];
        $TotalPerdidas = $data['TotalPerdidas'];

        return view('dashboard.index', compact('EstadisticasPrincipales', 'TotalGanadas', 'TotalEmpatadas', 'TotalPerdidas', 'UltimasImagenes'));
    }
}

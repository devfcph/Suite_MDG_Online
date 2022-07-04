<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB as database;
use App\Http\Controllers\UtilsController as _Utils;



class GraficasController extends Controller
{
    //

    public function  ObtenerPorcentajesGlobales($TipoOperacion)
    {
        //porbar
        //$results = DB::select( DB::raw($sql), ['id' => $id]);
        $utils = new _Utils();

        $query = "call suitemdg._sp_EtadisticasUsuarioPorTipoOperacion(" . $utils->mysql_escape_mimic($TipoOperacion) . ", '" . $utils->mysql_escape_mimic(auth()->user()->sys_guid) . "');";

        $PuntosGrafica = [];
        $data =  database::select($query);
        //dd("call suitemdg._sp_EtadisticasUsuarioPorTipoOperacion(" . $TipoOperacion . ", '" . auth()->user()->sys_guid . "');", auth()->user()->sys_guid);
        if ($data) {
            $data = json_encode($data);
            $data = json_decode($data, true);


            if ($data[0]['_success'] != '0') {
                //dd($data);
                $sesiones = [];
                $divisas = [];
                $tipoOperacion = [];
                $expiracion = [];
                $temporalidadVela = [];
                $dataDivisa = [];
                $fechaOperacion  = [];


                foreach ($data as $row) {
                    switch ($row['_index']) {
                        case '2':
                            $sesiones[] = [
                                "name" => $row['sesion'],
                                "y" => floatval($row['totalSesion'])
                            ];
                            break;

                        case '3':
                            $dataDivisa = [floatval($row['totalSesion'])];
                            $divisas[] = [
                                "name" => $row['sesion'],
                                "data" => $dataDivisa
                            ];
                            break;

                        case '4':
                            $tipoOperacion[] = [
                                "name" => $row['sesion'],
                                "y" => floatval($row['totalSesion'])
                            ];
                            break;

                        case '5':
                            $expiracion[] = [
                                "name" => $row['sesion'],
                                "y" => floatval($row['totalSesion'])
                            ];
                            break;

                        case '6':
                            $temporalidadVela[] = [
                                "name" => $row['sesion'],
                                "y" => floatval($row['totalSesion'])
                            ];
                            break;
                        case '7':
                            $fechaOperacion[] = [
                                "name" => $row['sesion'],
                                "y" => floatval($row['totalSesion'])
                            ];
                            break;
                    }
                }
                $PuntosGrafica = Arr::add($PuntosGrafica, 'Sesiones', $sesiones);
                $PuntosGrafica = Arr::add($PuntosGrafica, 'Divisas', $divisas);
                $PuntosGrafica = Arr::add($PuntosGrafica, 'TipoOperaciones', $tipoOperacion);
                $PuntosGrafica = Arr::add($PuntosGrafica, 'Expiraciones', $expiracion);
                $PuntosGrafica = Arr::add($PuntosGrafica, 'TemporalidadesVelas', $temporalidadVela);
                $PuntosGrafica = Arr::add($PuntosGrafica, 'FechasOperaciones', $fechaOperacion);
            }

            return $PuntosGrafica;
        } else {
            return $this->GetDefaultArrayTrades();
        }
    }

    public function indexOnWins()
    {
        $array = $this->ObtenerPorcentajesGlobales(1);
        //dd($array);
        $Sesiones = json_encode($array['Sesiones']);
        $TipoOperaciones = json_encode($array['TipoOperaciones']);
        $arrayExpiraciones = $array['Expiraciones'];
        $arrayTiempoVelas = $array['TemporalidadesVelas'];
        $FechasOperaciones = $array['FechasOperaciones'];
        $arrayDivisas = $array['Divisas'];
        $arrayCategorias  = [];
        $categorias = "";

        $arrayCategorias[] = $categorias;
        $Divisas = json_encode($arrayDivisas);
        $infoTrades = $this->ObtenerEntradasPorTipo(1);


        //dd($arrayDivisas, $categorias, $arrayCategorias);
        $dataToPrint = [
            'TemporalidadesVela' => $arrayTiempoVelas,
            'Expiraciones' => $arrayExpiraciones,
            'FechasOperaciones' => $FechasOperaciones,
            'DataTableTrades' => $infoTrades
        ];



        return view(
            'plantrading.win-trades',
            compact(
                'dataToPrint',
                "Sesiones",
                "Divisas",
                "TipoOperaciones",
            )
        );
        // dd($arrayTiempoVelas, $arrayExpiraciones, $FechasOperaciones);
        /*
        return view('plantrading.win-trades', [
            "Sesiones" => $arraySesiones,
            "Divisas" => $arrayDivisas,
            "TipoOperaciones" => $arrayTipoOperaciones,
            "cat_divisas" => $categorias,
            "TemporalidadesVela" => $arrayTiempoVelas,
            "Expiraciones" => $arrayExpiraciones,
            "FechasOperaciones" => $FechasOperaciones
        ]);*/
    }

    public function indexOnLost()
    {
        $array = $this->ObtenerPorcentajesGlobales(2);
        //dd($array);
        $Sesiones = json_encode($array['Sesiones']);
        $TipoOperaciones = json_encode($array['TipoOperaciones']);
        $arrayExpiraciones = $array['Expiraciones'];
        $arrayTiempoVelas = $array['TemporalidadesVelas'];
        $FechasOperaciones = $array['FechasOperaciones'];
        $arrayDivisas = $array['Divisas'];
        $arrayCategorias  = [];
        $categorias = "";

        $arrayCategorias[] = $categorias;
        $Divisas = json_encode($arrayDivisas);
        $infoTrades = $this->ObtenerEntradasPorTipo(2);


        //dd($arrayDivisas, $categorias, $arrayCategorias);
        $dataToPrint = [
            'TemporalidadesVela' => $arrayTiempoVelas,
            'Expiraciones' => $arrayExpiraciones,
            'FechasOperaciones' => $FechasOperaciones,
            'DataTableTrades' => $infoTrades
        ];



        return view(
            'plantrading.lost-trades',
            compact(
                'dataToPrint',
                "Sesiones",
                "Divisas",
                "TipoOperaciones",
            )
        );
    }

    public function indexOnNeutral()
    {
        $array = $this->ObtenerPorcentajesGlobales(3);
        $Sesiones = json_encode($array['Sesiones']);
        $TipoOperaciones = json_encode($array['TipoOperaciones']);
        $arrayExpiraciones = $array['Expiraciones'];
        $arrayTiempoVelas = $array['TemporalidadesVelas'];
        $FechasOperaciones = $array['FechasOperaciones'];
        $arrayDivisas = $array['Divisas'];
        $arrayCategorias  = [];
        $categorias = "";

        $arrayCategorias[] = $categorias;
        $Divisas = json_encode($arrayDivisas);
        $infoTrades = $this->ObtenerEntradasPorTipo(3);


        //dd($arrayDivisas, $categorias, $arrayCategorias);
        $dataToPrint = [
            'TemporalidadesVela' => $arrayTiempoVelas,
            'Expiraciones' => $arrayExpiraciones,
            'FechasOperaciones' => $FechasOperaciones,
            'DataTableTrades' => $infoTrades
        ];



        return view(
            'plantrading.neutral-trades',
            compact(
                'dataToPrint',
                "Sesiones",
                "Divisas",
                "TipoOperaciones",
            )
        );
    }

    public function ObtenerEntradasPorTipo($TipoOperacion)
    {
        $utils = new _Utils();
        $result = [];
        $data = database::select("call suitemdg.getTradesByUser('" . $utils->mysql_escape_mimic(auth()->user()->sys_guid) . "', '2021-10-10', '2021-10-27', " . $TipoOperacion . ");");
        if ($data) {
            $result = json_encode($data);
            // SE DECODIFICA EL JSON
            $result = json_decode($result, true);
        }
        return $result;
    }

    private function GetDefaultArrayTrades()
    {
        $PuntosGrafica = [];

        $sesiones[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "y" => floatval(0)
        ];


        $divisas[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "data" => 'SIN DATOS'
        ];


        $tipoOperacion[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "y" => floatval(0)
        ];

        $expiracion[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "y" => floatval(0)
        ];

        $temporalidadVela[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "y" => floatval(0)
        ];

        $fechaOperacion[] = [
            "name" => 'SIN DATOS DISPONIBLES',
            "y" => floatval(0)
        ];


        $PuntosGrafica = Arr::add($PuntosGrafica, 'Sesiones', $sesiones);
        $PuntosGrafica = Arr::add($PuntosGrafica, 'Divisas', $divisas);
        $PuntosGrafica = Arr::add($PuntosGrafica, 'TipoOperaciones', $tipoOperacion);
        $PuntosGrafica = Arr::add($PuntosGrafica, 'Expiraciones', $expiracion);
        $PuntosGrafica = Arr::add($PuntosGrafica, 'TemporalidadesVelas', $temporalidadVela);
        $PuntosGrafica = Arr::add($PuntosGrafica, 'FechasOperaciones', $fechaOperacion);

        return $PuntosGrafica;
    }


    public function ObtenerResumenEntradas()
    {
        $PuntosGrafica = [];
        $resumen_porcentajes = database::select("call suitemdg._sp_ObtenerResumenPorcentajeEntradas('" . auth()->user()->sys_guid . "');");

        $ResumenPorcentajes = [];
        if ($resumen_porcentajes) {
            $resumen_porcentajes = json_encode($resumen_porcentajes);
            $resumen_porcentajes = json_decode($resumen_porcentajes, true);

            $ResumenPorcentajes[] = [
                "name" => 'GANADAS',
                "y" => floatval($resumen_porcentajes[0]['TotalGanadas'])
            ];

            $ResumenPorcentajes[] = [
                "name" => 'EMPATADAS',
                "y" => floatval($resumen_porcentajes[0]['TotalEmpatadas'])
            ];

            $ResumenPorcentajes[] = [
                "name" => 'PERDIDAS',
                "y" => floatval($resumen_porcentajes[0]['TotalPerdidas'])
            ];

            $PuntosGrafica = Arr::add($PuntosGrafica, 'TotalGanadas', floatval($resumen_porcentajes[0]['TotalGanadas']));
            $PuntosGrafica = Arr::add($PuntosGrafica, 'TotalEmpatadas', floatval($resumen_porcentajes[0]['TotalEmpatadas']));
            $PuntosGrafica = Arr::add($PuntosGrafica, 'TotalPerdidas', floatval($resumen_porcentajes[0]['TotalPerdidas']));

        } else {
            $ResumenPorcentajes[] = [
                "name" => 'SIN DATOS DISPONIBLES',
                "y" => floatval(0)
            ];
        }

        $PuntosGrafica = Arr::add($PuntosGrafica, 'ResumenPorcentajes', $ResumenPorcentajes);
        

        return $PuntosGrafica;
    }


    public function ObtenerUltimasImagenes()
    {
        $query = "call suitemdg._sp_ObtenerImagenesOperacion_ByUser('". auth()->user()->sys_guid."');";

        $response = database::select($query);
        $data  = "";
        if($response)
        {
            $data = json_encode($response);
            $data = json_decode($data, true);
        }
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use Illuminate\Support\Facades\DB as Database;
use App\Http\Requests\FormRequestMisOperaciones;
use App\Http\Controllers\UtilsController;


use App\Models\Sesion;
use App\Models\Divisa;
use App\Models\Tipooperacion;
use App\Models\Tiempooperaciones;
use App\Models\Tipoprofit;
use App\Models\Periodovela;
use App\Models\Soportesresistencia;
use App\Models\BandasBollinger;
use App\Models\AwesomeOscilator;
use App\Models\AoPosicion;
use App\Models\Estocastico;
use App\Models\CruceEstocastico;
use App\Models\PatronVela;
use App\Models\Volatilidad;
use App\Models\Tendencia;
use App\Models\Emocion;
use App\Models\Accion;


use DateTime;
use PhpParser\Node\Expr\Cast\Array_;
use Ramsey\Uuid\Guid\Guid;

class MisOperacionesController extends Controller
{
    //
    public function index($msg  = '')
    {
        $tipos_sesiones = Sesion::all()->where('activo', '=', '1');
        $divisas = Divisa::all()->where('activo', '=', '1');
        $tipo_operaciones = Tipooperacion::all()->where('activo', '=', 1);
        $tiempos = Tiempooperaciones::all()->where('activo', '=', '1');
        $profits = Tipoprofit::all()->where('activo', '=', '1');
        $periodovelas = Periodovela::all()->where('activo', '=', '1');
        $soportes_y_resisttencias = Soportesresistencia::all()->where('activo', '=', '1');
        $bandas_de_bollinger = BandasBollinger::all()->where('activo', '=', '1');
        $confirmacion_ao  = AwesomeOscilator::all()->where('activo', '=', '1');
        $posiciones_ao  = AoPosicion::all()->where('activo', '=', '1');
        $estocastico  = Estocastico::all()->where('activo', '=', '1');
        $cruce_estocastico  = CruceEstocastico::all()->where('activo', '=', '1');
        $patrones_vela  = PatronVela::all()->where('activo', '=', '1');
        $volatilidades  = Volatilidad::all()->where('activo', '=', '1');
        $tendencias  = Tendencia::all()->where('activo', '=', '1');
        $emociones  = Emocion::all()->where('activo', '=', '1');
        $acciones  = Accion::all()->where('activo', '=', '1');


        //dd($sesiones);
        return view('plantrading.main-trades',  compact('tipos_sesiones', 'divisas', 'tipo_operaciones', 'tiempos', 'profits', 'periodovelas', 'soportes_y_resisttencias', 'bandas_de_bollinger', 'confirmacion_ao', 'posiciones_ao', 'estocastico', 'cruce_estocastico', 'patrones_vela', 'volatilidades', 'tendencias', 'emociones', 'acciones', 'msg'));
        // if($msg == '')
        // {
        //     dd($msg);
        //     return redirect('/plantrading', compact('tipos_sesiones', 'divisas', 'tipo_operaciones', 'tiempos', 'profits', 'periodovelas', 'soportes_y_resisttencias', 'bandas_de_bollinger', 'confirmacion_ao', 'posiciones_ao', 'estocastico', 'cruce_estocastico', 'patrones_vela', 'volatilidades', 'tendencias', 'emociones', 'acciones', 'msg'));
        // }
        // else{
        //     return view('plantrading.main-trades',  compact('tipos_sesiones', 'divisas', 'tipo_operaciones', 'tiempos', 'profits', 'periodovelas', 'soportes_y_resisttencias', 'bandas_de_bollinger', 'confirmacion_ao', 'posiciones_ao', 'estocastico', 'cruce_estocastico', 'patrones_vela', 'volatilidades', 'tendencias', 'emociones', 'acciones', 'msg'));
        // }
    }


    public function showItem($guid)
    {

        $infoItemArray = $this->getItemByGuid($guid);


        //dd($infoItemArray);

        $msg = $infoItemArray[0]['_msg'];
        $data = array(
            'success' => $infoItemArray[0]['_success'],
            'info' => $msg
        );
        session()->flash('success', $data['success']);
        session()->flash('info', $data['info']);
        //dd($infoItemArray);
        if ($data['success'] == 0) {
            return redirect()->action([MisOperacionesController::class, 'index']);
        } else {

            //dd($infoItemArray);
            //$image = base64_decode($infoItemArray[0]['imgbase64']);
            //dd($infoItemArray, $image);


            //     $image_64 = $infoItemArray[0]['imgbase64']; //your base64 encoded data

            //     $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

            //     $replace = substr($image_64, 0, strpos($image_64, ',')+1); 

            //   // find substring fro replace here eg: data:image/png;base64,

            //     $image = str_replace($replace, '', $image_64); 

            //     $image = str_replace(' ', '+', $image); 




            $tipos_sesiones = Sesion::all()->where('activo', '=', '1');
            $divisas = Divisa::all()->where('activo', '=', '1');
            $tipo_operaciones = Tipooperacion::all()->where('activo', '=', 1);
            $tiempos = Tiempooperaciones::all()->where('activo', '=', '1');
            $profits = Tipoprofit::all()->where('activo', '=', '1');
            $periodovelas = Periodovela::all()->where('activo', '=', '1');
            $soportes_y_resisttencias = Soportesresistencia::all()->where('activo', '=', '1');
            $bandas_de_bollinger = BandasBollinger::all()->where('activo', '=', '1');
            $confirmacion_ao  = AwesomeOscilator::all()->where('activo', '=', '1');
            $posiciones_ao  = AoPosicion::all()->where('activo', '=', '1');
            $estocastico  = Estocastico::all()->where('activo', '=', '1');
            $cruce_estocastico  = CruceEstocastico::all()->where('activo', '=', '1');
            $patrones_vela  = PatronVela::all()->where('activo', '=', '1');
            $volatilidades  = Volatilidad::all()->where('activo', '=', '1');
            $tendencias  = Tendencia::all()->where('activo', '=', '1');
            $emociones  = Emocion::all()->where('activo', '=', '1');
            $acciones  = Accion::all()->where('activo', '=', '1');

            return view('plantrading.edit-trade', compact('guid', 'tipos_sesiones', 'divisas', 'tipo_operaciones', 'tiempos', 'profits', 'periodovelas', 'soportes_y_resisttencias', 'bandas_de_bollinger', 'confirmacion_ao', 'posiciones_ao', 'estocastico', 'cruce_estocastico', 'patrones_vela', 'volatilidades', 'tendencias', 'emociones', 'acciones', 'infoItemArray'));
        }
    }


    public function store(FormRequestMisOperaciones $request)
    {
        //dd($request);

        $formato = 'Y-m-d H:i:s';
        $fechahora = $request->inputFecha . ' ' . $request->inputHora . ':00';
        $fecha_hora = DateTime::createFromFormat($formato, $fechahora);

        $esNoticia = '0';
        if (!empty($request->bitOperacionNoticias)) {
            if ($request->bitOperacionNoticias == 'on') $esNoticia = '1';
        }
        //$imagedata = base64_encode(file_get_contents($request->file('capturaTrade')->pat‌​h())); 
        if ($request->capturaTrade)
            $image = base64_encode(file_get_contents($request->file('capturaTrade')));
        else
            $image = '';
        //dd($image, $request->capturaTrade);

        // Se envía la solicitud

        $utils = new UtilsController();

        $query = "call suitemdg._sp_OperacionPlanTrading_crear('" . $utils->mysql_escape_mimic($fechahora) . "', '" . $utils->mysql_escape_mimic($request->inputHora) . "', " . $utils->mysql_escape_mimic($request->inputInversion) . ", " . $utils->mysql_escape_mimic($request->inputRendimiento) . ", '" . $utils->mysql_escape_mimic(($request->inputAprendizaje)) . "', '" . $utils->mysql_escape_mimic($request->inputAccion) . "', '" . $utils->mysql_escape_mimic($request->inputPosicionAO) . "', '" . $utils->mysql_escape_mimic($request->inputConfirmacionAO) . "', '" . $utils->mysql_escape_mimic($request->inputBB) . "', '" . $utils->mysql_escape_mimic($request->inputCruceEstocastico) . "', '" . $utils->mysql_escape_mimic($request->inputDivisa) . "', '" . $utils->mysql_escape_mimic($request->inputEmociones) . "', '" . $utils->mysql_escape_mimic($request->inputEstocastico) . "', '" . $utils->mysql_escape_mimic($request->inputPatronVela) . "', '" . $utils->mysql_escape_mimic($request->inputPeriodoVela) . "', '" . $utils->mysql_escape_mimic($request->inputSesion) . "', '" . $utils->mysql_escape_mimic($request->inputSYR) . "', '" . $utils->mysql_escape_mimic($request->inputTendencia) . "', '" . $utils->mysql_escape_mimic($request->inputExpiracion) . "', '" . $utils->mysql_escape_mimic($request->inputOperacion) . "', '" . $utils->mysql_escape_mimic($request->inputResultado) . "', '" . $utils->mysql_escape_mimic($request->inputVolatilidad) . "', " . $utils->mysql_escape_mimic($esNoticia) . ",  '" . $utils->mysql_escape_mimic(auth()->user()->sys_guid) . "', '" . $image . "');";


        $response = Database::select($query); //ULTIMO PAÁMETRO: GUID DE LA OPERACIÓN


        if ($response) {
            // SE CONVIERTE A JSON
            $response = json_encode($response);

            // SE DECODIFICA EL JSON
            $response = json_decode($response, true);


            $success = $response[0]['_success'];
            $msg = $response[0]['_msg'];

            $data = array(
                'success' => $success,
                'info' => $msg
            );


            session()->flash('success', $data['success']);
            session()->flash('info', $data['info']);
            session()->flash('onUpdate', '0');

            return redirect()->back();
        } else {
            return redirect()->back()->with(['success', 'msg'], ['0', 'ERROR GARRAFAL']);
        }
    }


    public function update(FormRequestMisOperaciones $request, $guid)
    {

        //dd($request, $guid);
        $formato = 'Y-m-d H:i:s';
        $fechahora = $request->inputFecha . ' ' . $request->inputHora . ':00';
        $fecha_hora = DateTime::createFromFormat($formato, $fechahora);
        $esNoticia = '0';
        if (!empty($request->bitOperacionNoticias)) {
            if ($request->bitOperacionNoticias == 'on') $esNoticia = '1';
        }

        //dd($request);

        if($request->old_img == 'empty' && (!empty($request->capturaTrade)))
            $image = base64_encode(file_get_contents($request->file('capturaTrade')));
        elseif($request->old_img != 'empty' && (!empty($request->capturaTrade)))
            $image = base64_encode(file_get_contents($request->file('capturaTrade')));
        elseif(empty($request->capturaTrade) && $request->old_img != 'empty')
            $image = $request->old_img;
        else
            $image = '';
        // Se envía la solicitud

        $utils = new UtilsController();

        $query  = "call suitemdg._sp_OperacionPlanTrading_update('" . $utils->mysql_escape_mimic($fechahora) . "', '" . $utils->mysql_escape_mimic($request->inputHora) . "', " . $utils->mysql_escape_mimic($request->inputInversion) . ", " . $utils->mysql_escape_mimic($request->inputRendimiento) . ", '" . $utils->mysql_escape_mimic($request->inputAprendizaje) . "', '" . $utils->mysql_escape_mimic($request->inputAccion) . "', '" . $utils->mysql_escape_mimic($request->inputPosicionAO) . "', '" . $utils->mysql_escape_mimic($request->inputConfirmacionAO) . "', '" . $utils->mysql_escape_mimic($request->inputBB) . "', '" . $utils->mysql_escape_mimic($request->inputCruceEstocastico) . "', '" . $utils->mysql_escape_mimic($request->inputDivisa) . "', '" . $utils->mysql_escape_mimic($request->inputEmociones) . "', '" . $utils->mysql_escape_mimic($request->inputEstocastico) . "', '" . $utils->mysql_escape_mimic($request->inputPatronVela) . "', '" . $utils->mysql_escape_mimic($request->inputPeriodoVela) . "', '" . $utils->mysql_escape_mimic($request->inputSesion) . "', '" . $utils->mysql_escape_mimic($request->inputSYR) . "', '" . $utils->mysql_escape_mimic($request->inputTendencia) . "', '" . $utils->mysql_escape_mimic($request->inputExpiracion) . "', '" . $utils->mysql_escape_mimic($request->inputOperacion) . "', '" . $utils->mysql_escape_mimic($request->inputResultado) . "', '" . $utils->mysql_escape_mimic($request->inputVolatilidad) . "', " . $utils->mysql_escape_mimic($esNoticia) . ",  '" . $utils->mysql_escape_mimic(auth()->user()->sys_guid) . "', '" . $utils->mysql_escape_mimic($guid) . "', '".$image."');";


        $response = Database::select($query); //ULTIMO PAÁMETRO: GUID DE LA OPERACIÓN


        //dd($response);
        if ($response) {
            // SE CONVIERTE A JSON
            $response = json_encode($response);

            // SE DECODIFICA EL JSON
            $response = json_decode($response, true);


            $success = $response[0]['_success'];
            $msg = $response[0]['_msg'];

            $data = array(
                'success' => $success,
                'info' => $msg
            );


            session()->flash('success_edit', $data['success']);
            session()->flash('info_edit', $data['info']);
            session()->flash('onUpdate', '1');
            return redirect()->back();
        } else {
            return redirect()->back()->with(['success', 'msg'], ['0', 'ERROR GARRAFAL']);
        }
    }


    public function getItemByGuid($guid)
    {
        $utils = new UtilsController();

        $response = Database::select("call suitemdg._sp_ObtenerOperacionPorID('" . $utils->mysql_escape_mimic(auth()->user()->sys_guid) . "', '" . $utils->mysql_escape_mimic($guid) . "');");

        if ($response) {

            //            $utils = new UtilsController();
            // SE CONVIERTE A JSON
            $response = json_encode($response);

            $response = json_decode($response, true);

            return $response;
        } else {
            $data = array(
                '_success' => 0,
                '_msg' => '¡ERROR AL CONECTAR CON BASE DE DATOS'
            );
            return $data;
        }
    }
}

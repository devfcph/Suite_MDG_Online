@extends('adminlte::page')

@section('title', 'Editar Trades')

@section('plugins.Datatables', false)

<!--SE AÑADEN LOS PLUGINS-->
{{-- @section('plugins.Chartjs', true) --}}
@section('plugins.Sweetalert2', true)

{{-- @section('plugins.Pace', true) --}}
<br>



@section('content_header')
    <h1>Actualizar información</h1>

    {{-- <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="row">
                <div class="col-4 col-sm-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registros</span>
                            <span class="info-box-number" style="font-size:25px;">410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-4 col-sm-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registros</span>
                            <span class="info-box-number" style="font-size:25px;">410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-4 col-sm-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registros</span>
                            <span class="info-box-number" style="font-size:25px;">410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
        </div> --}}
@stop



@section('content')


    <form action="{{ route('plantrading.update', $guid) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <input type="hidden" name="old_img" id="old_img"
            value="{{ $infoItemArray[0]['imgbase64'] != '' ? $infoItemArray[0]['imgbase64'] : 'empty' }}">

        <div class="form-group">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-purple">
                        <div class="card-header">
                            <h3 class="card-title">Información de trading</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputFecha">FECHA</label>
                                    <input type="date" name="inputFecha" id="inputFecha" class="form-control"
                                        value="{{ old('inputFecha') ? old('inputFecha') : $infoItemArray[0]['fecha_operacion'] }}">


                                    @error('inputFecha')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputHora">HORA</label>
                                    <input type="time" name="inputHora" id="inputHora" class="form-control"
                                        value="{{ old('inputHora') ? old('inputHora') : $infoItemArray[0]['horaTrade'] }}">
                                    @error('inputHora')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="inputSesion">SESIÓN</label>
                                    <select id="inputSesion" name="inputSesion" class="form-control">
                                        <option value="" @php
                                            if (old('inputSesion') == '' && $infoItemArray[0]['id_sesion'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>
                                            Seleccionar

                                        </option>
                                        @foreach ($tipos_sesiones as $sesion)
                                            <option value="{{ $sesion['sys_guid'] }}"
                                                {{ (old('inputSesion') ? old('inputSesion') : $infoItemArray[0]['id_sesion']) == $sesion['sys_guid'] ? 'selected' : '' }}>
                                                {{ $sesion['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('inputSesion')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputDivisa">DIVISA</label>
                                    <select id="inputDivisa" name="inputDivisa" class="form-control">
                                        <option value="" @php
                                            if (old('inputDivisa') == '' && $infoItemArray[0]['id_divisa'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar...</option>
                                        @foreach ($divisas as $divisa)
                                            <option value="{{ $divisa['sys_guid'] }}"
                                                {{ (old('inputDivisa') ? old('inputDivisa') : $infoItemArray[0]['id_divisa']) == $divisa['sys_guid'] ? 'selected' : '' }}>
                                                {{ $divisa['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('inputDivisa')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputOperacion">OPERACIÓN</label>
                                    <select id="inputOperacion" name="inputOperacion" class="form-control">
                                        <option value="" @php
                                            if (old('inputOperacion') == '' && $infoItemArray[0]['id_tipo_operacion'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar...</option>
                                        @foreach ($tipo_operaciones as $operacion)
                                            <option value="{{ $operacion['sys_guid'] }}"
                                                {{ (old('inputOperacion') ? old('inputOperacion') : $infoItemArray[0]['id_tipo_operacion']) == $operacion['sys_guid'] ? 'selected' : '' }}>
                                                {{ $operacion['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('inputOperacion')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputExpiracion">EXPIRACIÓN</label>
                                    <select id="inputExpiracion" name="inputExpiracion" class="form-control">
                                        <option value="" @php
                                            if (old('inputExpiracion') == '' && $infoItemArray[0]['id_expiracion'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar...</option>
                                        @foreach ($tiempos as $tiempo)
                                            <option value="{{ $tiempo['sys_guid'] }}"
                                                {{ (old('inputExpiracion') ? old('inputExpiracion') : $infoItemArray[0]['id_expiracion']) == $tiempo['sys_guid'] ? 'selected' : '' }}>
                                                {{ $tiempo['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('inputExpiracion')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputPeriodoVela">Periodo de Velas</label>
                                    <select id="inputPeriodoVela" name="inputPeriodoVela" class="form-control">
                                        <option value="" @php
                                            if (old('inputPeriodoVela') == '' && $infoItemArray[0]['id_periodo_vela'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar...</option>
                                        @foreach ($periodovelas as $periodovela)
                                            <option value="{{ $periodovela['sys_guid'] }}"
                                                {{ (old('inputPeriodoVela') ? old('inputPeriodoVela') : $infoItemArray[0]['id_periodo_vela']) == $periodovela['sys_guid'] ? 'selected' : '' }}>
                                                {{ $periodovela['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('inputPeriodoVela')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputInversion">INVERSIÓN</label>
                                    <input type="number" step="any" name="inputInversion" id="inputInversion"
                                        class="form-control" onkeyup="calcularRetornoInversion()"
                                        value="{{ old('inputInversion') ? old('inputInversion') : $infoItemArray[0]['inversion'] }}">
                                    @error('inputInversion')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputRendimiento">RENDIMIENTOS</label>
                                    <select id="inputRendimiento" name="inputRendimiento" class="form-control"
                                        onchange="calcularRetornoInversion();">
                                        <option value="" @php
                                            if (old('inputRendimiento') == '' && $infoItemArray[0]['porcentajePago'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar</option>
                                        @for ($i = 70; $i <= 100; $i++)
                                            <option value="{{ $i }}"
                                                {{ (old('inputRendimiento') ? old('inputRendimiento') : $infoItemArray[0]['porcentajePago']) == $i ? 'selected' : '' }}>
                                                {{ $i }} %
                                            </option>
                                        @endfor
                                    </select>

                                    @error('inputRendimiento')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputResultado">RESULTADO</label>
                                    <select id="inputResultado" name="inputResultado" class="form-control"
                                        onchange="calcularRetornoInversion();">
                                        <option value="" @php
                                            if (old('inputResultado') == '' && $infoItemArray[0]['id_resultado'] == '') {
                                                echo 'selected disabled hidden';
                                            } else {
                                                echo ' disabled hidden';
                                            }
                                        @endphp>Seleccionar...</option>
                                        @foreach ($profits as $profit)
                                            <option value="{{ $profit['sys_guid'] }}"
                                                {{ (old('inputResultado') ? old('inputResultado') : $infoItemArray[0]['id_resultado']) == $profit['sys_guid'] ? 'selected' : '' }}>
                                                {{ $profit['descripcion'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('inputResultado')
                                        <small>
                                            <font color="red" style="font-size: 12.5pt;">
                                                <b>{{ Str::upper($message) }}</b>
                                            </font>
                                        </small>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <label for="inputRetorno">RETORNO</label>
                                    <input type="number" name="inputRetorno" id="inputRetorno" disabled
                                        class="form-control"
                                        value="{{ old('inputRetorno') ? old('inputRetorno') : $infoItemArray[0]['ImporteRetorno'] }}">
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="bitOperacionNoticias"
                                                name="bitOperacionNoticias"
                                                {{ (old('bitOperacionNoticias') ? old('bitOperacionNoticias') : $infoItemArray[0]['esNoticia']) == 'on' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="bitOperacionNoticias">OPERÉ CUANDO
                                                HABÍAN
                                                NOTICIAS CERCANAS O DESARROLLÁNDOSE</label>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <!-- <label for="customFile">Custom File</label> -->

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="capturaTrade"
                                                name="capturaTrade">
                                            <label class="custom-file-label" for="capturaTrade">SELECCIONAR IMAGEN DE LA
                                                OPERACIÓN</label>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="row">


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <!-- <label for="customFile">Custom File</label> -->

                                        <a class="btn btn-app btn-block" id="btnViewImage"
                                            onclick="visualizarImagenModal()">
                                            {{-- data-target=".bd-example-modal-lg" data-toggle="modal" --}}
                                            <i class="fas fa-play"></i>
                                            <h5> Visualizar Imagen </h5>
                                        </a>

                                    </div>

                                </div>



                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-xl-12">
                    <div id="accordion">
                        <div class="card card-purple">
                            <div class="card-header">

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    class="collapsed" aria-expanded="true">
                                    <h3 class="card-title">Detalles Complementarios de la Operación <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></h3>
                                </a>




                            </div>
                            <div id="collapseOne" style="" class="panel-collapse in collapse">
                                <!---->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputSYR">SOPORTES Y RESISTENCIAS</label>
                                            <select id="inputSYR" name="inputSYR" class="form-control">
                                                <option value="" @php
                                                    if (old('inputSYR') == '' && $infoItemArray[0]['id_soporte_resistencia']) {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($soportes_y_resisttencias as $syr)
                                                    <option value="{{ $syr['sys_guid'] }}"
                                                        {{ (old('inputSYR') ? old('inputSYR') : $infoItemArray[0]['id_soporte_resistencia']) == $syr['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $syr['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputBB">BANDAS DE BOLLINGER</label>
                                            <select id="inputBB" name="inputBB" class="form-control">
                                                <option value="" @php
                                                    if (old('inputBB') == '' && $infoItemArray[0]['id_bandas_bollinger'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($bandas_de_bollinger as $bb)
                                                    <option value="{{ $bb['sys_guid'] }}"
                                                        {{ (old('inputBB') ? old('inputBB') : $infoItemArray[0]['id_bandas_bollinger']) == $bb['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $bb['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputConfirmacionAO">CONFIRMACIÓN AWESOME OSCILATOR</label>
                                            <select id="inputConfirmacionAO" name="inputConfirmacionAO"
                                                class="form-control">
                                                <option value="" @php
                                                    if (old('inputConfirmacionAO') == '' && $infoItemArray[0]['id_ao_confirmacion'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($confirmacion_ao as $confirmacionao)
                                                    <option value="{{ $confirmacionao['sys_guid'] }}"
                                                        {{ (old('inputBB') ? old('inputBB') : $infoItemArray[0]['id_ao_confirmacion']) == $confirmacionao['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $confirmacionao['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>

                                    <hr>


                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputPosicionAO">POSICIÓN DEL AWESOME OSCILATOR</label>
                                            <select id="inputPosicionAO" name="inputPosicionAO" class="form-control">
                                                <option value="" @php
                                                    if (old('inputPosicionAO') == '' && $infoItemArray[0]['id_ao_posicion'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($posiciones_ao as $posicion_ao)
                                                    <option value="{{ $posicion_ao['sys_guid'] }}"
                                                        {{ (old('inputPosicionAO') ? old('inputPosicionAO') : $infoItemArray[0]['id_ao_posicion']) == $posicion_ao['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $posicion_ao['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputEstocastico">ESTOCÁSTICO</label>
                                            <select id="inputEstocastico" name="inputEstocastico" class="form-control">
                                                <option value="" @php
                                                    if (old('inputEstocastico') == '' && $infoItemArray[0]['id_estocastico'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($estocastico as $stoch)
                                                    <option value="{{ $stoch['sys_guid'] }}"
                                                        {{ (old('inputPosicionAO') ? old('inputPosicionAO') : $infoItemArray[0]['id_estocastico']) == $stoch['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $stoch['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputCruceEstocastico">CRUCE DE ESTOCÁSTICO</label>
                                            <select id="inputCruceEstocastico" name="inputCruceEstocastico"
                                                class="form-control">
                                                <option value="" @php
                                                    if (old('inputCruceEstocastico') == '' && $infoItemArray[0]['id_cruce_estocastico'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($cruce_estocastico as $cruce_stoch)
                                                    <option value="{{ $cruce_stoch['sys_guid'] }}"
                                                        {{ (old('inputCruceEstocastico') ? old('inputCruceEstocastico') : $infoItemArray[0]['id_cruce_estocastico']) == $cruce_stoch['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $cruce_stoch['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>


                                    <hr>


                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputPatronVela">PATRÓN DE VELA</label>
                                            <select id="inputPatronVela" name="inputPatronVela" class="form-control">
                                                <option value="" @php
                                                    if (old('inputPatronVela') == '' && $infoItemArray[0]['id_patron_vela'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($patrones_vela as $patron_vela)
                                                    <option value="{{ $patron_vela['sys_guid'] }}"
                                                        {{ (old('inputPatronVela') ? old('inputPatronVela') : $infoItemArray[0]['id_cruce_estocastico']) == $patron_vela['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $patron_vela['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputVolatilidad">VOLATILIDAD</label>
                                            <select id="inputVolatilidad" name="inputVolatilidad" class="form-control">
                                                <option value="" @php
                                                    if (old('inputVolatilidad') == '' && $infoItemArray[0]['id_volatilidad'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($volatilidades as $volatilidad)
                                                    <option value="{{ $volatilidad['sys_guid'] }}"
                                                        {{ (old('inputVolatilidad') ? old('inputVolatilidad') : $infoItemArray[0]['id_volatilidad']) == $volatilidad['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $volatilidad['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label for="inputTendencia">TENDENCIA</label>
                                            <select id="inputTendencia" name="inputTendencia" class="form-control">
                                                <option value="" @php
                                                    if (old('inputTendencia') == '' && $infoItemArray[0]['id_tendencia'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($tendencias as $tendencia)
                                                    <option value="{{ $tendencia['sys_guid'] }}"
                                                        {{ (old('inputTendencia') ? old('inputTendencia') : $infoItemArray[0]['id_tendencia']) == $tendencia['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $tendencia['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div id="accordion">
                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->

                    <!-- /.card-body -->
                </div>
            </div>
        </div>


        <!-- QUÉ APRENDÍ HOY -->
        <div class="form-group">
            <div class="row">
                <div class="col-xl-12">
                    <div id="accordion">
                        <div class="card card-purple">
                            <div class="card-header">

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    class="collapsed" aria-expanded="true">

                                    <h3 class="card-title">Después de operar yo... <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></h3>
                                    {{-- <i class="far fa-angle-down" aria-hidden="true"></i> --}}
                                </a>




                            </div>
                            <div id="collapseTwo" style="" class="panel-collapse in collapse">
                                <!--  -->
                                <div class="card-body">



                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label for="inputEmociones">EMOCIONES</label>
                                            <select id="inputEmociones" name="inputEmociones" class="form-control">
                                                <option value="" @php
                                                    if (old('inputEmociones') == '' && $infoItemArray[0]['id_emocion'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($emociones as $emocion)
                                                    <option value="{{ $emocion['sys_guid'] }}"
                                                        {{ (old('inputEmociones') ? old('inputEmociones') : $infoItemArray[0]['id_emocion']) == $emocion['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $emocion['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label for="inputAccion">ACCIONES DESPUÉS DE LA ENTRADA</label>
                                            <select id="inputAccion" name="inputAccion" class="form-control">
                                                <option value="" @php
                                                    if (old('inputAccion') == '' && $infoItemArray[0]['id_accion'] == '') {
                                                        echo 'selected disabled hidden';
                                                    } else {
                                                        echo ' disabled hidden';
                                                    }
                                                @endphp>Seleccionar...</option>
                                                @foreach ($acciones as $accion)
                                                    <option value="{{ $accion['sys_guid'] }}"
                                                        {{ (old('inputAccion') ? old('inputAccion') : $infoItemArray[0]['id_accion']) == $accion['sys_guid'] ? 'selected' : '' }}>
                                                        {{ $accion['descripcion'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label for="inputAprendizaje">¿QUÉ APRENDÍ HOY? DESCRIBE TUS
                                                    SENTIMIENTOS Y EMOCIONES</label>
                                                <textarea id="inputAprendizaje" name="inputAprendizaje"
                                                    class="form-control" rows="6"
                                                    placeholder="¿Qué es lo que observe? ¿Cómo estaban mis emociones? ¿Qué aprendí hoy?">@php
                                                        if (old('inputAprendizaje')) {
                                                            echo old('inputAprendizaje');
                                                        } elseif ($infoItemArray[0]['id_accion'] != '') {
                                                            echo $infoItemArray[0]['observaciones'];
                                                        } else {
                                                            echo '';
                                                        }
                                                    @endphp</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div id="accordion">
                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->

                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        </div>



        {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
    </form>


    {{-- <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center">
                    <img src="data:image/jpeg;base64, {{ $infoItemArray[0]['imgbase64'] }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --> --}}

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="modalImagen">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="data:image/jpeg;base64, {{ $infoItemArray[0]['imgbase64'] }}">
            </div>
        </div>
    </div>

@stop



@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.uikit.min.css" class="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"
        class="stylesheet"> --}}


    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" class="stylesheet"
rel="stylesheet" /> --}}


@stop



@section('js')

    <script type="text/javascript" src="../../vendor/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script>
        function calcularRetornoInversion() {
            var _inversion = document.getElementById('inputInversion').value;
            var _tipoprofit = document.getElementById('inputResultado').value;
            var _rendimiento = document.getElementById('inputRendimiento').value;

            var retorno = 0;

            if (_tipoprofit === '58e9a47c322711ecab3c089798ba0234') // ganada
            {
                retorno = _inversion * (_rendimiento / 100);
            } else if (_tipoprofit === '58e9a5db322711ecab3c089798ba0234') //perdida
            {
                retorno = 0;
            } else if (_tipoprofit === '58e9a660322711ecab3c089798ba0234') {
                retorno = _inversion;
            }

            document.getElementById('inputRetorno').value = retorno;
        }
    </script>


    <script>
        console.log('Hi!');

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });


        $(function() {
            $(document).on('click', '[id="btnViewImage"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });


        })


        $(document).ready(function() {

            bsCustomFileInput.init();

            <?php
                if(session()->has('success'))
                {
                    if(session()->get('success') == '0')
                    {
                        ?>
                            Toast.fire({
                                icon: 'error',
                                title: "<?php echo session()->get('info'); ?>"
                            });
                            <?php   
                    }
                    else
                    {
                        ?>
                            Toast.fire({
                                icon: 'success',
                                title: "<?php echo session()->get('info'); ?>"
                            });
                            <?php
                    }
                }

                if(session()->has('success_edit'))
                {
                    if(session()->get('success_edit') == '0')
                    {
                        ?>
                            Toast.fire({
                                icon: 'error',
                                title: "<?php echo session()->get('info_edit'); ?>"
                            });
                            <?php   
                    }
                    else
                    {
                        ?>
                            Toast.fire({
                                icon: 'success',
                                title: "<?php echo session()->get('info_edit'); ?>"
                            });
                            <?php
                    }
                }
            ?>






        });

        function visualizarImagenModal() {
            var data = document.getElementById('old_img');
            console.log(data);
            if (document.getElementById('old_img').value == 'empty') {
                Toast.fire({
                    icon: 'warning',
                    title: "¡La operación registrada no cuenta con una imagen!"
                });
            } else {
                $('#modalImagen').modal('show')
            }
        }
    </script>









@stop
@include('sweet::alert')

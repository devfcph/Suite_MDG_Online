@extends('adminlte::page')

@section('title', 'Estadísticas')

@section('plugins.Datatables', false)

@section('plugins.Sweetalert2', true)

<!--SE AÑADEN LOS PLUGINS-->
{{-- @section('plugins.Chartjs', true) --}}
{{-- @section('plugins.Sweetalert2', true) --}}
{{-- @section('plugins.Pace', true) --}}
<br>

@section('content')

    <br>
    <div id="accordion" class="container-fluid">
        <div class="card card-info">
            <div class="card-header">

                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"
                    aria-expanded="true">

                    <h3 class="card-title">
                        <font color="white">PARÁMETROS DE BÚSQUEDA <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </font>
                    </h3>
                    {{-- <i class="far fa-angle-down" aria-hidden="true"></i> --}}
                </a>




            </div>
            <div id="collapseTwo" style="" class="panel-collapse in collapse">
                <!--  -->
                <div class="card-body">
                    <div class="row">


                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <label for="inputFecha">FECHA DE INICIO</label>
                            <input type="date" name="inputFecha" id="inputFecha" class="form-control"
                                value="{{ old('inputFecha') }}">

                            @error('inputFecha')
                                <small>
                                    <font color="red" style="font-size: 12.5pt;">
                                        <b>{{ Str::upper($message) }}</b>
                                    </font>
                                </small>
                            @enderror
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <label for="inputFecha">FECHA FIN</label>
                            <input type="date" name="inputFecha" id="inputFecha" class="form-control"
                                value="{{ old('inputFecha') }}">

                            @error('inputFecha')
                                <small>
                                    <font color="red" style="font-size: 12.5pt;">
                                        <b>{{ Str::upper($message) }}</b>
                                    </font>
                                </small>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div id="accordion">


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-md-12">
                <div class="card card-gray">
                    <div class="card-header border-0">
                        <br>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <figure class="highcharts-figure">
                                    <div id="graf_divisas"></div>
                                </figure>
                            </div>
                            {{-- <div class="col-lg-3 col-md-3 col-xs-12">
                                <div id="pie-chart2"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-lg-6 col-xs-12 col-md-6">
                <div class="card card-gray">
                    <div class="card-header border-0">
                        <br>
                    </div>

                    <div class="card-body">

                        <!-- /.d-flex -->
                        <div class="container">
                            <h2 style="text-align: center;"></h2>
                            <div class="panel panel-primary">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <div id="pie-chart2"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
                <!-- /.card -->
            </div>

            <div class="col-lg-6 col-xs-12 col-md-6">
                <div class="card card-gray">
                    <div class="card-header border-0">
                        <br>
                    </div>

                    <div class="card-body">

                        <!-- /.d-flex -->
                        <div class="container">
                            <h2 style="text-align: center;"></h2>
                            <div class="panel panel-primary">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <div id="pie-chart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
                <!-- /.card -->
            </div>


            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>

    </div>



    {{-- {{ $FechasOperaciones }}
    <br>
    {{ $Expiraciones }}
    <br>
    {{ $TemporalidadesVela }} --}}

    {{-- @dd($dataToPrint['FechasOperaciones']) --}}

    <div class="form-group container-fluid">
        <div class="form-group">
            <div class="row align-items-start">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="card-title">
                                <font color="white"> RESUMEN DE FECHAS </font>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="table_Fechas" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>FECHA</th>
                                        <th># DE OPERACIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (session()->has('success') && session()->get('success') == '1') --}}
                                    @if (!empty($dataToPrint))
                                        @foreach ($dataToPrint['FechasOperaciones'] as $table)
                                            <tr>
                                                <td>{{ $table['name'] }}</td>
                                                <td>{{ $table['y'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{-- @endif --}}


                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="card-title">
                                <font color="white"> EXPIRACIÓN </font>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="table_Expiraciones" class="uk-table uk-table-hover uk-table-striped"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>EXPIRACIÓN</th>
                                        <th># DE OPERACIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (session()->has('success') && session()->get('success') == '1') --}}
                                    @if (!empty($dataToPrint))
                                        @foreach ($dataToPrint['Expiraciones'] as $table)
                                            <tr>
                                                <td>{{ $table['name'] }}</td>
                                                <td>{{ $table['y'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{-- @endif --}}


                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="card-title">
                                <font color="white"> TEMPORALIDADES DE VELAS </font>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="table_TiempoVelas" class="uk-table uk-table-hover uk-table-striped"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>TEMPORALIDADES</th>
                                        <th># DE OPERACIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (session()->has('success') && session()->get('success') == '1') --}}
                                    @if (!empty($dataToPrint))
                                        @foreach ($dataToPrint['TemporalidadesVela'] as $table)
                                            <tr>
                                                <td>{{ $table['name'] }}</td>
                                                <td>{{ $table['y'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{-- @endif --}}


                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="form-group">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="card-title">
                                <font color="white"> OPERACIONES PERDIDAS </font>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="main_stats_table" class="uk-table uk-table-hover uk-table-striped"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>FECHA</th>
                                        <th>SESION</th>
                                        <th>DIVISA</th>
                                        <th>OPERACIÓN</th>
                                        <th>TIEMPO</th>
                                        <th>RESULTADO</th>
                                        <th>INVERSION</th>
                                        <th>RENDIMIENTOS</th>
                                        <th>PROFIT</th>
                                        <th>
                                            ACCIONES
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr> --}}
                                    {{-- @if (session()->has('success') && session()->get('success') == '1') --}}
                                    @if (!empty($dataToPrint))
                                        @foreach ($dataToPrint['DataTableTrades'] as $table)
                                            <tr>
                                                <td>{{ $table['fecha_operacion'] }}</td>
                                                <td>{{ $table['sesion'] }}</td>
                                                <td>{{ $table['divisa'] }}</td>
                                                <td>{{ $table['tipo_operacion'] }}</td>
                                                <td>{{ $table['expiracion'] }}</td>
                                                <td>{{ $table['resultado'] }}</td>
                                                <td>{{ $table['inversion'] }}</td>
                                                <td>{{ $table['porcentajePago'] }}</td>
                                                <td>{{ $table['ImporteRetorno'] }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-6 text-center">
                                                            <a href="{{route('plantrading.show-item', $table['sys_guid_Trade'] )}}"><i class="fas fa-edit"></i></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{-- @endif --}}


                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- @dd($dataPrint) --}}


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.uikit.min.css" class="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"
        class="stylesheet">







@stop

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.uikit.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>






    <script>
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

        console.log('Hi!');
        $(document).ready(function() {



            @if (session()->has('success'))
                // @if (session()->get('success') == '0')
                    // Toast.fire({
                    // icon: 'error',
                    // title: "<?php echo session()->get('info'); ?>"
                    // });
                // @else
                    // Toast.fire({
                    // icon: 'success',
                    // title: "<?php echo session()->get('info'); ?>"
                    // });
                    // @endif
                // @endif



            var table = $('#main_stats_table').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Sin datos para mostrar",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin disponiblidad de datos",
                    "infoFiltered": "(de _MAX_ registros totales)",
                    "search": "Buscar"
                }
            });


            var table_fechas = $('#table_Fechas').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                lengthMenu: [5, 10, 15, 20, 25, 30],
                "lengthChange": false,
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrando _MENU_ ",
                    "zeroRecords": "Sin datos para mostrar",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin disponiblidad de datos",
                    "infoFiltered": "(de _MAX_ registros totales)",
                    "search": "Buscar"
                }
            });

            var table_expiraciones = $('#table_Expiraciones').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                lengthMenu: [5, 10, 15, 20, 25, 30],
                "lengthChange": false,
                "language": {
                    "lengthMenu": "Mostrando _MENU_ ",
                    "zeroRecords": "Sin datos para mostrar",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin disponiblidad de datos",
                    "infoFiltered": "(de _MAX_ registros totales)",
                    "search": "Buscar"
                }
            });

            var table_Tiempo = $('#table_TiempoVelas').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                lengthMenu: [5, 10, 15, 20, 25, 30],
                "lengthChange": false,
                "language": {
                    "lengthMenu": "Mostrando _MENU_ ",
                    "zeroRecords": "Sin datos para mostrar",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin disponiblidad de datos",
                    "infoFiltered": "(de _MAX_ registros totales)",
                    "search": "Buscar"
                }
            });


        });
    </script>


    <script>
        $(function() {
            Highcharts.chart('pie-chart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'SESIONES'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: ''
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Sesión:',
                    colorByPoint: true,
                    data: {!! $Sesiones !!}
                }]
            });


            Highcharts.chart('pie-chart2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'TIPO DE OPERACIONES'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: ''
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Sesión:',
                    colorByPoint: true,
                    data: {!! $TipoOperaciones !!}
                }]
            });

        });



        Highcharts.chart('graf_divisas', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'DIVISAS QUE HE OPERADO CON EMPATE'
            },
            // subtitle: {
            //     text: 'Source: WorldClimate.com'
            // },
            xAxis: {
                categories: [
                    'PARES'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total de entradas'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:8px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:4">{series.name}: </td>' +
                    '<td style="padding:0"><b>{series.data["data"].1f} </b></td></tr>',
                footerFormat: '</table>',
                shared: false,
                useHTML: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: {!! $Divisas !!}
        });
    </script>


@stop
@include('sweet::alert')

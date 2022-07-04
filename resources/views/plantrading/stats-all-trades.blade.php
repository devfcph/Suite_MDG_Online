@extends('adminlte::page')

@section('title', 'Estadísticas')

@section('plugins.Datatables', false)

@section('plugins.Sweetalert2', true)

<!--SE AÑADEN LOS PLUGINS-->
{{-- @section('plugins.Chartjs', true) --}}
{{-- @section('plugins.Sweetalert2', true) --}}
{{-- @section('plugins.Pace', true) --}}
<br>
@section('content_header')
    <hr>
    <h1>Mis Operaciones</h1>
@stop

@section('content')


    <div class="form-group">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <font color="white"> Resumen general</font>
                        </h3>
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="row">
                                    
                                    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                                        <!-- small card -->
                                        <div class="small-box bg-teal">
                                            <div class="inner">
                                                <h3 style="color:white;" >{{ empty($resumen_porcentajes) ? '0' : $resumen_porcentajes[0]['porcentaje_ganadas']}} %</h3>
                                                <b><p>Ganadas {{ empty($resumen_porcentajes) ? '0' : $resumen_porcentajes[0]['TotalGanadas']}}/{{ empty($resumen_porcentajes) ? '0' : $resumen_porcentajes[0]['TotalEntradas']}}</p></b>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                            <a href="{{route('misestadisticas.ganadas')}}" class="small-box-footer">
                                                Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    


                                    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                                        <!-- small card -->
                                        <div class="small-box bg-maroon">
                                            <div class="inner">
                                                <h3 style="color:white;" > {{ empty($resumen_porcentajes) ? '0' : $resumen_porcentajes[0]['porcentaje_perdidas']}} % </h3>
                                                <b><p>Perdidas {{ empty($resumen_porcentajes) ? '0' :  $resumen_porcentajes[0]['TotalPerdidas']}}/{{ empty($resumen_porcentajes) ? '0' :  $resumen_porcentajes[0]['TotalEntradas']}}</p></b>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                            <a href="{{route('misestadisticas.perdidas')}}" class="small-box-footer">
                                                Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                                        <!-- small card -->
                                        <div class="small-box bg-gray">
                                            <div class="inner">
                                                <h3 style="color:white;" > {{ empty($resumen_porcentajes) ? '0' :  $resumen_porcentajes[0]['porcentaje_empatadas']}} % </h3>
                                                <b><p>Empatadas {{ empty($resumen_porcentajes) ? '0' :  $resumen_porcentajes[0]['TotalEmpatadas']}}/{{ empty($resumen_porcentajes) ? '0' :  $resumen_porcentajes[0]['TotalEntradas']}}</p></b>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                            <a href="{{route('misestadisticas.empatadas')}}" class="small-box-footer">
                                                Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                <font color="white"> Trades Resgitrados </font>
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
                                    @if (session()->has('success') && session()->get('success') == '1')
                                        @foreach ($data as $table)
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


                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>






    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css"
            class="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.uikit.min.css"
            class="stylesheet">
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
                    @if (session()->get('success') == '0')
                        Toast.fire({
                        icon: 'error',
                        title: "<?php echo session()->get('info'); ?>"
                        });
                    @else
                        Toast.fire({
                        icon: 'success',
                        title: "<?php echo session()->get('info'); ?>"
                        });
                    @endif
                @endif



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
            });
            //$('#table_id').DataTable();
            /*Swal.fire(
                'Awebo prro!',
                'You clicked the button!',
                'success'
            ) */
        </script>

    @stop
    @include('sweet::alert')

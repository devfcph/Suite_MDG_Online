@extends('adminlte::page')

@section('title', 'Estadísticas')

@section('plugins.Datatables', false)

@section('plugins.Sweetalert2', true)

<!--SE AÑADEN LOS PLUGINS-->
{{-- @section('plugins.Chartjs', true) --}}
{{-- @section('plugins.Sweetalert2', true) --}}
{{-- @section('plugins.Pace', true) --}}


@section('content_header')

    <div class="container-fluid">
        <h1>GALERÍA PSICOTRADING</h1>
        <hr>

    </div>
@stop
<br>

@section('content')


    <div class="container-fluid">


        <div class="form-group">
            <div class="form-group">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <font color="white"> GALERÍA </font>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if (!empty($videos))
                                        @foreach ($videos as $video)
                                            <div class="col-md-6 col-lg-4 col-xs-12 col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            <i class="fa fa-youtube-play" style="color:red;"></i>
                                                            <b>{{ Str::upper($video['titulo']) }}</b>
                                                        </h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="hs-responsive-embed-youtube"><iframe
                                                                src="{{ $video['link'] }}" frameborder="0"
                                                                allowfullscreen=""></iframe></div>
                                                        <hr>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p>
                                                            <b> FECHA: </b> {{ $video['fecha'] }}
                                                        </p>
                                                        <p>
                                                            <b> DESCRIPCIÓN: </b> {{$video['descripcion']}}
                                                        </p>
                                                        <p>
                                                            <b> DURACIÓN: </b> {{$video['duracion']}}
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>






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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .hs-responsive-embed-youtube {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            padding-top: 25px;
        }

        .hs-responsive-embed-youtube iframe {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }

    </style>


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
    </script>



@stop
@include('sweet::alert')

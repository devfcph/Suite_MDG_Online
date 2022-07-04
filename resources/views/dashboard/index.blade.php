@extends('adminlte::page')

@section('title', 'Inicio')

<!--SE AÑADEN LOS PLUGINS-->
{{-- @section('plugins.Chartjs', true) --}}
{{-- @section('plugins.Sweetalert2', true) --}}
{{-- @section('plugins.Pace', true) --}}


{{-- @dd($UltimasImagenes); --}}

@section('content_header')

    <div class="text-center">
        <img src="/images/biglogo.png" alt="Autor da frase" title="Autor da frase" style="opacity: 0.5" width="130px;" height="130px"/>
        <hr>
    </div>
    <section>

        {{-- <figure>

            <img src="https://api.adorable.io/avatars/90/avatar" alt="Autor da frase" title="Autor da frase" />
            <figcaption><strong>Autor</strong><br>José Vieira, Portugal</figcaption>
        </figure>
        <hr>
        <h1>¡FRASE QUE TE MOTIVE TODOS LOS DÍAS!!!</h1> --}}
        {{-- <div class="neon">FRASE MAMALONA PARA INSPIRAR, CLARO QUE SIUUUU</div> --}}
        
        <div class="row ">
            <p class="quote">"He fallado una y otra vez en mi vida, por eso he conseguido el éxito"</p>
        </div>
       

    </section>
    
    <h5 class="text-right"> - Michael Jordan</h5>
@stop

@section('content')



    <div class="container-fluid">

        @if ($TotalPerdidas == '0' && $TotalEmpatadas == '0' && $TotalGanadas == '0')
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h3><i class="icon fas fa-exclamation-triangle"></i> ¡Atención!</h3>
                        <h4>AÚN NO CUENTA CON ESTADÍSTICAS PARA MOSTRAR</h4>
                    </div>
                </div>
            </div>
        @endif


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                    </div>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                        </figure>
                    </div>
                    <div class="card-footer">
                        <p> MI RESUMEN PRINCIPAL DE MIS ENTRADAS </p>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card">

                    <div class="card-body p-0">
                        <div class="col-md-12">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box bg-gradient-purple">
                                <span class="info-box-icon"><i class="far fa-grin-hearts fa-2x"></i></span>

                                <div class="info-box-content" style="padding-left: 10%">
                                    <span class="info-box-text">GANADAS</span>
                                    <span class="info-box-number">TOTAL: {{ $TotalGanadas }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>

                            <div class="info-box bg-gradient-purple">
                                <span class="info-box-icon"><i class="far fa-sad-cry fa-2x"></i></span>

                                <div class="info-box-content" style="padding-left: 10%">
                                    <span class="info-box-text">PERDIDAS</span>
                                    <span class="info-box-number">TOTAL: {{ $TotalPerdidas }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>

                            <div class="info-box bg-gradient-purple">
                                <span class="info-box-icon"><i class="far fa-grin-beam-sweat fa-2x"></i></span>

                                <div class="info-box-content" style="padding-left: 10%">
                                    <span class="info-box-text">EMPATADAS</span>
                                    <span class="info-box-number">TOTAL: {{ $TotalEmpatadas }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>


                            <!-- /.info-box -->

                            <!-- /.info-box -->


                            <!-- /.card -->

                            <!-- PRODUCT LIST -->

                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">


                <div class="card card-purple">
                    <div class="card-header">
                        <div class="card-title">
                            CONSEJOS E INFORMACIÓN EXTRA
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="/images/info_1.jpg" data-toggle="lightbox" data-title="SOPORTES Y RESISTENCIAS"
                                    data-gallery="gallery">
                                    <img src="/images/info_1.jpg" class="img-fluid mb-2" alt="SOPORTES Y RESISTENCIAS">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/images/info_2.jpg" data-toggle="lightbox" data-title="SESIÓN MADRUGADA"
                                    data-gallery="gallery">
                                    <img src="/images/info_2.jpg" class="img-fluid mb-2" alt="SESIÓN MADRUGADA">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/images/tip_1.jpg" data-toggle="lightbox" data-title="TIP " data-gallery="gallery">
                                    <img src="/images/tip_1.jpg" class="img-fluid mb-2" alt="TIP">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/images/tip_2.jpg" data-toggle="lightbox" data-title="TIP " data-gallery="gallery">
                                    <img src="/images/tip_2.jpg" class="img-fluid mb-2" alt="TIP">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/images/tip_3.jpg" data-toggle="lightbox" data-title="TIP " data-gallery="gallery">
                                    <img src="/images/tip_3.jpg" class="img-fluid mb-2" alt="TIP">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="/images/tip_4.jpg" data-toggle="lightbox" data-title="TIP " data-gallery="gallery">
                                    <img src="/images/tip_4.jpg" class="img-fluid mb-2" alt="TIP">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Sales</h3>
                            <a href="javascript:void(0);">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="sales-chart" height="200" style="display: block; width: 679px; height: 200px;"
                                width="679" class="chartjs-render-monitor"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div> --}}
                <!-- /.card -->

                <div class="card card-purple">
                    <div class="card-header">
                        <h3 class="card-title">ÚLTIMAS OPERACIONES</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">

                                @if (isset($UltimasImagenes) && !empty($UltimasImagenes))
                                    @foreach ($UltimasImagenes as $i)
                                        <li data-target="#carouselExampleIndicators"
                                            data-slide-to="{{ $i['numrow'] == '1' ? 0 : $i['numrow'] }}"
                                            class=""></li>
                                    @endforeach

                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="">
                                    </li>
                                @endif

                            </ol>
                            <div class="carousel-inner">


                                @if (isset($UltimasImagenes) && !empty($UltimasImagenes))
                                    @foreach ($UltimasImagenes as $imagen)

                                        <div class="carousel-item {{ $imagen['numrow'] == '1' ? 'active' : '' }}">
                                            <img class="d-block w-100"
                                                src="data:image/jpeg;base64, {{ $imagen['imagenbase64'] }}">
                                        </div>

                                    @endforeach
                                @else
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="/images/reglas.jpg">
                                    </div>
                                @endif



                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>

    {{-- <div id="ekkoLightbox-224" class="ekko-lightbox modal fade in show" tabindex="-1" role="dialog"
        style="padding-right: 15px; display: none;" aria-modal="true">
        <div class="modal-dialog" role="document" style="display: none; flex: 1 1 1px; max-width: 816px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">sample 3 - red</h4><button type="button" class="close"
                        data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="ekko-lightbox-container" style="height: 782px;">
                        <div class="ekko-lightbox-item fade"></div>
                        <div class="ekko-lightbox-item fade in show"><img
                                src="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" class="img-fluid"
                                style="width: 100%;"></div>
                        <div class="ekko-lightbox-nav-overlay"><a href="#"><span>❮</span></a><a href="#"><span>❯</span></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer hide" style="display: none;">&nbsp;</div>
            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
        integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Londrina+Sketch&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        /* 
                                                                                                                        body {
                                                                                                                            margin: 0;
                                                                                                                            
                                                                                                                            /* text-align: center; 
                                                                                                                            font-size: 1em;
                                                                                                                            position: relative;
                                                                                                                            height: 100vh;
                                                                                                                            display: flex;
                                                                                                                            justify-content: center;
                                                                                                                            align-items: center;
                                                                                                                        } */
        /* body{
                                                            background: url("http://images.pexels.com/photos/416728/pexels-photo-416728.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260") no-repeat center center/cover fixed;
                                                        } */

        section {
            /* background-color: rgba(223, 60, 245, 0.582); */
            /* background: #112;
                                            background-size: cover;
                                            margin: 0 */
            

            padding: 1.2em;
            margin: 0 auto;
            width: 100%;
            border-radius: 5px;
            /* font-family: "Londrina Sketch", cursive; */
            /* font-family: "Dancing Script"; */
            /* font-size: 24px; */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            line-height: 1.8;
        }

        .sectionimg {
            /* background-color: rgba(223, 60, 245, 0.582); */
            /* background: #112;
                                            background-size: cover;
                                            margin: 0 */
            background: url("/images/biglogo.png?auto=compress&cs=tinysrgb&dpr=3&h=750&w=200");
            background-size: 100px 100px;
            background-repeat: no-repeat;
            opacity: 0.3;
            
        }

        .quote {
            /* font-family: 'Dancing Script', cursive; */
            font-family: 'Indie Flower', cursive;
            font-size: 50px;
            font-weight: 700;
            font-style: bold;
        }

        h1 {
            font: lighter 2.5em/1 georgia;
            font-weight: lighter;
            padding: 1em;
            margin: 0;
            position: relative;
            color: #044389;
        }

        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right,
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0.75),
                    rgba(0, 0, 0, 0));
        }

        figcaption {
            padding: 0.5em;
            font-size: 0.8em;
        }


        #container {
            height: 500px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 700px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

    </style>
@stop

@section('js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
        integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
        integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        console.log('Hi!');

        $(document).ready(function() {
            $('.slider').bxSlider();
        });

        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });


        })


        /*Swal.fire(
            'Awebo prro!',
            'You clicked the button!',
            'success'
        ) */




        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'RESUMEN DE MIS ENTRADAS'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
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
                name: 'Operaciones',
                colorByPoint: true,
                data: {!! $EstadisticasPrincipales !!}
            }]
        });


        Highcharts.chart('container2', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
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
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 11.84
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Sogou Explorer',
                    y: 1.64
                }, {
                    name: 'Opera',
                    y: 1.6
                }, {
                    name: 'QQ',
                    y: 1.2
                }, {
                    name: 'Other',
                    y: 2.61
                }]
            }]
        });
    </script>





@stop

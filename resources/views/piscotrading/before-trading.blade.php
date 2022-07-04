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
        <h1>Before Trading</h1>
        
    </div>
@stop
<br>

@section('content')


    <div class="container-fluid">
<hr>
        <div class="row">
            <div class="col-md-5">
                <div class="callout callout-info">
                    <h3><i class="fas fa-info"></i> ¿Qué es este espacio?</h3>
                    Decidimos crear este espacio y lo llamamos <b>BEFORE TRADING</b> (Algo así como <i>Antes de Trading</i>)
                    <br>
                    <hr>
                    Estuvimos revisando información de cursos y páginas de Trading y esto se meciona
                    <br>
                    para ser <b>UN TRADER PRO</b>:
                </div>
            </div>
            <div class="col-md-7">
                <div class="callout callout-warning">
                    <h3><i class="fas fa-info"></i> ¿Qué debo trabajar en mí para convertirme en un TRADER PRO?</h3>
                    Te invitamos a reflexionar cuál de estos puntos son los que te faltan por desarrollar en tu vida y formación de
                    <b><i>Trader</i></b>
                    <br>
                    <hr>
                    El objetivo de <b> BEFORE TRADING </b> es que lo veas todos los días y puedas recordar las <i> Tareas de <b>
                            Psicotrading </b></i> y el <b> Plan de Trading </b> que crearás.
                    <br>
                </div>
            </div>
        </div>
    <hr>        
    </div>

  

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <font color="white"> REQUISITOS </font>
                        </h3>
                    </div>

                    <div class="card-body">

                        <ul class="list-ic vertical">
                            <li>
                                <span>1</span>
                                APRENDIZAJE
                            </li>
                            <li>
                                <span>2</span>
                                FORTALEZA MENTAL
                            </li>
                            <li>
                                <span>3</span>
                                INVERSIÓN
                            </li>
                            <li>
                                <span>4</span>
                                COMPROMISO Y DEDICACIÓN
                            </li>
                        </ul>


                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <font color="white"> CLAVES DE ÉXITO </font>
                        </h3>
                    </div>

                    <div class="card-body">
                        <ul class="list-ic vertical">
                            <li>
                                <span>1</span>
                                ESTRATEGIA DE TRADING SIMPLE Y GANADORA
                            </li>
                            <li>
                                <span>2</span>
                                FORMACIÓN CONSTANTE
                            </li>
                            <li>
                                <span>3</span>
                                TIEMPO PARA APRENDER
                            </li>
                            <li>
                                <span>4</span>
                                PLAN DE TRADING
                            </li>
                            <li>
                                <span>5</span>
                                LAS NOTICIAS
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <font color="white"> HÁBITOS </font>
                        </h3>
                    </div>

                    <div class="card-body">
                        <ul class="list-ic vertical">
                            <li>
                                <span>1</span>
                                COMIDA SALUDABLE
                            </li>
                            <li>
                                <span>2</span>
                                EJERCICIO Y TIEMPO DE DESCANSO
                            </li>
                            <li>
                                <span>3</span>
                                ACTITUD POSITIVA
                            </li>
                            <li>
                                <span>4</span>
                                AUTOCRÍTICA CONSTRUCTIVA
                            </li>
                            <li>
                                <span>5</span>
                                APRENDER A GANAR DINERO VS GANAR DINERO
                            </li>
                            <li>
                                <span>6</span>
                                OLVIDAR LOS PROBLEMAS PERSONALES
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-7">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <font color="white"> PUNTOS CLAVES A CONSIDERAR </font>
                        </h3>
                    </div>

                    <div class="card-body">
                        <ul class="list-ic vertical">
                            <p>
                               <h5> Te recordamos revisar tu Estrategia, tus Metas, Visualizar tus Operaciones y Ejecutar tu Psicotrading de Forma Disciplinada. </h5>
                            </p>

                            <li>
                                <span>1</span>
                                Siempre debe tener su área de Trading ordenado y limpio
                            </li>
                            <li>
                                <span>2</span>
                                Hacer ejercicio y alimentarse saludablemente.
                            </li>
                            <li>
                                <span>3</span>
                                Visualizar su Operativa y Fijar sus Metas.
                            </li>
                            <li>
                                <span>4</span>
                                <b>NO </b> operar en Noticias.
                            </li>
                            <li>
                                <span>5</span>
                                Preparar sus Gráficos y concentrarse en pocos pares.
                            </li>
                            <li>
                                <span>6</span>
                                Controlar y Definir su Gestión de Riesgo (antes de abrir los Gráficos).
                            </li>
                            <li>
                                <span>7</span>
                                Poner límites a sus operaciones (con cuantas perdidas y ganadas se retirará?).
                            </li>
                            <li>
                                <span>8</span>
                                Fijar un Horario (no debe operar todo el día). Es necesario descansar diariamente.
                            </li>
                            <li>
                                <span>9</span>
                                Saber que Operaciones tomar y como tomarlas.
                            </li>
                            <br>
                            <li>
                                <span>10</span>
                                Crear su listado de confirmaciones para Operaciones Ganadoras y Perdedoras.
                            </li>
                            <li>
                                <span>11</span>
                                Si termina su Sesión, da lo mismo lo que pase después.
                            </li>
                            <li>
                                <span>12</span>
                                Tome el Trading como un Trabajo.
                            </li>
                            <li>
                                <span>13</span>
                                Debe crear Disciplina, Consistencia y Compromiso.
                            </li>
                            <li>
                                <span>14</span>
                                Debe pensar a mediano y largo plazo.
                            </li>
                            <li>
                                <span>15</span>
                                El Trading no es para Trader cortoplacistas.
                            </li>
                            <li>
                                <span>16</span>
                                El Trading se mide Semanal o Mensual. Un día negativo no pasará nada.
                            </li>
                            <li>
                                <span>17</span>
                                Mida su operativa en Porcentaje, no en dinero.
                            </li>
                            <li>
                                <span>18</span>
                                <a href="">Mire este video de Trading en la Zona antes de comenzar
                                </a>
                            </li>
                        </ul>

                         </div>
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>



    @stop

    @section('css')
        {{-- <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.uikit.min.css" class="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" class="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"
        class="stylesheet"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" class="stylesheet">

        <style>
            * {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            h2 {
                margin: 50px 0 30px 0;
            }

            body {
                font-family: Open Sans, sans-serif;
                font-style: normal !important;
                font-weight: normal !important;
                font-variant: normal !important;
                text-transform: none !important;
                speak: normal;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .list-ic a {

                text-decoration: none;
            }

            .list-ic li {
                position: relative;
                color: #788288;
            }

            .list-ic li span {
                display: inline-block;
                font-weight: 800;
                width: 4em;
                height: 2em;
                text-align: center;
                line-height: 2em;
                border-radius: 1em;
                background: #18bc9c;
                color: white;
                position: relative;
            }

            .list-ic li::before {
                content: '';
                position: absolute;
                background: #18bc9c;
                z-index: -1;
            }

            .list-ic.horizontal li {
                display: inline-block;
            }

            .list-ic.horizontal li span {
                margin: 0 1em 10px;
            }

            .list-ic.horizontal li::before {
                top: 0.9em;
                left: -25px;
                width: 4em;
                height: 0.2em;
            }

            .list-ic.vertical {
                padding: 0;
                margin: 0;
            }

            .list-ic.vertical li {
                list-style-type: none;
                text-align: left;
            }

            .list-ic.vertical li span {
                margin: 1.1em 0 2px 5px;
            }

            .list-ic.vertical li::before {
                top: -35px;
                left: 37px;
                width: 0.3em;
                height: 100%;
            }

            .list-ic li:first-child::before {
                display: none;
            }

            .list-ic .active {
                background: dodgerblue;
            }

            .list-ic .active~li {
                background: lightblue;
            }

            .list-ic .active~li::before {
                background: lightblue;
            }

        </style>



        {{-- <style>
        .bulleted {
            max-width: auto;
            padding: 10px 10px 0 0px;
        }

        .bulleted li {
            display: block;
            position: relative;
            margin-bottom: 15px;
            padding-left: 50px;
        }

        .bulleted li:before {
            content: "";
            display: block;
            height: 20px;
            width: 20px;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            background-color: teal;
            border-radius: 50%;
        }

        .bulleted h3,
        .bulleted p {
            margin: 0;
        }

        .bulleted h3+p {
            margin-top: 5px;
        }

    </style> --}}

    @stop

    @section('js')
        {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.uikit.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script> --}}





    @stop
    @include('sweet::alert')

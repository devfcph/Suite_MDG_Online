@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>AQUÍ SE MOSTRARÁ EL HEADER DE LAS TABLAS</h1>
@stop

@section('content')
    <p>Aquí irá la data</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
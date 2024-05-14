<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('css/index.css')}}">
        <link rel="stylesheet" href="{{url('css/master.css')}}">
        <link rel="stylesheet" href="{{url('css/menu.css')}}">
        <link rel="stylesheet" href="{{url('css/show.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    </head>
    <body>
        @include('cabecera')
        @section('index')
        @show
        @include('footer')
    </body>
</html>
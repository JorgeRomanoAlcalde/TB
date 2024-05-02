<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('css/index.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    </head>
    <body>

        
        @include('cabecera')
        @section('index')
        @show
        @section('footer')
            MASTER FOOTER
        @show
        
    </body>
</html>
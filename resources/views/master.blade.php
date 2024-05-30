<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('css/index.css')}}">
        <link rel="stylesheet" href="{{url('css/master.css')}}">
        <link rel="stylesheet" href="{{url('css/menu.css')}}">
        <link rel="stylesheet" href="{{url('css/show.css')}}">
        <link rel="stylesheet" href="{{url('css/tablas.css')}}">
        <link rel="stylesheet" href="{{url('css/form.css')}}">
        <link rel="stylesheet" href="{{url('css/textos.css')}}">
        <link rel="stylesheet" href="{{url('css/pedidos.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        @include('cabecera')
        @section('index')
        @show
        @include('footer')
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
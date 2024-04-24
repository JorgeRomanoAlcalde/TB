@extends("master")
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
<header>
    <a href="index.blade.php"><img src="{{asset('images\icon.png')}}" alt="Trace Better ICON"></a>
</header>
    <div id="contenedorIndex">
        <h1>Bienvenido a Trace Better</h1>
        <div>
            <form action = "" method="GET" class="centrado">
                @csrf
                <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
            </form>

            <form action = "" method="GET" class="centrado">
                @csrf
                <button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
            </form>
        </div>
    </div>
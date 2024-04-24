@extends("master")
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
<header>
    <a href="index.blade.php"><img src="{{asset('images\icon.png')}}" alt="Trace Better ICON"></a>
</header>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 carrusel" src="{{asset('images\carrousel ejemplo.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 carrusel" src="" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 carrusel" src="" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
        </a>
    </div>

    

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
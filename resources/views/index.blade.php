@extends("master")
@section('title', 'Inicio')

@section('index')
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 carrusel" src="{{asset('images\carrousel ejemplo.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 carrusel" src="{{asset('images\carrousel2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 carrusel" src="{{asset('images\carrousel3.jpg')}}" alt="Third slide">
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
        <h1 id="titulo">El software de gestión sencillo y fiable</h1>
        <p class="parrafo">Trace Better busca facilitar el trabajo tanto de camareros a la hora del servicio como de los dueños o administradores de los locales para tener un historial
            de los movimientos en su local.  La aplicación estará apoyada de una interfaz sencilla y una usabilidad intuitiva con la que se conseguirá agilizar y facilitar
            el desarrollo de las actividades empresariales de los usuarios de la aplicación.
        </p><br>
        <p class="parrafo">Con todas estas cualidades lo que se busca es atraer usuarios tanto veteranos en el sector, como nuevos con el fin de darles una experiencia
            más sencilla y que no dependa de dispositivos TPV como la gran mayoría de gestores de hostelería del mercado actual.
        </p>
    </div>
</section>
@endsection
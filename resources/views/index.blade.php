@extends("master")
@section('title', 'Inicio')

@section('index')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images\cortado1.jpeg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images\cortado2.jpeg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images\cortado3.jpeg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <div class="contenedorIndex" >
        <h1 id="titulo">El software de gestión sencillo y fiable</h1>
        <p class="parrafo">Trace Better busca facilitar el trabajo tanto de camareros a la hora del servicio como de los dueños o administradores de los locales para tener un historial
            de los movimientos en su local.  La aplicación estará apoyada de una interfaz sencilla y una usabilidad intuitiva con la que se conseguirá agilizar y facilitar
            el desarrollo de las actividades empresariales de los usuarios de la aplicación.
        </p><br>
        <p class="parrafo">Con todas estas cualidades lo que se busca es atraer usuarios tanto veteranos en el sector, como nuevos con el fin de darles una experiencia
            más sencilla y que no dependa de dispositivos TPV como la gran mayoría de gestores de hostelería del mercado actual.
        </p>
    </div>

    <div class="contenedorIndex" id="gris">
        <h1 id="titulo">Ventajas de TRACE BETTER</h1>
        <p class="parrafo">Con Trrace Better podras sacar el maximo partido a tu local de restauración gracias a sus ventajas frente a sus competidores en el mercado. Se trata de un 
            software que facilita su uso a nuevos usuarios gracias a su rapidez, manejo intuitivo, sencillez visual y su eficiencia al tratar la información.
        </p><br>
        <img src="{{asset('images/esquema.png')}}" alt="imagen esquema ventajas" id="esquema">
    </div>
</section>
@endsection
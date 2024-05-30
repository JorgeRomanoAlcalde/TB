@extends('master')
@section('index')
<section class="titulos">
    <h1>Perfil del local</h1>
</section>
<section class="contenedorTablas" style="padding-top: 0px">
    <div class="infoLocal">
        <h1>Información del local</h1>
        <p><b>Nombre del local:</b> {{$local->nombre}}</p>
        <p><b>Ubicación:</b> {{$local->ubicacion}}</p>
        <p><b>Teléfono:</b> {{$local->telefono}}</p>
        <p><b>Horario:</b> {{$local->horario}}</p>
    </div>

    <!-- MENU DE OPCIONES -->
    <div class="opcionesContenedor">
        <h2>Opciones</h2>
        <form action="{{route('edit.local', $local->id)}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary botonEnlace"><img src="{{asset('images\icons\edit.png') }}" alt="icono añadir" class="iconos">Editar local</button>
        </form>
        <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img
                src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
    </div>
</section>
@endsection


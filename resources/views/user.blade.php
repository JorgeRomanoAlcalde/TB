@extends('master2')
@section('title', 'Perfil')
@section('index')
    <section class="titulos">
        <h1>Perfil de usuario</h1>
    </section>
    <section class="contenedorTablas">
        <div class="infoLocal">
            <h1>Información de usuario</h1>
            <p><b>Nombre de usuario:</b> @auth{{ Auth::user()->nickname }}@endauth
            </p>
            <p><b>Nombre:</b> @auth{{ Auth::user()->nombre }}@endauth
            </p>
            <p><b>Apellidos:</b> @auth{{ Auth::user()->apellidos }}@endauth
            </p>
            <p><b>Telefono:</b> @auth{{ Auth::user()->telefono }}@endauth
            </p>
            @if (Auth::user()->admin == 0)
                <p><b>Rol:</b> Asalariado</p>
            @else
                <p><b>Rol:</b> Administrador</p> 
            @endif
        </div>
        @php
            $profile = Auth::user()->id;
        @endphp

        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <form action="{{ route('edit.users', $profile) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary botonEnlace"><img src="{{asset('images\icons\edit.png') }}" alt="icono añadir" class="iconos">Editar usuario</button>
            </form>
            <a class="btn btn-primary" href="{{ route('logout') }}" role="button"><img
                    src="{{ asset('images\icons\logout.png') }}" alt="icono añadir" class="iconos">Cerrar sesión</a>
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img
                    src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

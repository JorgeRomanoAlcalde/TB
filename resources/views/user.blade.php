@extends('master2')
@section('title', 'Perfil')
@section('index')
    <section class="contenedorTablas">
        <div>
            <h1>Información de usuario</h1>
            <p><b>Nombre de usuario:</b> @auth{{ Auth::user()->nickname }}@endauth
            </p>
            <p><b>Nombre:</b> @auth{{ Auth::user()->nombre }}@endauth
            </p>
            <p><b>Apellidos:</b> @auth{{ Auth::user()->apellidos }}@endauth
            </p>
            <p><b>Telefono:</b> @auth{{ Auth::user()->telefono }}@endauth
            </p>
            <p><b>Rol:</b> @auth{{ Auth::user()->admin }}@endauth
            </p>
        </div>
        @php
            $profile = Auth::user()->id;
        @endphp

        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <form action="{{ route('edit.users', $profile) }}" method="POST">
                <button type="submit" class="btn btn-primary botonTabla"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Editar usuario</button>
            </form>
            <a class="btn btn-primary" href="{{ route('logout') }}" role="button"><img
                    src="{{ asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Cerrar sesión</a>
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img
                    src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

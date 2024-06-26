@extends('master2')
@section('title', 'Usuarios')
@section('index')
    <section class="titulos">
        <h1>Usuarios</h1>
    </section>
    <section class="contenedorTablas">
        <section class="tablaSection">
            <table class='tabla table table-bordered table-hover'>
                <thead>
                    <tr>
                        <th class="table-primary">Nombre de usuario</th>
                        <th class="table-primary">Nombre</th>
                        <th class="table-primary">Apellidos</th>
                        <th class="table-primary">Email</th>
                        <th class="table-primary">Teléfono</th>
                        <th class="table-primary centrado">Modificar / Borrar</th>
                    </tr>
                </thead>
                @foreach ($userList as $user)
                    <tr>
                        <td>{{ $user->nickname}}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->apellidos }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telefono }}</td>
                        <td class='centrado'>
                            <form action ="{{route('edit.users', $user->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary botonTabla"><img src="{{asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Modificar</button>
                            </form>
                            <form action ="{{route('destroy.users', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary botonTabla"><img src="{{asset('images\icons\delete.png') }}" alt="icono borrar" class="iconos">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <a class="btn btn-primary" href="{{ route('add.users') }}" role="button"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir usuarios</a>
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img src="{{asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

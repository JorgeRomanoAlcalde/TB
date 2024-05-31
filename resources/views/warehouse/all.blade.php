@extends('master2')
@section('title', 'Almacenes')
@section('index')
    <section class="titulos">
        <h1>Almacenes</h1>
    </section>
    <section class="contenedorTablas">
        <section class="tablaSection">
            <table class='tabla table table-bordered table-hover'>
                <thead>
                    <tr>
                        <th class="table-primary">ID</th>
                        <th class="table-primary">Sección</th>
                        <th class="table-primary">Nombre</th>
                        <th class="table-primary centrado">Modificar / Borrar</th>
                    </tr>
                </thead>
                @foreach ($warehouseList as $warehouse)
                    <tr>
                        <td>#{{ $warehouse->id }}</td>
                        <td>{{ $warehouse->seccion }}</td>
                        <td>{{ $warehouse->nombre }}</td>
                        <td class='centrado'>
                            <form action ="{{route('edit.warehouse', $warehouse->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary botonTabla"><img
                                        src="{{ asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Modificar</button>
                            </form>
                            <form action ="{{route('destroy.warehouse', $warehouse->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary botonTabla"><img
                                        src="{{ asset('images\icons\delete.png') }}" alt="icono borrar" class="iconos">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <a class="btn btn-primary" href="{{ route('add.warehouse') }}" role="button"><img
                    src="{{ asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir almacen</a>
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img
                    src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

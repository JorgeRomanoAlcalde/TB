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
                    </tr>
                </thead>
                @foreach ($warehouseList as $warehouse)
                    <tr>
                        <td>#{{ $warehouse->id }}</td>
                        <td>{{ $warehouse->seccion }}</td>
                        <td>{{ $warehouse->nombre }}</td>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <a class="btn btn-primary" href="{{ route('menu2') }}" role="button"><img
                    src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

@extends('master2')
@section('title', 'Productos')
@section('index')
    <section class="titulos">
        <h1>Productos</h1>
    </section>
    <section class="contenedorTablas">
        <!-- TABLA -->
        <section class="tablaSection">
            <table class='tabla table table-bordered table-hover'>
                <thead>
                    <tr>
                        <th class="table-primary">ID</th>
                        <th class="table-primary">Nombre</th>
                        <th class="table-primary">Precio</th>
                        <th class="table-primary">Descripcion</th>
                        <th class="table-primary">Cantidad</th>
                        <th class="table-primary">Almacén</th>
                    </tr>
                </thead>
                @foreach ($productList as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->precio }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td>{{ $product->warehouse}}</td>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- MENU DE OPCIONES -->
        <div class="opcionesContenedor">
            <h2>Opciones</h2>
            <a class="btn btn-primary" href="{{ route('menu2') }}" role="button"><img src="{{asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

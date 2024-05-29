@extends('master')
@section('title', 'Productos')
@section('index')
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
                        <th class="table-primary centrado">Modificar / Borrar</th>
                    </tr>
                </thead>
                @foreach ($productList as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->precio }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td class='centrado'>
                            <form action ="{{ route('edit.productos', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary botonTabla"><img src="{{asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Modificar</button>
                            </form>
                            <form action ="{{ route('product.destroy', $product->id) }}" method="POST">
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
            <a class="btn btn-primary" href="{{ route('add.productos') }}" role="button"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir producto</a>
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img src="{{asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
        </div>
    </section>
@endsection

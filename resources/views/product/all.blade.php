@extends('master')
@section('index')
    <section class="contenedorTablas">
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
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->precio }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td class='centrado'>
                            <form action ="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-primary botonTabla" value="Modificar">
                            </form>
                            <form action ="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="botonTabla btn btn-primary" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <br>
        <a href="{{ route('add.productos') }}">Nuevo artículo</a>
        <br><br>
        <form action="{{ route('menu') }}" method="GET" class="centrado">
            @csrf
            <input type="submit" value="MENÚ PRINCIPAL">
        </form>
    </section>
@endsection

@extends('master')
@section('index')
<table class='sinbordes tabla'>
    <tr>
        <th>ID</th><th>Nombre</th><th>Precio</th><th>Descripcion</th><th>Cantidad</th><th class='sinbordes'></th><th class='sinbordes'></th>
    </tr>
@foreach ($productList as $product)
    <tr>
        <td class="conborde">{{$product->id}}</td>
        <td class="conborde">{{$product->nombre}}</td>
        <td class="conborde">{{$product->precio}}</td>
        <td class="conborde">{{$product->descripcion}}</td>
        <td class="conborde">{{$product->cantidad}}</td>
        <td class='sinbordes centrado'>
            <a href="">Modificar</a>
        </td>
        <td class='sinbordes'>
            <form action ="{{route('product.destroy', $product->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        </td>
    </tr>
@endforeach
</table><br>
<a href="{{route('productForm')}}">Nuevo artículo</a>

<br><br>
<form action="{{route('menu')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="MENÚ PRINCIPAL">
</form>
@endsection
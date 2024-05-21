@extends('master')
@section('index')
    <section class="contenedorFormulario">
                <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <br>
                <table class='sinbordes'>
                    <tr>
                        <td class='sinbordes'>Nombre del producto:</td>
                        <td class='sinbordes'><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td class='sinbordes'>Precio:</td>
                        <td class='sinbordes'><input type="text" name="description" required></td>
                    </tr>
                    <tr>
                        <td class='sinbordes'>Descripción:</td>
                        <td class='sinbordes'><input type="text" name="price" required></td>
                    </tr>
                    <tr>
                        <td class='sinbordes'>Stock:</td>
                        <td class='sinbordes'><input type="text" name="stock" required></td>
                    </tr>
                    <tr>
                        <td class='sinbordes'><a href="{{ route('product.index') }}">Volver al listado</a></td>
                        <td class='sinbordes'><input type="submit"></td>
                    </tr>
                </table>
            </form>

            <br><br>
            <form action = "{{ route('menu') }}" method="GET" class="centrado">
                @csrf
                <input type="submit" value="MENÚ PRINCIPAL">
            </form>
    </section>
@endsection

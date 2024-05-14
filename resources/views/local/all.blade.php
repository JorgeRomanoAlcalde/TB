@extends('master')
@section('index')
    <section class="contenedorTabla">
        <table class='sinbordes tabla'>
            <tr>
                <th>ID</th>
                <th>Ubicación</th>
                <th class='sinbordes'></th>
                <th class='sinbordes'></th>
            </tr>
            @foreach ($localList as $local)
                <tr>
                    <td class="conborde">{{ $local->id }}</td>
                    <td class="conborde">{{ $local->ubicacion }}</td>
                    <td class='sinbordes centrado'>
                        <a href="">Modificar</a>
                    </td>
                    <td class='sinbordes'>
                        <form action = "" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table><br>
        <a href="">Nuevo artículo</a>

        <br><br>
        <form action="{{ route('menu') }}" method="GET">
            @csrf
            <input type="submit" value="MENÚ PRINCIPAL">
        </form>
    </section>
@endsection


@extends('master')
@section('index')
    <section class="contenedorTablas">
        <section class="tablaSection">
            <table class='tabla table table-bordered table-hover'>
                <thead>
                    <tr>
                        <th class="table-primary">ID</th>
                        <th class="table-primary">Nickname</th>
                        <th class="table-primary">Email</th>
                        <th class="table-primary centrado">Modificar / Borrar</th>
                    </tr>
                </thead>
                @foreach ($userList as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nickname }}</td>
                        <td>{{ $user->email }}</td>
                        <td class='centrado'>
                            <form action ="" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-primary botonTabla" value="Modificar">
                            </form>
                            <form action ="" method="POST">
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

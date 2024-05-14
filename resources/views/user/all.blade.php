@extends('master')
@section('index')
<table class='sinbordes tabla'>
    <tr>
        <th>ID</th><th>Nickname</th><th>Email</th><th class='sinbordes'></th><th class='sinbordes'></th>
    </tr>
@foreach ($userList as $user)
    <tr>
        <td class="conborde">{{$user->id}}</td>
        <td class="conborde">{{$user->nickname}}</td>
        <td class="conborde">{{$user->email}}</td>
        <td class='sinbordes centrado'>
            <a href="">Modificar</a>
        </td>
        <td class='sinbordes'>
            <form action = "" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        </td>
    </tr>
@endforeach
</table><br>
<a href="">Nuevo artículo</a>

<br><br>
<form action="{{route('menu')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="MENÚ PRINCIPAL">
</form>
@endsection
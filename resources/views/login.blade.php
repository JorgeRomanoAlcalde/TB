@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <h1>Inicie sesión</h1>
        <form method="POST" action="{{ route('inicia-sesion') }}">
            @csrf
            <label for="username">Nombre de usuario:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Enviar">
        </form>
    </section>
@endsection

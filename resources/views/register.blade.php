@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <h1>Registrese</h1>
        <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <label for="nickname">Nombre de usuario:</label><br>
            <input type="text" id="nickname" name="nickname"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>

            <!--<input type="checkbox" id="admin" name="admin">
        <label for="admin">Usuario administrador</label><br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="surname">Apellidos:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="phone">Teléfono:</label><br>
        <input type="tel" id="phone" name="phone"><br>*/ }} -->

            <input type="submit" value="Enviar">
            <p>Ya tiene cuenta <a href="{{ route('login') }}">Inicie sesión</a></p>

        </form>
    </section>
@endsection

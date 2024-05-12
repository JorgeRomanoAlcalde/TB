@extends('master')
@section('index')
<h1>Inicie sesión</h1>
<form>
    <label for="username">Nombre de usuario:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Enviar">
</form>
@endsection
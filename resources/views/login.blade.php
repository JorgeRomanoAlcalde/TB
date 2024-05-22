@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            <img src="{{ asset('images\iconBlue.png') }}" alt="TRACE BETTER Icon">
            <h1>Inicie sesión</h1>
            <form method="POST" action="{{ route('inicia-sesion') }}">
                @csrf
                <div class="form-group">
                  <label for="nickname">Nombre de usuario</label>
                  <input type="text" id="nickname" class="form-control" placeholder="Introduzca su nombre de usuario" required>
                <div class="form-group" style="margin-bottom: 20px">
                  <label for="password">Contraseña</label>
                  <input type="password" id="password" class="form-control" placeholder="Introduzca su contraseña" required minlength="8">
                  <small id="emailHelp" class="form-text text-muted">La longitud minima es de 8 carácteres</small>
                </div>
                </div>
                <button type="submit" class="btn btn-primary botonFormulario">Iniciar Sesión</button>
                <p>¿No tiene cuenta? <a href="{{ route('registro') }}">Regístrese</a></p>
              </form>
        </div>
    </section>
@endsection

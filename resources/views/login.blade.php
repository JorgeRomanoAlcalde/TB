@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            <img src="{{ asset('images\iconBlue.png') }}" alt="TRACE BETTER Icon">
            <h1>Inicie sesión</h1>
            <form method="POST" action="{{ route('inicia-sesion') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de usuario</label>
                  <input type="email" class="form-control" placeholder="Introduce un nombre de usuario">
                <div class="form-group" style="margin-bottom: 20px">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" placeholder="Introduce una contraseña">
                  <small id="emailHelp" class="form-text text-muted">La longitud minima es de 8 carácteres</small>
                </div>
                </div>
                <button type="submit" class="btn btn-primary botonFormulario">Iniciar Sesión</button>
              </form>
        </div>
    </section>
@endsection

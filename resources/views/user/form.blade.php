@extends('master')
@section('index')
<section class="contenedorFormulario">
    <div class="formulario">
        <h1>Añadir asalariados</h1>
        <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <div class="form-group">
              <label for="nickname">Nombre de usuario</label>
              <input type="text"  name="nickname" id="nickname" class="form-control" placeholder="Introduzca un nombre de usuario" required>
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Introduzca un email" required>
            <div class="form-group" style="margin-bottom: 20px">
              <label for="password">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Introduzca una contraseña" required minlength="8">
              <small id="emailHelp" class="form-text text-muted">La longitud minima es de 8 carácteres</small>
            </div>
            </div>
            <button type="submit" class="btn btn-primary botonFormulario">Añadir Usuario</button>
                <p><a href="{{ route('all.users') }}">Ver listado de asalariados</a></p>
          </form>
    </div>
</section>
@endsection
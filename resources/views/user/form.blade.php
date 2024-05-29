@extends('master')
@section('title', 'Añadir Usuarios')
@section('index')
<section class="contenedorFormulario">
    <div class="formulario">
      @isset($user)
            <h1>Editar asalariados</h1>
            @else
            <h1>Añadir asalariados</h1>
            @endisset
            @isset($user)
                <br><br>
                <form action="{{ route('update.users', ['user' => $user->id]) }}" method="POST">
                    @method('PATCH')
                @else
                    <form action="{{ route('store.users') }}" method="POST">
                    @endisset
            @csrf
            <div class="form-group">
              <label for="nickname">Nombre de usuario</label>
              <input type="text"  name="nickname" id="nickname" class="form-control" placeholder="Introduzca un nombre de usuario" required value="{{ $user->nickname ?? '' }}">
              <label for="nombre">Nombre</label>
              <input type="text"  name="nombre" id="nombre" class="form-control" placeholder="Introduzca un nombre" required value="{{ $user->nombre ?? '' }}">
              <label for="apellidos">Apellidos</label>
              <input type="text"  name="apellidos" id="apellidos" class="form-control" placeholder="Introduzca los apellidos" required value="{{ $user->apellidos ?? '' }}">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Introduzca el email" required pattern="[a-zA-Z0-9_\.\+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-\.]+" value="{{ $user->email ?? '' }}">
              <label for="telefono">Teléfono</label>
              <input type="text"  name="telefono" id="telefono" class="form-control" placeholder="Introduzca el telefono" required pattern="\+?\(?\d{2,4}\)?[\d\s-]{3,}" value="{{ $user->telefono ?? '' }}">
              <label for="radios">Elija el tipo de usuario</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="admin" id="radio0" checked value="0">
                <label class="form-check-label" for="radio0">
                  Asalariado
                </label>
              </div>
              <div class="form-check" style="margin-bottom:15px">
                <input class="form-check-input" type="radio" name="admin" id="radio1" value="1">
                <label class="form-check-label" for="radio1">
                  Administrador
                </label>
              </div>
            <div class="form-group" style="margin-bottom: 20px">
              <label for="password">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Introduzca una contraseña" required minlength="8" style="margin-bottom: 0px">
              <small id="emailHelp" class="form-text text-muted">La longitud minima es de 8 carácteres</small>
            </div>
            </div>
            <button type="submit" class="btn btn-primary botonFormulario"><img src="{{ asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir Usuario</button>
                <p><a href="{{ route('all.users') }}">Ver listado de asalariados</a></p>
          </form>
    </div>
</section>
@endsection
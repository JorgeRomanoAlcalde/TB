@extends('master')
@section('title', 'Registro')
@section('index')
<section class="contenedorFormulario">
    <div class="formulario">
        <img src="{{ asset('images\iconBlue.png') }}" alt="TRACE BETTER Icon">
        <h1>Regístrese</h1>
        <form method="POST" action="{{ route('validar-registro') }}">
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
            <button type="submit" class="btn btn-primary botonFormulario"><img src="{{ asset('images\icons\register.png') }}" alt="icono añadir" class="iconos">Registrarse</button>
            <p>¿Ya tiene cuenta? <a href="{{ route('login') }}">Inicie sesión</a></p>
          </form>
    </div>
</section>

     <!--<section class="contenedorFormulario">
        <h1>Registrese</h1>
        <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <label for="nickname">Nombre de usuario:</label><br>
            <input type="text" id="nickname" name="nickname"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>

           <input type="checkbox" id="admin" name="admin">
        <label for="admin">Usuario administrador</label><br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="surname">Apellidos:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="phone">Teléfono:</label><br>
        <input type="tel" id="phone" name="phone"><br>*/ }} 

            <input type="submit" value="Enviar">
            <p>Ya tiene cuenta <a href="{{ route('login') }}">Inicie sesión</a></p>

        </form>
    </section>-->
@endsection

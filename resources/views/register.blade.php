@extends('master')
@section('index')
<section class="contenedorFormulario">
    <div class="formulario">
        <img src="{{ asset('images\iconBlue.png') }}" alt="TRACE BETTER Icon">
        <h1>Regístrese</h1>
        <form method="POST" action="{{ route('inicia-sesion') }}">
            @csrf
            <div class="form-group">
              <label for="nickname">Nombre de usuario</label>
              <input type="text" id="nickname" class="form-control" placeholder="Introduzca un nombre de usuario" required>
            <div class="form-group" style="margin-bottom: 20px">
              <label for="password">Contraseña</label>
              <input type="password" id="password" class="form-control" placeholder="Introduzca una contraseña" required minlength="8">
              <small id="emailHelp" class="form-text text-muted">La longitud minima es de 8 carácteres</small>
            </div>
            </div>
            <button type="submit" class="btn btn-primary botonFormulario">Registrarse</button>
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

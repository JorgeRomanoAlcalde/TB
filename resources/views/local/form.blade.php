@extends('master')
@section('index')
<section class="contenedorFormulario">
  <div class="formulario">
      @isset($local)
      <h1>Edita almacen</h1>
      @else
      <h1>Añade almacenes</h1>
      @endisset
      @isset($local)
          <br><br>
          <form action="{{ route('update.local', ['local' => $local->id]) }}" method="POST">
              @method('PATCH')
          @else
              <form action="{{ route('store.local') }}" method="POST">
              @endisset
              @csrf
              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control"
                      placeholder="Introduzca el nombre" required value="{{ $local->nombre ?? '' }}">
                  <label for="ubicacion">Ubicación</label>
                  <input type="text" name="ubicacion" id="ubicacion" class="form-control"
                      placeholder="Introduzca la ubicación" value="{{ $local->ubicacion ?? '' }}">
                  <br>
                  <label for="telefono">Teléfono</label>
                  <input type="text"  name="telefono" id="telefono" class="form-control" placeholder="Introduzca el telefono" required pattern="\+?\(?\d{2,4}\)?[\d\s-]{3,}" value="{{ $local->telefono ?? '' }}">
                  <label for="horario">Horario</label>
                  <input type="text" name="horario" id="horario" class="form-control"
                      placeholder="Introduzca el horario" value="{{ $local->horario ?? '' }}">
                  <br>
              </div>
              @isset($local)
              <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\edit.png') }}" alt="icono editar" class="iconos">Modificar local</button>
              @else
              <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir almacen</button>
              @endisset
              <p><a href="{{ route('local.index') }}">Ver información del local</a></p>
      </div>
      </form>
  </div>
</section>
@endsection
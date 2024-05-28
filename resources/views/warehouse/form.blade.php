@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            <h1>Añade almacenes</h1>
            <form method="POST" action="{{ route('validar-registro') }}">
                @csrf
                <div class="form-group">
                    <label for="seccion">Sección</label>
                    <input type="text" name="seccion" id="seccion" class="form-control"
                        placeholder="Introduzca numero de seccón" required>
                    <label for="nombre">Nombre de la sección</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        placeholder="Introduzca el nombre de la sección">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary botonFormulario">Añadir almacen</button>
                <p><a href="{{ route('all.warehouse') }}">Ver listado de almacenes</a></p>
        </div>
        </form>
        </div>
    </section>
@endsection

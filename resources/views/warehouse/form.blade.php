@extends('master2')
@section('title', 'Añadir almacenes')
@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            @isset($warehouse)
            <h1>Edita almacen</h1>
            @else
            <h1>Añade almacenes</h1>
            @endisset
            @isset($warehouse)
                <br><br>
                <form action="{{ route('update.warehouse', ['warehouse' => $warehouse->id]) }}" method="POST">
                    @method('PATCH')
                @else
                    <form action="{{ route('store.warehouse') }}" method="POST">
                    @endisset
                    @csrf
                    <div class="form-group">
                        <label for="seccion">Sección</label>
                        <input type="text" name="seccion" id="seccion" class="form-control"
                            placeholder="Introduzca numero de seccón" required value="{{ $warehouse->seccion ?? '' }}">
                        <label for="nombre">Nombre de la sección</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                            placeholder="Introduzca el nombre de la sección" value="{{ $warehouse->nombre ?? '' }}">
                        <br>
                    </div>
                    @isset($warehouse)
                    <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\edit.png') }}" alt="icono editar" class="iconos">Modificar almacen</button>
                    @else
                    <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir almacen</button>
                    @endisset
                    <p><a href="{{ route('all.warehouse') }}">Ver listado de almacenes</a></p>
            </div>
            </form>
        </div>
    </section>
@endsection

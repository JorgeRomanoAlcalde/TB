@extends('master')
@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            <h1>Añade productos</h1>
            <form method="POST" action="{{ route('validar-registro') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        placeholder="Introduzca el nombre del producto" required>
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control"
                        placeholder="Introduzca el precio" step="0.01" required min="0">
                    <label for="descripcion">Descripción</label>
                    <textarea rows="3" name="descripcion" id="descripcion" class="form-control"
                        placeholder="Introduzca un descripción del producto"></textarea>
                    <div class="form-group" style="margin-bottom: 20px">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control"
                            placeholder="Introduzca una cantidad" required min="0">
                        <small id="emailHelp" class="form-text text-muted">Número de unidades en stock</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary botonFormulario">Añadir producto</button>
                <p><a href="{{ route('all.productos') }}">Ver listado de productos</a></p>
            </form>
        </div>
    </section>
@endsection

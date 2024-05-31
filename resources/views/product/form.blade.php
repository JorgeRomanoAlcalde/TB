@extends('master2')
@section('title', 'Añadir productos')

@section('index')
    <section class="contenedorFormulario">
        <div class="formulario">
            @isset($producto)
            <h1>Edita producto</h1>
            @else
            <h1>Añade prodcutos</h1>
            @endisset
            @isset($producto)
                <br><br>
                <form action="{{ route('update.productos', ['product' => $producto->id]) }}" method="POST">
                    @method('PATCH')
                @else
                    <form action="{{ route('store.productos') }}" method="POST">
                    @endisset
                    @csrf
                    <div class="form-group" style="margin-bottom: 20px">
                        <label for="nombre">Nombre del producto</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                            placeholder="Introduzca el nombre del producto" value="{{ $producto->nombre ?? '' }}" required>
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control"
                            placeholder="Introduzca el precio" step="0.01" required min="0"
                            value="{{ $producto->precio ?? '' }}">
                        <label for="descripcion">Descripción</label>
                        <textarea rows="3" name="descripcion" id="descripcion" class="form-control"
                            placeholder="Introduzca un descripción del producto">{{ $producto->descripcion ?? '' }}</textarea>
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control"
                            placeholder="Introduzca una cantidad" required min="0"
                            value="{{ $producto->cantidad ?? '' }}">
                        <small id="emailHelp" class="form-text text-muted">Número de unidades en stock</small><br>
                        <label for="warehouse">Elija el almacen</label>
                        <select class="form-select" name="warehouse">
                            @foreach ($warehouses as $warehouse)
                                <option value="{{ $warehouse->seccion }} - {{ $warehouse->nombre }}" @if ($warehouse->id == ($product->warehouse ?? '')) selected @endif>
                                    {{ $warehouse->seccion }} - {{ $warehouse->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    @isset($producto)
                    <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\edit.png') }}" alt="icono editar" class="iconos">Modificar producto</button>
                    @else
                    <button type="submit" class="btn btn-primary botonFormulario"><img src="{{asset('images\icons\add.png') }}" alt="icono añadir" class="iconos">Añadir producto</button>
                    @endisset
                    <p><a href="{{ route('all.productos') }}">Ver listado de productos</a></p>
                </form>
        </div>
    </section>
@endsection

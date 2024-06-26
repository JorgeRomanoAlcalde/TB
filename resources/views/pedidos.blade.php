@extends('master2')
@section('title', 'Perfil')
@section('index')
<section class="titulos">
    <h1>Pedidos</h1>
</section>
    <section id="contenedorPedidos">
        <div id="topPedidos">
            <section class="tablaSectionPedidos">
                <table class='tabla table table-bordered table-hover tablaPedidos'>
                    <thead>
                        <tr>
                            <th class="table-primary">Producto</th>
                            <th class="table-primary">Precio</th>
                            <th class="table-primary"></th>
                        </tr>
                    </thead>
                    @isset($carrito)
                        @foreach ($carrito as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->precio }} €</td>
                                <td class='centrado'>
                                    <form action ="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary botonTabla"><img
                                                src="{{ asset('images\icons\delete.png') }}" alt="icono borrar"
                                                class="iconos">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endisset
                        <tr>
                            <td>TOTAL</td>
                            <td>€</td>
                            <td class="centrado">
                                <form action ="{{route('reset.pedidos')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger botonTabla"><img
                                        src="{{ asset('images\icons\delete.png') }}" alt="icono borrar"
                                        class="iconos">Reset</button>
                                </form>
                            </td>
                        </tr>
                    
                </table>
            </section>

            <!-- MENU DE OPCIONES -->
            <div class="opcionesContenedor">
                <h2>Opciones</h2>
                @isset($carrito)
                <a class="btn btn-primary" href="{{route('pdf.view')}}" role="button"><img src="{{ asset('images\icons\ver.png') }}"
                        alt="icono añadir" class="iconos">Ver factura</a>
                <a class="btn btn-primary" href="{{route('pdf.download')}}" role="button"><img src="{{ asset('images\icons\download.png') }}"
                        alt="icono añadir" class="iconos">Descargar factura</a>
                @endisset
                <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><img
                        src="{{ asset('images\icons\menu.png') }}" alt="icono menu" class="iconos">Menu principal</a>
            </div>
        </div>
        <div id="bottomPedidos">

            @php
            $numeros = range(1, 25);
            $columnas = 6;
            $total_numeros = count($productList);
            $contador = 0;
            @endphp
            
            <table id="tablaPedidos">
            @isset($productList)
                @for ($i = 0; $i < ceil($total_numeros / $columnas); $i++) 
                    <tr>
                    @foreach (range(1, $columnas) as $columna) 
                        @if ($contador < $total_numeros)
                            <td><form  action="{{ route('add.pedidos', $productList[$contador]->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary botonPedidos"><img
                                    src="{{ asset('images\icons\beer.png') }}" alt="icono beer" class="iconos">{{$productList[$contador]->nombre}}</button>
                            </form></td>
                            @php
                            $contador++;
                            @endphp
                        @else 
                            <td></td>
                        @endif
                    @endforeach
                    </tr>
                @endfor
            @else

            @endisset
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </table>
        </div>
    </section>
@endsection

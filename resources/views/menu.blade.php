@extends('master2')
@section('title', 'Menu')
@section('index')
    <section class="menuPrincipal">
        <h2>Bienvenido al menu de usuario </h2>
        <p>Desde esta pestaña podras gestionar toda la información de tu local y asalariados, además de la toma de pedidos a
            clientes</p>
        <div id="estructura">
            <div id="informacionUsuario">
                <h1>Información del usuario</h1>
            </div>
            <div id="menubotones">
                <div class="parejasbotones">
                    <form action ="{{ route('add.users') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img src="{{ asset('images\icons\add.png') }}" alt="icono borrar" class="iconos">Añadir asalariados</button>
                    </form>

                    <form action="{{ route('all.users') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img src="{{ asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Editar asalariados</button>
                    </form>
                </div>

                <div class="parejasbotones">
                    <form action="{{ route('add.productos') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img src="{{ asset('images\icons\add.png') }}" alt="icono borrar" class="iconos">Añadir productos</button>
                    </form>

                    <form action="{{ route('all.productos') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Editar
                            productos</button>
                    </form>
                </div>

                <div class="parejasbotones">
                    <form action="{{route('local.index')}}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\manage.png') }}" alt="icono borrar" class="iconos">Gestionar
                            local</button>
                    </form>

                    <form action="{{ route('all.warehouse') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\manage.png') }}" alt="icono borrar" class="iconos">Gestionar
                            almacen</button>
                    </form>
                </div>

                <form action="{{route('pedidos')}}" method="GET" id="botonUnico">
                    @csrf
                    <button type="submit" class="btn btn-primary botonMenu"><img src="{{ asset('images\icons\order.png') }}"
                            alt="icono borrar" class="iconos">Tomar pedido</button>
                </form>
            </div>
        </div>
    </section>
@endsection

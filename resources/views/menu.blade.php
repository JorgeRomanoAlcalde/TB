@extends('master2')
@section('title', 'Menu')
@section('index')
    <section class="menuPrincipal">
        <div id="bienvenida">
            <h2>Bienvenido al menu de usuario </h2>
            <p>Desde esta pestaña podras gestionar toda la información de su local, asalariados y existencias, además de la toma de pedidos a clientes.</p>
        </div>
        <div id="estructura">
            <div class="informacionUsuario">
                <div>
                    <h1>Información de usuario <img src="{{ asset('images\icons\perfilAzul.png') }}" alt="icono perfil" class="iconos" style="height: 35px"></h1>
                    <p><b>Nombre de usuario:</b> @auth{{ Auth::user()->nickname }}@endauth
                    </p>
                    <p><b>Nombre:</b> @auth{{ Auth::user()->nombre }}@endauth
                    </p>
                    <p><b>Apellidos:</b> @auth{{ Auth::user()->apellidos }}@endauth
                    </p>
                    @if (Auth::user()->admin == 0)
                        <p><b>Rol:</b> Asalariado</p>
                    @else
                        <p><b>Rol:</b> Administrador</p> 
                    @endif
                </div>
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

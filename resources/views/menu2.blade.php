@extends('master2')
@section('title', 'Menu')
@section('index')
    <section class="menuPrincipal">
        <div id="bienvenida">
            <h2>Bienvenido al menu de usuario </h2>
            <p>Desde esta pestaña podras ver información de su local, productos y almacenes, además de la toma de pedidos a clientes.</p>
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
                    <form action="{{route('pedidos')}}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img src="{{ asset('images\icons\order.png') }}"
                                alt="icono borrar" class="iconos">Tomar pedido</button>
                    </form>
                    <form action="{{ route('all.productosA') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\ver.png') }}" alt="icono borrar" class="iconos">Catálogo productos</button>
                    </form>
                </div>

                <div class="parejasbotones">
                    <form action="{{route('local.indexA')}}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\ver.png') }}" alt="icono borrar" class="iconos">Información local</button>
                    </form>

                    <form action="{{ route('all.warehouseA') }}" method="GET" class="centrado">
                        @csrf
                        <button type="submit" class="btn btn-primary botonMenu"><img
                                src="{{ asset('images\icons\ver.png') }}" alt="icono borrar" class="iconos">Catálogo almacenes</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
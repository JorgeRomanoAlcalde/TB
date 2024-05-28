@extends('master')
@section('index')
<h2>Bienvenido al menu de usuario </h2>
<p>Desde esta pestaña podras gestionar toda la información de tu local y asalariados, además de la toma de pedidos a clientes</p>
    <div id="estructura">
        <div id="informacionUsuario">
            <h1>Información del usuario</h1>
        </div>
        <div id="menubotones">
            <div class="parejasbotones">
                <form action ="{{route('add.users')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Añadir asalariados" class="botones">
                </form>
    
                <form action="{{route('all.users')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Editar asalariados" class="botones">
                </form>
            </div>
            
            <div class="parejasbotones">
                <form action="{{route('add.productos')}}" method="POST" class="centrado">
                    @csrf
                    <button type="submit" class="btn btn-primary botonTabla"><img src="{{ asset('images\icons\add.png') }}" alt="icono borrar" class="iconos">Añadir productos</button>
                </form>
    
                <form action="{{route('all.productos')}}" method="GET" class="centrado">
                    @csrf
                    <button type="submit" class="btn btn-primary botonTabla"><img src="{{ asset('images\icons\edit.png') }}" alt="icono borrar" class="iconos">Editar productos</button>
                </form>
            </div>

            <div class="parejasbotones">
                <form action="" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Gestionar local" class="botones">
                </form>
    
                <form action="{{route('all.warehouse')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Gestionar almacen" class="botones">
                </form>
            </div>

            <form action="" method="GET" id="botonUnico">
                @csrf
                <input type="submit" value="Tomar pedido" class="botones">
            </form>
        </div>
    </div>
@endsection

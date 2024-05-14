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
                <form action ="" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Añadir asalariados" class="botones">
                </form>
    
                <form action="´{{route('user.index')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Editar asalariados" class="botones">
                </form>
            </div>
            
            <div class="parejasbotones">
                <form action="{{route('product.store')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Añadir productos" class="botones">
                </form>
    
                <form action="{{route('product.index')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Editar productos" class="botones">
                </form>
            </div>

            <div class="parejasbotones">
                <form action="{{route('local.index')}}" method="GET" class="centrado">
                    @csrf
                    <input type="submit" value="Gestionar local" class="botones">
                </form>
    
                <form action="{{route('warehouse.index')}}" method="GET" class="centrado">
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

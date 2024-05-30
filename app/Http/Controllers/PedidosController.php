<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PedidosController extends Controller
{
    //

    public function index() {
        $productList = Product::all();
        $carrito = array();
        return view('pedidos',['carrito'=>$carrito,'productList'=>$productList]);
    }

    public function add($id, $carrito) {
        $product = Product::find($id);
        $productList = Product::all();
        $carrito= unserialize($carrito);
        array_push($carrito,$product);
        return view('pedidos',['carrito'=>$carrito ,'productList'=>$productList]);
    }
}

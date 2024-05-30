<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PedidosController extends Controller
{
    //

    public function index() {
        $productList = Product::all();
        return view('pedidos', ['productList'=>$productList]);
    }

    public function add($id) {
        $product = Product::find($id);
        $productList = Product::all();
        $carrito = array();
        array_push($carrito,$product);
        return view('pedidos', array('carrito' => $carrito),['productList'=>$productList]);
    }
}

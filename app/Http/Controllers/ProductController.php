<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        $productList = Product::all();
        return view('product.all', ['productList'=>$productList]);
    }

    public function create() {
        $products = Product::all();
        return view('product.form', array('products' => $products));
    }

    public function store(Request $r) {
        $p = new Product();
        $p->nombre=$r->nombre;
        $p->precio=$r->precio;
        $p->descripcion=$r->descripcion;
        $p->cantidad=$r->cantidad;

        $p->save();
        return redirect()->route('product.index');
    }

    public function update($id, Request $r) {
        $p = Product::find($id);
        $p->nombre = $r->nombre;
        $p->precio = $r->precio;
        $p->descripcion = $r->descripcion;
        $p->cantidad = $r->cantidad;

        $p->save();
        return redirect()->route('product.index');
    }

    public function destroy($id) {
        $p = Product::find($id);
        $p->delete();
        return redirect()->route('product.index');
    }
}

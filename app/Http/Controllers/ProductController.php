<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        $productList = Product::all();
        return view('product.all', ['productList'=>$productList]);
    }

    public function index2() {
        $productList = Product::all();
        return view('product.all2', ['productList'=>$productList]);
    }

    public function create() {
        $warehouses = Warehouse::all();
        return view('product.form', array('warehouses' => $warehouses));
    }

    public function store(Request $r) {
        $p = new Product();
        $p->nombre=$r->nombre;
        $p->precio=$r->precio;
        $p->descripcion=$r->descripcion;
        $p->cantidad=$r->cantidad;
        $p->warehouse=$r->warehouse;

        $p->save();
        return redirect()->route('all.productos');
    }

    public function edit($id) {
        $producto = Product::find($id);
        $warehouses = Warehouse::all();
        return view('product.form', array('producto' => $producto, 'warehouses' => $warehouses));
    }

    public function update($id, Request $r) {
        $p = Product::find($id);
        $p->nombre = $r->nombre;
        $p->precio = $r->precio;
        $p->descripcion = $r->descripcion;
        $p->warehouse_id= $r->warehouse;
        $p->cantidad = $r->cantidad;

        $p->save();
        return redirect()->route('all.productos');
    }

    public function destroy($id) {
        $p = Product::find($id);
        $p->delete();
        return redirect()->route('all.productos');
    }
}

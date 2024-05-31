<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function reset() {
        $productList = Product::all();
        $carrito = array();
        return view('pedidos', array('carrito' => $carrito),['productList'=>$productList]);
    }

    public function pdfview(){
        $productList = Product::all();
        $pdf = Pdf::loadView('pdf', compact('productList'));
        return $pdf->stream();
        //return $pdf->download('pdf');    

        //$pdf = PDF::loadview('pdf',['productList'=>$productList]);
        //return $pdf->stream();
        //return view('pdf', array('producto' => $product));
    }

    public function pdfdownload(){
        $productList = Product::all();
        $pdf = Pdf::loadView('pdf', compact('productList'));
        $fecha_y_hora = date("Y-m-d H:i:s");
        //return $pdf->stream();
        return $pdf->download($fecha_y_hora.'_ticket.pdf');    

        //$pdf = PDF::loadview('pdf',['productList'=>$productList]);
        //return $pdf->stream();
        //return view('pdf', array('producto' => $product));
    }
}

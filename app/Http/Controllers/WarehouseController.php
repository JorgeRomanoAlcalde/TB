<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index() {
        $warehouseList = Warehouse::all();
        return view('warehouse.all', ['warehouseList'=>$warehouseList]);
    }

    public function viewAdd() {
        return view('warehouse.form');
    }

    public function store(Request $r) {
        $w = new Warehouse();
        $w->seccion=$r->seccion;
        $w->nombre=$r->nombre;

        $w->save();
        return redirect()->route('all.warehouse');
    }

    public function edit($id) {
        $warehouse = Warehouse::find($id);
        return view('warehouse.form', array('warehouse' => $warehouse));
    }

    public function update($id, Request $r) {
        $w = Warehouse::find($id);
        $w->seccion=$r->seccion;
        $w->nombre=$r->nombre;

        $w->save();
        return redirect()->route('all.warehouse');
    }

    public function destroy($id) {
        $w = Warehouse::find($id);
        $w->delete();
        return redirect()->route('all.warehouse');
    }
}

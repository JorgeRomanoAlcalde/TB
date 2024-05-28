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
}

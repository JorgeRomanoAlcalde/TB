<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    
    public function index() {
        $localList = Local::all();
        return view('local.all', ['localList'=>$localList]);
    }
}

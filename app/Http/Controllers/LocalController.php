<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    
    public function index() {
        $id=1;
        $local = Local::find($id);
        return view('local.all', ['local'=>$local]);
    }

    public function index2() {
        $id=1;
        $local = Local::find($id);
        return view('local.all2', ['local'=>$local]);
    }

    public function edit($id) {
        $local = Local::find($id);
        return view('local.form', array('local' => $local));
    }

    public function update($id, Request $r) {
        $p = Local::find($id);
        $p->nombre = $r->nombre;
        $p->ubicacion = $r->ubicacion;
        $p->telefono = $r->telefono;
        $p->horario= $r->horario;

        $p->save();
        return redirect()->route('local.index');
    }
}

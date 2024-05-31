<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Local;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $userList = User::all();
        return view('user.all', ['userList'=>$userList]);
    }
    public function create() {
        $locals = Local::all();
        return view('user.form', array('locals' => $locals));
    }

    public function store(Request $r) {
        $u = new User();
        $u->nickname=$r->nickname;
        $u->nombre=$r->nombre;
        $u->apellidos=$r->apellidos;
        $u->email=$r->email;
        $u->telefono=$r->telefono;
        $u->admin=$r->admin;
        $u->password=$r->password;

        $u->save();
        return redirect()->route('all.users');
    }

    public function edit($id) {
        $user = User::find($id);
        $locals = Local::all();
        return view('user.form', array('user' => $user, 'locals' => $locals));
    }

    public function update($id, Request $r) {
        $u = User::find($id);
        $u->nickname=$r->nickname;
        $u->nombre=$r->nombre;
        $u->apellidos=$r->apellidos;
        $u->email=$r->email;
        $u->telefono=$r->telefono;
        $u->admin=$r->admin;
        $u->password=$r->password;

        $u->save();
        return redirect()->route('all.users');
    }

    public function destroy($id) {
        $u = User::find($id);
        $u->delete();
        return redirect()->route('all.users');
    }

    public function editProfile($id) {
        $user = User::find($id);
        return view('user.form', array('user' => $user));
    }
}

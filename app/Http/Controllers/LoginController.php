<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){

        $usuario = new User();

        $usuario->nickname = $request->nickname;
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->admin = $request->admin;
        $usuario->password = Hash::make($request->password);

        $usuario->save();
        Auth::login($usuario);

        return redirect(route('menu'));
    }

    public function login(Request $request){

        $credentials = [
            "nickname" => $request->nickname,
            "password" => $request->password,
        ];

        //$remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if($request->admin==0){
                return redirect(route('menu2'));
            }elseif($request->admin==1){
                return redirect(route('menu'));
            }
        //}else{
            //return redirect(route('login'));
        }
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('inicio'));
    }
}

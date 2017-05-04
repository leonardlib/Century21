<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $correo = $request->input("email");
        $password = $request->input("password");

        if (Auth::attempt(['email' => $correo, 'password' => $password])) {
            return redirect()->intended('/inicio');
        } else {
            return view('auth.login', ["errors" => ["Usuario o contraseña incorrecto"]]);
        }
    }

    public function index(Request $request) {
        return view('auth.login');
    }

    public function salir(Request $request) {
        Auth::logout();
        return redirect()->intended('/');
    }
}

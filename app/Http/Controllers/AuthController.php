<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('login');
    }

    public function login_action(Request $request){
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        dd($validator);
    }

    public function register(Request $request)
    {
        return view('register');
    }
    public function register_action(Request $request){
        /*
        Regras para registro
        - O usuario tem que ter um nome
        - O email te que ser unico na tabela users
        - Todos os campos sao REQUIRED 
        -Password tem que ter no minimo 6 caracteres
        */

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only('name', 'email', 'password');
        User::create(($data));  

        return redirect(route('login'));
        
    }
}

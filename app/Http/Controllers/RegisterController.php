<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.registrar');
    }

    public function store(Request $Request)
    {
        //VALIDAR DATOS ENVIADOS POR EL USUARIO
        $Request->request->add(["username" => Str::slug($Request->username)]);
        $this->validate($Request, [
            "name" => "required||max:30",
            "username" => "required|unique:users|min:3|max:20",
            "email" => "required|unique:users|max:40|email",
            "password" => "required|confirmed|min:6",
            "password_confirmation" => "required"
        ]);

        //SI TODO ESTÁ CORRECTO, SE REALIZA GUARDADO EN LA BASE DE DATOS EN TABLA DE USUARIOS
        User::create([
            "name" => $Request->name,
            "username" => $Request->username,
            "email" => $Request->email,
            "password" => Hash::make($Request->password)
        ]);
        
        //UNA VEZ GUARDADO SE REALIZA AUTENTICACIÓN DEL USUARIO
        auth()->attempt([
            "email" => $Request->email,
            "password" => $Request->password
        ]);

        //AL REALIZAR AUTENTICACIÓN, SE REDIRECCIONA A LA PÁGINA DE MUROS
        return redirect()->route('posts.index');
    }
}

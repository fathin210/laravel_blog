<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "email" => ["required","email"],
            "password" => ["required"]
        ]);


        // $credentials = ['email' => $request->email, 'password' => $request->password]
        // $credentials = $request->only("email","password");

        if(Auth::attempt($attributes)){
            return redirect("/")->with("success","You're now login");
        }

        throw ValidationException::withMessages([
                "email" => "Email mu salah"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "username" => ["required", "unique:users","alpha_num","min:8","max:25"],
            "email" => ["required", "email", "unique:users"],
            "name" => ["required", "string", "min:3"],
            "password" => ["required", "min:8"]
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        session()->flash("registered","selamat anda berhasil registrasi!");

        return redirect("/");
    }
}

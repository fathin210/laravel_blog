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
            "username" => ["required","alpha","min:8","max:25"],
            "email" => ["required", "email"],
            "name" => ["required", "string", "min:3"],
            "password" => ["required", "min:8"]
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect("/");
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(RegisterationRequest $request)
    {

        User::create($request->all());

        return redirect("/")->with("success","selamat anda berhasil registrasi!");
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view("home"));

Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('profile/{username}', function ($username) {
    return view("profile", ["name" => $username]);
});

Route::get('profile', function (Request $request) {
    $name = $request->name;
    return view("profile",compact("name"));
});

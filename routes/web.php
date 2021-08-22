<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view("home"));

Route::view('contact', 'contact');
Route::view('about', 'about');

Route::view('posts/first-post', 'posts.show');
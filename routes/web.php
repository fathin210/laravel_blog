<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class);

Route::get('/', HomeController::class);

Route::get('users', [UserController::class, 'index']);

Route::get('users/{user:username}', [UserController::class, 'show'])->name("users.show");
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// PUBLIC ROUTES

Route::get('/users/register', [UserController::class, 'register'])
    ->name('users.register');

Route::get('/users/login', [UserController::class, 'login'])
    ->name('users.login');

Route::post('/users/register', [UserController::class, 'signUp'])
    ->name('users.signUp');

Route::post('/users/signIn', [UserController::class, 'signIn'])
    ->name('users.signIn');

// PRIVATE ROUTES

Route::post('/users/logout', [UserController::class, 'logout'])
    ->name('users.logout');

Route::get('/', function () {
    return view('home');
})->name('home');
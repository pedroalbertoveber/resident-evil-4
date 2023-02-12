<?php

use App\Http\Controllers\CharactersController;
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

Route::get('/characters', [CharactersController::class, 'index'])
    ->name('characters.index');

Route::get('/', function () {
    return view('home');
})->name('home');

// PRIVATE ROUTES

Route::post('/users/logout', [UserController::class, 'logout'])
    ->name('users.logout');

Route::get('/characters/create', [CharactersController::class, 'create'])
->name('characters.create');


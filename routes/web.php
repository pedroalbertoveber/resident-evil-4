<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// PRIVATE ROUTES

Route::post('/users/logout', [UserController::class, 'logout'])
    ->name('users.logout');

Route::get('/characters/create', [CharactersController::class, 'create'])
    ->name('characters.create');

Route::post('/characters/store', [CharactersController::class, 'store'])
    ->name('characters.store');

Route::get('/characters/edit/{id}', [CharactersController::class, 'edit'])
    ->name('characters.edit');

Route::put('/characters/update/{id}', [CharactersController::class, 'update'])
    ->name('characters.update');

Route::delete('/characters/delete/{id}', [CharactersController::class, 'delete'])
    ->name('characters.delete');

Route::get('/areas/create', [AreasController::class, 'create'])
    ->name('areas.create');

Route::post('/areas/store', [AreasController::class, 'store'])
    ->name('areas.store');

Route::get('/areas/edit/{id}', [AreasController::class, 'edit'])
    ->name('areas.edit');

Route::put('/areas/update/{id}', [AreasController::class, 'update'])
    ->name('areas.update');

Route::delete('/areas/delete/{id}', [AreasController::class, 'delete'])
    ->name('areas.delete');



// PUBLIC ROUTES

Route::get('/areas', [AreasController::class, 'index'])
    ->name('areas.index');

Route::get('/areas/{id}', [AreasController::class, 'show'])
    ->name('areas.show');

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

Route::get('/characters/{id}', [CharactersController::class, 'show'])
    ->name('characters.show');





Route::get('/', function () {
    return view('home');
})->name('home');
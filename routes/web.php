<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\BossesController;
use App\Http\Controllers\ChaptersController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\EnemiesController;
use App\Http\Controllers\GunsController;
use App\Http\Controllers\TreasuresController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticator;
use Illuminate\Support\Facades\Route;

// PRIVATE ROUTES
Route::middleware(Autenticator::class)->group(function() {
    Route::post('/users/logout', [UserController::class, 'logout'])
    ->name('users.logout');

    // CHARACTERS
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

    // AREAS
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

    // CHAPTERS
    Route::get('/chapters/edit/{id}', [ChaptersController::class, 'edit'])
        ->name('chapters.edit');

    Route::get('/chapters/create', [ChaptersController::class, 'create'])
        ->name('chapters.create');

    Route::post('/chapters/store', [ChaptersController::class, 'store'])
        ->name('chapters.store');

    Route::put('/chapters/update/{id}', [ChaptersController::class, 'update'])
        ->name('chapters.update');

    Route::delete('/chapters/delete/{id}', [ChaptersController::class, 'delete'])
        ->name('chapters.delete');
    
    // TREASURES
    Route::get('/treasures/create', [TreasuresController::class, 'create'])
        ->name('treasures.create');

    Route::get('/treasures/edit/{id}', [TreasuresController::class, 'edit'])
        ->name('treasures.edit');

    Route::post('/treasures/store', [TreasuresController::class, 'store'])
        ->name('treasures.store');

    Route::put('/treasures/update/{id}', [TreasuresController::class, 'update'])
        ->name('treasures.update');

    Route::delete('/treasures/delete/{id}', [TreasuresController::class, 'delete'])
        ->name('treasures.delete');

    
    // WEAPONS
    Route::get('/guns', [GunsController::class, 'index'])
        ->name('guns.index');

    Route::get('/guns/edit/{id}', [GunsController::class, 'edit'])
        ->name('guns.edit');

    Route::get('/guns/create', [GunsController::class, 'create'])
        ->name('guns.create');

    Route::get('/guns/{id}', [GunsController::class, 'show'])
        ->name('guns.show');

    Route::put('/guns/update/{id}', [GunsController::class, 'update'])
        ->name('guns.update');

    Route::post('/guns/store', [GunsController::class, 'store'])
        ->name('guns.store');
        
    Route::delete('/guns/delete/{id}', [GunsController::class, 'delete'])
        ->name('guns.delete');
    
    // BOSSES
    Route::get('/bosses/create', [BossesController::class, 'create'])
        ->name('bosses.create');

    Route::get('/bosses/edit/{id}', [BossesController::class, 'edit'])
        ->name('bosses.edit');

    Route::put('/bosses/update/{id}', [BossesController::class, 'update'])
        ->name('bosses.update');

    Route::post('/bosses/store', [BossesController::class, 'store'])
        ->name('bosses.store');

    Route::delete('/bosses/delete/{id}', [BossesController::class, 'delete'])
        ->name('bosses.delete');
    
    // ENEMIES
    Route::get('/enemies/create', [EnemiesController::class, 'create'])
        ->name('enemies.create');

    Route::get('/enemies/edit/{id}', [EnemiesController::class, 'edit'])
        ->name('enemies.edit');

    Route::put('/enemies/update/{id}', [EnemiesController::class, 'update'])
        ->name('enemies.update');

    Route::post('/enemies/store', [EnemiesController::class, 'store'])
        ->name('enemies.store');

    Route::delete('/enemies/delete/{id}', [EnemiesController::class, 'delete'])
        ->name('enemies.delete');
});

// AUTH ROUTES
Route::get('/users/register', [UserController::class, 'register'])
    ->name('users.register');

Route::get('/users/login', [UserController::class, 'login'])
    ->name('login');

Route::post('/users/register', [UserController::class, 'signUp'])
    ->name('users.signUp');

Route::post('/users/signIn', [UserController::class, 'signIn'])
    ->name('users.signIn');

// PUBLIC ROUTES
Route::get('/areas', [AreasController::class, 'index'])
    ->name('areas.index');

Route::get('/areas/{id}', [AreasController::class, 'show'])
    ->name('areas.show');

Route::get('/characters', [CharactersController::class, 'index'])
    ->name('characters.index');

Route::get('/characters/{id}', [CharactersController::class, 'show'])
    ->name('characters.show');

Route::get('/treasures', [TreasuresController::class, 'index'])
    ->name('treasures.index');

Route::get('/treasures/{id}', [TreasuresController::class, 'show'])
    ->name('treasures.show');

Route::get('/', [ChaptersController::class, 'index'])
    ->name('home');

Route::get('/chapters/{id}', [ChaptersController::class, 'show'])
    ->name('chapters.show');

Route::get('/bosses/{id}', [BossesController::class, 'show'])
    ->name('bosses.show');


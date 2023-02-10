<?php

namespace App\Providers;

use App\Http\Repositories\AuthRepository;
use App\Http\Repositories\EloquentAuthRepository;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    public array $bindings = [
        AuthRepository::class => EloquentAuthRepository::class,
    ];
}

<?php

namespace App\Providers;

use App\Http\Repositories\EloquentGunRepository;
use App\Http\Repositories\GunRepository;
use Illuminate\Support\ServiceProvider;

class GunProvider extends ServiceProvider
{
    public array $bindings = [
        GunRepository::class => EloquentGunRepository::class,
    ];
}

<?php

namespace App\Providers;

use App\Http\Repositories\AreaRepository;
use App\Http\Repositories\EloquentAreaRepository;
use Illuminate\Support\ServiceProvider;

class AreaProvider extends ServiceProvider
{
    public array $bindings = [
        AreaRepository::class => EloquentAreaRepository::class,
    ];
}

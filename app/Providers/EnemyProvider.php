<?php

namespace App\Providers;

use App\Http\Repositories\EloquentEnemyRepository;
use App\Http\Repositories\EnemyRepository;
use Illuminate\Support\ServiceProvider;

class EnemyProvider extends ServiceProvider
{
    public array $bindings = [
        EnemyRepository::class => EloquentEnemyRepository::class,
    ];
}

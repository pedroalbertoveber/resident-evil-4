<?php

namespace App\Providers;

use App\Http\Repositories\EloquentTreasureRepository;
use App\Http\Repositories\TreasureRepository;
use Illuminate\Support\ServiceProvider;

class TreasureProvider extends ServiceProvider
{
    public array $bindings = [
        TreasureRepository::class => EloquentTreasureRepository::class,
    ];
}

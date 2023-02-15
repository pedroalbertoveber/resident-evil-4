<?php

namespace App\Providers;

use App\Http\Repositories\BossRepository;
use App\Http\Repositories\EloquentBossRepository;
use Illuminate\Support\ServiceProvider;

class BossProvider extends ServiceProvider
{
    public array $bindings = [
        BossRepository::class => EloquentBossRepository::class,
    ];
}

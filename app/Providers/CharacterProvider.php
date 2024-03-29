<?php

namespace App\Providers;

use App\Http\Repositories\EloquentCharacterRepository;
use App\Http\Repositories\CharacterRepository;
use Illuminate\Support\ServiceProvider;

class CharacterProvider extends ServiceProvider
{
    public array $bindings = [
        CharacterRepository::class => EloquentCharacterRepository::class,
    ];
}

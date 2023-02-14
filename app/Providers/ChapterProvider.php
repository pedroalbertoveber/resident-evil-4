<?php

namespace App\Providers;

use App\Http\Repositories\ChapterRepository;
use App\Http\Repositories\EloquentChapterRepository;
use Illuminate\Support\ServiceProvider;

class ChapterProvider extends ServiceProvider
{
    public array $bindings = [
        ChapterRepository::class => EloquentChapterRepository::class,
    ];
}

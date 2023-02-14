<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasure extends Model
{
    use HasFactory;

    protected $casts = [
        'areas' => 'array',
    ];

    protected $fillable = [
        'image',
        'name',
        'areas',
        'rarity',
        'price',
    ];
}

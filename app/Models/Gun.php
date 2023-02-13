<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'type',
        'action',
        'ammunition',
        'fire_power',
        'fire_speed',
        'reload_speed',
        'capacity',
        'initial_price',
    ];
}

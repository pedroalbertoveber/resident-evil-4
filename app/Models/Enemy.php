<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    use HasFactory;

    protected $table = 'enemies';

    protected $fillable = [
        'image',
        'name',
        'difficulty',
    ];    

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'area_enemy', 'enemy_id', 'area_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;
use App\Models\Boss;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'area_id');
    }

    public function bosses()
    {
        return $this->hasMany(Boss::class, 'area_id');
    }

}

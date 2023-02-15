<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Boss extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'area_id',
        'description',
    ];

    public function bosses()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}

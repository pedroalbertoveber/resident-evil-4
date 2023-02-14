<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'chapter',
        'sub_chapter',
        'area_id',
        'description',
    ];

    public function areas()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'image';
    protected $fillable = ['image_name'];

    public function animalDetail()
    {
        return $this->belongsTo(AnimalDetail::class,'detail_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table ='area';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_area','animal_detail_id', 'area_id');
    }
}

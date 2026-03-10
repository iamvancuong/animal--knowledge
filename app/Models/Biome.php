<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biome extends Model
{
    use HasFactory;

    protected $table ='biome';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_biome','animal_detail_id', 'biome_id');
    }
}

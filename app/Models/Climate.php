<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{
    use HasFactory;

    protected $table ='climate_zone';

    const TROPICAL = 1;
    const ARID = 2;
    const TEMPERATE = 3;
    const COLD = 4;
    const POLAR = 5;

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_climate','animal_detail_id', 'climate_id');
    }
}

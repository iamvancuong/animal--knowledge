<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocean extends Model
{
    use HasFactory;

    protected $table ='ocean';

    const PACIFIC = 1;
    const INDIAN = 2;
    const ATLANTIC = 3;
    const ARCTIC = 4;

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_ocean','animal_detail_id', 'ocean_id');
    }
}

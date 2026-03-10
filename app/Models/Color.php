<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table ='color';

    const GREEN = 1;
    const BLUE = 2;
    const RED = 3;
    const YELLOW = 4;
    const ORANGE = 5;
    const BROWN = 6;
    const WHITE = 7;
    const BLACK = 8;
    const GRAY = 9;
    const PURPLE = 10;

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_color','animal_detail_id', 'color_id');
    }
}

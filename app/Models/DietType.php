<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietType extends Model
{
    use HasFactory;
    protected $table ='diet_type';
    const HERBIVOROUS = 1;
    const CARNIVORES = 2;
    const OMNIVORES = 3;
    const FOLIVORES = 4;
    const INSECTIVORES = 5;
    
}

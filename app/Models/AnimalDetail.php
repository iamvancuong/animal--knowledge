<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalDetail extends Model
{
    use HasFactory;
    protected $table = 'animal_detail';
    protected $fillable = 
    ['animal_name','animal_scientific_name','animal_description','appearance_description',
    'geography_description','habit_lifestyle_description','diet_nutrition_description',
    'mating_habit_description','population_description','fun_fact','animal_length',
    'animal_height','animal_weight','population_size','avg_lifespan','animal_sound','animal_video'];

    public function areas()
    {
        return $this->belongsToMany(Area::class,'animal_between_area','animal_detail_id', 'area_id');
    }

    public function nations()
    {
        return $this->belongsToMany(Nation::class,'animal_between_nation','animal_detail_id', 'nation_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,'animal_between_color','animal_detail_id', 'color_id');
    }

    public function biomes()
    {
        return $this->belongsToMany(Biome::class,'animal_between_biome','animal_detail_id', 'biome_id');
    }

    public function climates()
    {
        return $this->belongsToMany(Climate::class,'animal_between_climate','animal_detail_id', 'climate_id');
    }

    public function oceans()
    {
        return $this->belongsToMany(Ocean::class,'animal_between_ocean','animal_detail_id', 'ocean_id');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class,'animal_between_topic','animal_detail_id', 'topic_id');
    }

    public function images()
    {
        return $this->hasOne(Image::class,'detail_id');
    }

    public function multiImages()
    {
        return $this->hasMany(Image::class,'detail_id');
    }

    public function status()
    {
        return $this->belongsTo(ConservationStatus::class,'conservation_status_id');
    }

    public function diet()
    {
        return $this->belongsTo(DietType::class,'diet_type_id');
    }

    public function trend()
    {
        return $this->belongsTo(PopulationTrending::class,'population_trending_id');
    }

    public function activityTime()
    {
        return $this->belongsTo(ActivityTime::class,'activity_time_id');
    }
}

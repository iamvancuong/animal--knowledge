<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_detail', function (Blueprint $table) {
            $table->id();
            $table->string('animal_name');
            $table->string('animal_scientific_name');
            $table->text('animal_description');
            $table->text('appearance_description');
            $table->text('geography_description');
            $table->text('habit_lifestyle_description');
            $table->text('diet_nutrition_description');
            $table->text('mating_habit_description');
            $table->string('mating_behavior');
            $table->string('reproduction_season');
            $table->string('pregnancy_duration');
            $table->string('baby_carrying');
            $table->string('independent_age');
            $table->text('population_threat');
            $table->text('population_number');
            $table->text('ecological_niche')->nullable();
            $table->text('fun_fact')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('animal_length');
            $table->string('animal_weight');
            $table->string('animal_swing')->nullable();
            $table->string('population_size');
            $table->string('avg_lifespan');
            $table->string('animal_sound')->nullable();
            $table->string('animal_video');
            $table->unsignedBigInteger('conservation_status_id');
            $table->foreign('conservation_status_id')->references('id')->on('conservation_status')->onDelete('cascade');
            $table->unsignedBigInteger('activity_time_id');
            $table->foreign('activity_time_id')->references('id')->on('activity_time')->onDelete('cascade');
            $table->unsignedBigInteger('diet_type_id');
            $table->foreign('diet_type_id')->references('id')->on('diet_type')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->unsignedBigInteger('population_trending_id');
            $table->foreign('population_trending_id')->references('id')->on('population_trending')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_detail');
    }
};

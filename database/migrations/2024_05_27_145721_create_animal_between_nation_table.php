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
        Schema::create('animal_between_nation', function (Blueprint $table) {
            $table->unsignedBigInteger('animal_detail_id');
            $table->foreign('animal_detail_id')->references('id')->on('animal_detail')->onDelete('cascade');
            $table->unsignedBigInteger('nation_id');
            $table->foreign('nation_id')->references('id')->on('nation')->onDelete('cascade');
            $table->unique(['animal_detail_id', 'nation_id']);
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
        Schema::dropIfExists('animal_between_nation');
    }
};

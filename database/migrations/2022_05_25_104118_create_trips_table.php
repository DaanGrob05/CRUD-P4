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
        Schema::create('trips', function (Blueprint $table) {
            $table->id('trip_id');
            $table->string('trip_name');
            $table->string('start_location');
            $table->tinyInteger('type_of_trip');
            // type_of_trip = 0 = one-way, type_of_trip = 1 = round-trip
            $table->string('destination');
            $table->date('startDate');
            $table->date('endDate');
            $table->double('price', 8, 2);
            $table->text('small_description');
            $table->text('full_description');
            $table->text('hotel');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('trips');
    }
};

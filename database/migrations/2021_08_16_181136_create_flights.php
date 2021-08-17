<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code_flight',9);
            $table->foreignId('airport_origin',7)->constrained();
            $table->foreignId('airport_destiny',7)->constrained();
            $table->string('boarding_time',20);
            $table->string('departure_time',20);
            $table->foreignId('airlinecompanie_id')->constrained();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}

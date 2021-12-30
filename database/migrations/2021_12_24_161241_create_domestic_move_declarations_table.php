<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomesticMoveDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domestic_move_declarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle');
            $table->string('flightCode');
            $table->string('start');
            $table->string('departure');
            $table->string('end');
            $table->string('destination');
            $table->string('vehicleCode');
            $table->string('seat');
            $table->string('placeTravelTo');
            $table->string('sign');
            $table->string('hasPatient');
            $table->string('hasFromSickCountry');
            $table->string('hasSick');
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
        Schema::dropIfExists('domestic_move_declarations');
    }
}

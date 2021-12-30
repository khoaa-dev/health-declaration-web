<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomesticGuestDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domestic_guest_declarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idUser');
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
        Schema::dropIfExists('domestic_guest_declarations');
    }
}

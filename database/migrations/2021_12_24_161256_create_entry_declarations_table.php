<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_declarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idUser');
            $table->string('object');
            $table->integer('gateId');
            $table->string('tralvelInfor');
            $table->integer('TransportationNo');
            $table->integer('SeatNo');
            $table->string('DepartureDate');
            $table->string('ImmigrationDate');
            $table->string('CountryOfDeparture');
            $table->string('ProvinceOfDeparture');
            $table->string('CountryOfDestination');
            $table->string('ProvinceOfDestination');
            $table->string('PlaceHasBeenTo');
            $table->string('QuarantinePlace');
            $table->integer('QuarantineWardId');
            $table->string('ContactAddress');
            $table->integer('ContactWardId');
            $table->string('SymptomFever');
            $table->string('SymptomCough');
            $table->string('SymptomDifficutlyOfBreathing');
            $table->string('SymptomSoreThroat');
            $table->string('SymptomVomiting');
            $table->string('SymptomDiarrhea');
            $table->string('SymptomSkinHeamorrhage');
            $table->string('SymptomRash');
            $table->string('ListOfVaccinOrBiological');
            $table->string('HOEVisitPultyFarm');
            $table->string('HOECareForASickPerson');
            $table->string('QuanrantineFacility');
            $table->string('CertificateRecoveryCovid');
            $table->string('TestCovidDate');
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
        Schema::dropIfExists('entry_declarations');
    }
}

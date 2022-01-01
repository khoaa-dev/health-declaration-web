<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticDeclarations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_declarations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sl_diChuyenNoiDia');
            $table->integer('sl_nguoiNhapCanh');
            $table->integer('sl_khaiBaoToanDan');
            $table->date('ngay');
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
        Schema::dropIfExists('statistic_declarations');
    }
}

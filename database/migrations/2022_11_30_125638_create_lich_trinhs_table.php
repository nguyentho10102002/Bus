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
        Schema::create('lich_trinhs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_xe');
            $table->integer('id_chuyen_xe');
            $table->integer('thoi_gian_chay_chinh');
            $table->integer('thoi_gian_nghi_chan');
            $table->dateTime('thoi_gian_bat_dau');
            $table->dateTime('thoi_gian_ket_thuc');
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
        Schema::dropIfExists('lich_trinhs');
    }
};

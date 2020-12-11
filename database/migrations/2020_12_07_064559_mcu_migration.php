<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class McuMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('mcu', function (Blueprint $table) {
            $table->increments('id_mcu');
            $table->String('nama_petugas_hb');
            $table->String('nama_petugas_paraf');
            $table->integer('id_pendonor')->unsigned();
            $table->foreign('id_pendonor')->references('id_pendonor')->on('pendonor');
            $table->integer('nilai_hb');
            $table->integer('ht');
            $table->String('tekanan_darah');
            $table->integer('bb');
            $table->String('no_kantongdarah');
            $table->String('donorke');
            $table->String('goldar');
            $table->String('status');
            $table->softDeletes();
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
        Schema::dropIfExists('mcu');
    }
}

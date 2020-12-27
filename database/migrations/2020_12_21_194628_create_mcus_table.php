<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd_registrasi');
            $table->string('nama_petugas_hb');
            $table->string('nama_petugas_paraf');
            $table->date('tgl_mcu');
            $table->string('lokasi_mcu');
            $table->string('bb');
            $table->string('goldar');
            $table->string('nilai_hb');
            $table->string('ht');
            $table->string('tekanan_darah');
            $table->string('status_mcu');
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
        Schema::dropIfExists('mcus');
    }
}

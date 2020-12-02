<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MintaDarahMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_darah', function (Blueprint $table) {
            $table->increments('id_darah');
            $table->String('nama_rs');
            $table->String('nama_pasien');
            $table->String('nama_petugas');
            $table->date('tgl');
            $table->String('jenis_darah');
            $table->String('gol_darah');
            $table->String('rhesus');
            $table->integer('jumlah');
            $table->String('file');
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
        Schema::dropIfExists('permintaan_darah');
    }
}

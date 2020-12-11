<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PendonorMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pendonor', function (Blueprint $table) {
            $table->increments('id_pendonor');
            $table->String('nama_pendonor');
            $table->String('alamat');
            $table->String('notelp');
            $table->String('gol_darah');
            $table->date('tgl_kembalidonor');
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
         Schema::dropIfExists('pendonor');
    }
}

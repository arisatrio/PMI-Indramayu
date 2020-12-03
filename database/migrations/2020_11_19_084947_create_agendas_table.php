<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_institusi');
            $table->string('alamat_institusi');
            $table->string('nama_kegiatan');
            $table->date('tgl_kegiatan');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('alamat_kegiatan');
            $table->char('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('indonesia_districts');
            $table->char('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id')->on('indonesia_villages');
            $table->string('nama_koordinator');
            $table->string('notlp_koordinator');
            $table->string('jml_pendonor');
            $table->string('surat');
            $table->string('poster');
            $table->string('status');
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
        Schema::dropIfExists('agendas');
    }
}

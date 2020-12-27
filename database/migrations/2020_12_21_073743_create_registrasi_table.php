<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->string('kd_registrasi');
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->char('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('indonesia_districts');
            $table->char('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id')->on('indonesia_villages');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('nohp');
            $table->date('tanggal_donor');
            $table->string('jam_donor');
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
        Schema::dropIfExists('registrasi');
    }
}

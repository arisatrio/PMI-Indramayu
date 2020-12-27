<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mcu extends Model
{
    protected $table = 'mcus';

    protected $fillable = [
        'id_registrasi',
        'nama_petugas_hb',
        'nama_petugas_paraf',
        'tgl_mcu',
        'lokasi_mcu',
        'bb',
        'goldar',
        'nilai_hb',
        'ht',
        'tekanan_darah',
        'status_mcu',
    ];

    public function registrasi(){
        return $this->belongsTo('App\Models\Registrasi', 'id_registrasi');
    }

    public function pendonor(){
        return $this->hasOne('App\Models\Pendonor', 'mcu_id');
    }
}
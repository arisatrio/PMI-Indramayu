<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi';
    protected $dates = ['tanggal_lahir', 'tanggal_donor', 'created_at'];

    protected $fillable = [
        'kd_registrasi',
        'nik',
        'nama',
        'alamat',
        'id_kecamatan',
        'id_kelurahan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'status',
        'nohp',
        'tanggal_donor',
        'jam_donor'
    ];

    public function pendonor(){
        return $this->hasOne('App\Models\Pendonor', 'registrasi_id');
    }

    public function mcu(){
        return $this->hasOne('App\Models\Mcu', 'id_registrasi');
    }

    
    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }
}

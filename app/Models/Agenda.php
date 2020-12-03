<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $dates = ['tgl_kegiatan'];
    protected $fillable = [
        'nama_institusi',
        'alamat_institusi',    
        'nama_kegiatan',
        'tgl_kegiatan',
        'jam_mulai',
        'jam_selesai',
        'alamat_kegiatan',
        'id_kecamatan',
        'id_kelurahan',
        'nama_koordinator',
        'notlp_koordinator',
        'jml_pendonor',
        'surat',
        'poster',
        'status'
    ];

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }

}

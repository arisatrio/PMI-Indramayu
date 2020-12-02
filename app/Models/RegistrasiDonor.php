<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class RegistrasiDonor extends Model
{
    protected $table = "registrasi_donor";
    protected $fillable = [
        'nik', 
        'nama',
        'alamat',
        'kelurahan', 
        'kecamatan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'status',
        'nohp',

    ];

    public function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d M');
    }
}

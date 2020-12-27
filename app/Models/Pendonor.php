<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    protected $tables = 'pendonors';

    protected $fillable = [
        'registrasi_id',
        'mcu_id',
        'no_kantong_darah',
        'status_donor'
    ];

    public function mcu(){
        return $this->belongsTo('App\Models\Mcu', 'mcu_id');
    }

    public function registrasi(){
        return $this->belongsTo('App\Models\Registrasi', 'registrasi_id');
    }
}

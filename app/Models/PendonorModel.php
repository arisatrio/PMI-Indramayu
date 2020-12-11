<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class PendonorModel extends Model
{
    //use HasFactory;
    protected $table	 ="pendonor";
	protected $primaryKey="id_pendonor";
	protected $fillable	 =['nama_pendonor','alamat','notelp','gol_darah','tgl_kembalidonor','status'
	];

	 public function mcu(){
        return $this->BelongsTo('App\McuModel', 'id_mcu');
    }

    public function riwayatDonor(){
        return $this->BelongsTo('App\riwayatDonorModel', 'id_riwayat');
    }
	
	public function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d M');
    }
}

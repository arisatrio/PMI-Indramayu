<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class McuModel extends Model
{
   // use HasFactory;
	 protected $table	 ="mcu";
	protected $primaryKey="id_mcu";
	protected $fillable	 =['nama_petugas_hb','nama_petugas_paraf','id_pendonor','nilai_hb','ht','tekanan_darah','bb','no_kantongdarah','donorke','goldar','tgl_donor','status'];

	 public function pendonor(){
        return $this->BelongsTo('App\PendonorModel', 'id_pendonor');
    }

    public function riwayatDonor(){
        return $this->BelongsTo('App\riwayatDonorModel', 'id_riwayat');
    }
	
	public function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d M');
    }
}

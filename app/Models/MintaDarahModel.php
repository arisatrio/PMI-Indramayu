<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class MintaDarahModel extends Model
{
    //use HasFactory;


    protected $table="permintaan_darah";
	protected $primaryKey="id_darah";
	protected $fillable=['nama_rs','nama_pasien','nama_petugas','tgl','jenis_darah','gol_darah','rhesus','jumlah','file'];

	public function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d M');
    }
}

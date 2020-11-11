<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Komunikasi extends Model
{
    use SoftDeletes;
    
    protected $table = 'komunikasis';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nama',
        'isi_komunikasi',
        'isi_balasan'
    ];

    public function getCreatedAtAttribute(){
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d M');
    }
}
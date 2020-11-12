<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $table = "beritas";
    protected $fillable = [
        'judul_berita', 
        'slug', 
        'gambar_berita', 
        'isi_berita',
        'penulis_id'
    ];

    public function penulis(){
        return $this->belongsTo('users', 'penulis_id');
    }
}

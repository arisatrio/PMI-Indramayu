<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "indonesia_districts";

    public function agenda(){
        return $this->hasMany('App\Models\Agenda');
    }
}

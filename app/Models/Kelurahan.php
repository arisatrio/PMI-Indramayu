<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = "indonesia_villages";

    public function agenda(){
        return $this->hasMany('App\Models\Agenda');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    public $timestamps = false;

    public function oferta()
    {
        return $this->belongsTo('app\Oferta');
    }

    public function data()
    {
        return $this->hasMany('app\Data');
    }

    
}

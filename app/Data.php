<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = false;

    public function Calendario()
    {
        return $this->belongsTo('app\Calendario');
    }

    public function horario()
    {
        return $this->belongsTo('app\Horario');
    }
}

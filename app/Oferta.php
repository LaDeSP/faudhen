<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{

    public $timestamps = false;
    protected $dateFormat = "d/m/y";

    public function calendario()
    {
        return $this->hasOne('app\Calendario');
    }

    public function disciplinaOferecida()
    {
        return $this->hasMany('app\DisciplinaOferecida');
    }

}

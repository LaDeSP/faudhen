<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{

    public $timestamps = false;

    public function ensalamentoHorario()
    {
        return $this->hasMany('app\EnsalamentoHorario');
    }

    public function data()
    {
        return $this->hasMany('app\Data');
    }
}

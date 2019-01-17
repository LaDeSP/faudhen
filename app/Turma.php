<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    public $timestamps = false;

    public function disciplinaOferecida()
    {
        return $this->belongsTo('app\DisciplinaOferecida');
    }

    public function ensalamento()
    {
        return $this->hasMany('app\Ensalamento');
    }

}

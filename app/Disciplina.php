<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $timestamps = false;

    public function matriz()
    {
        return $this->hasMany('app\Matriz');
    } 

    public function disciplinaOferecida()
    {
        return $this->hasMany('app\DisciplinaOferecida');
    }
}

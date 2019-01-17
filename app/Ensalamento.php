<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensalamento extends Model
{

    public $timestamp = false;

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function sala()
    {
        return $this->belongsTo('app\Sala');
    }

    public function turma()
    {
        return $this->belongsTo('app\Turma');
    }

    public function EnsalamentoHorario()
    {
        return $this->hasMany('app\EnsalamentoHorario');
    }
    
}

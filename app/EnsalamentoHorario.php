<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnsalamentoHorario extends Model
{
    public $timestamps = false;
    protected $table = 'ensalamentos_horarios';

    public function ensalamento()
    {
        return $this->belongsTo('app\Ensalamento');
    }

    public function horario()
    {
        return $this->belongsTo('app\Horario');
    }
}

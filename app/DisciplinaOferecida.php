<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplinaOferecida extends Model
{
    public $timestamps = false;
    protected $table = 'disciplinas_oferecidas';

    public function disciplina()
    {
        return $this->belongsTo('app\Disciplina');
    }
    
    public function oferta()
    {
        return $this->belongsTo('app\Oferta');
    }
}

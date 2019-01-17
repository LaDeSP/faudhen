<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriz extends Model
{

    public $timestamps = false;
    
    protected $table = 'matrizes';

    public function disciplina()
    {
        return $this->belongsTo('app\Disciplina');
    }

    public function curso()
    {
        return $this->belongsTo('app\Curso');
    }
}

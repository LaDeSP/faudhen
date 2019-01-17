<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{

    public $timestamps = false;

    public function ensalamento()
    {
        return $this->hasMany('app\Ensalamento');
    }
}

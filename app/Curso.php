<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
class Curso extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'qtd_semestre','coordenador'
    ];

    public function matriz()
    {
        return $this->hasMany('app\Matriz');
    }

    public function oferta()
    {
        return $this->hasMany('app\Oferta');
    }

    public function user()
    {
        return $this->belongsTo('app\User','coordenador');
    }
}

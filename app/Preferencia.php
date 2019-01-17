<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{

    public $timestamps = false;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('app\User');
    }

}

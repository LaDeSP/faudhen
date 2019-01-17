<?php

namespace App\Http\Controllers;

use App\Preferencia;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PreferenciaController extends Controller
{

    public function __construct()
    {
        
    }   

    public function editar()
    {
        $preferencias = Preferencia::where('users_id' , Auth::id())->get();
        return view('modelos.preferencia.preferencia')->with('preferencias', $preferencias);
    }

    public function atualizar($preferencia)
    {
        $preferencias = Preferencia::where('users_id' , Auth::id())->get();
        return view('modelos.preferencia.preferencia' , $preferencias);
    }
}

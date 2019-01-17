<?php

namespace App\listeners;


use App\Events\UserCreated;
use App\Preferencia;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePreferencia
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        for($d = 1 ; $d <= 7; $d++){ 
            for ($t = 1; $t <= 3 ; $t++) { 
               $preferencia = new Preferencia;
               $preferencia->users_id = $event->user->id;
               $preferencia->dia_semana = $d;
               $preferencia->turno = $t;
               $preferencia->save();
            }
        }
    }
}

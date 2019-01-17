<?php

namespace App\Http\Middleware;

use Closure;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $nivel)
    {

        if ($request->user()->usu_nivel >= $nivel) {
            return $next($request);
        }else{
            return redirect()->back()->with('nivel', 'Voce não tem permissão pra fazer essa ação');
        }
        
    }
}

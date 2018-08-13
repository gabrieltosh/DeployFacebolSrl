<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->tipo == "Sadministrador")
        {
            return $next($request);            
        }else
        {
            if(Auth::user()->tipo == "Administrador")
            {
                return $next($request);            
            }else{
                return redirect()->route('start-a');
            }
        }
    }
}

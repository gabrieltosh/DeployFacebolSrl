<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Sadmin
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
        if(Auth::user()->tipo != "Sadministrador")
        {
            return redirect()->route('start-a');
        }
        return $next($request);
    }
}

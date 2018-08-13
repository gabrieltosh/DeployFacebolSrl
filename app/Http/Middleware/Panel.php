<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Panel
{
    public function handle($request, Closure $next)
    {   
        if(!Auth::check())
        {
            return redirect()->route('inicio');
        }  
        return $next($request);
    }
}

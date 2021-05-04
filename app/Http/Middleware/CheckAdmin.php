<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
<<<<<<< HEAD
        return $next($request);
=======
        if (auth()->user()->role='admin'){

            return $next($request);
        }
        
        return redirect()->back();
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    }
}

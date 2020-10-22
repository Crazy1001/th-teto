<?php

namespace App\Http\Middleware;

use Closure;

class UserAuthMiddleware
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
        if ( !session()->has('Auth') )
        {
            return redirect('/login');
        }
        else
        {
            return $next($request);
        }
    }


}

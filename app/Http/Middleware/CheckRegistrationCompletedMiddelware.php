<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRegistrationCompletedMiddelware
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
        if(is_null(auth()->user()->ap_paterno) &&
        is_null(auth()->user()->ap_materno) &&
        is_null(auth()->user()->username)){
            return redirect()->route('registre-sterp2.create');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isUserCity
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
        if (!session('city_id')) {
            return redirect()->route('city');
        }

        return $next($request);
    }
}

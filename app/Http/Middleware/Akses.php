<?php

namespace App\Http\Middleware;

use Closure;

class Akses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$aksess)
    {
        if (in_array($request->user()->akses,$aksess)) {
            return $next($request);
        }
        return redirect('home');
    }
}

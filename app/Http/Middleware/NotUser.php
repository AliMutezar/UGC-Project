<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NotUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // Kalo belom login, dan dia bukan manager atau admin, maka return forbidden 403

        if(auth()->guest() || auth()->user()->role == 'user') {
            abort(403);
        }
        return $next($request);
    }
}

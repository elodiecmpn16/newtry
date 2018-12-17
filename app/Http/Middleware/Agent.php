<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Agent
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
        if (Auth::check() && Auth::user()->role== 'agent') {
            return $next($request);
        }
//        elseif (Auth::check() && Auth::user()->role == 'client') {
//            return redirect('/client');
//        }
//        else {
            return redirect('/main');
        }

}

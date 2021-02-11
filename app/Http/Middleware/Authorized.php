<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class Authorized
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

    if(!(Auth::user()->role === 'admin' or Auth::user()->role === 'manager' or Auth::user()->role === 'system_admin')){
            return response()->view('unauthorized');
        }else{
            return $next($request);
        }
    }
}

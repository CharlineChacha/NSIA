<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminLoginMiddleware
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
        if(session()->has('admin')){
            return redirect(route('welcome'));
        }else{
            return $next($request);
        }

    }
}

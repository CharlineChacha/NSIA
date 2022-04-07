<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class employeLoginMiddleware
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
        if(session()->has('employe')){
            return redirect(route('Layoutemp.index'));
        }else{
            return $next($request);
        }
    }
}

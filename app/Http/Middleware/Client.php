<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Client
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
        if(!Auth::check()){
            return redirect()->route('login');
            }
    
            if(Auth::user()->role == 2){
                return redirect()->route('admin');
            }
    
            if(Auth::user()->role == 1){
                return $next($request);
            } 
    
    
    }
}

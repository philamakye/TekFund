<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admin
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

        if(Auth::user()->role == 1){
            return redirect()->route('home');
        }

        if(Auth::user()->role == 2){
            return $next($request);
        } 


        
    }
}

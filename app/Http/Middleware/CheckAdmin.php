<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     $isAdmin = Auth::user()->userid ; 
    //     if($isAdmin == 1){
    //         return redirect()->route('admin');
            
    //     }
    //     return $next($request);
    // }
    
    public function handle($request, Closure $next)
    {
        //Check user if Admin/Moderator go to admin panel if not return him
        $isAdmin = Auth::user()->userid;
        if($isAdmin == '1' || $isAdmin == '2')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }
}





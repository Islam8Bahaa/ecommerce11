<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckUser
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
    //     $isUser = Auth::user()->userid ; 
    //     if($isUser == 0){
    //         return redirect()->route('user');
            
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        //Check user if logged in redirect him or her to index page
        $isAdmin = Auth::user()->userid;
        if($isAdmin == '0')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }
}


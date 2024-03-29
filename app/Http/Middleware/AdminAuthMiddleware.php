<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
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
        // if(!Auth::check() || auth()->user()->role !== 'admin'){
        //     return redirect()->back();
        // }
        // if(Auth::user() && session()->get('user')['admin']==NULL){
        //     return redirect()->back();
        // }
        
        if(Auth::check() && Auth::user()->role == 'admin'){
            return $next($request);
        }
        return redirect('/');
    }
}

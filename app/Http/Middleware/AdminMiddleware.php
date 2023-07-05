<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (Auth::check()) {
            if (Auth::user()->role_as == '1') //0=user 1=admin
            {
                return $next($request);
            }
            else{
                return redirect('/home')->with('confirm', 'Access Dinied. as oyou are not an admin');
            }
        }
        else{
            return redirect()->back()->with('confirm', 'Please Login first');
        }
    }
}

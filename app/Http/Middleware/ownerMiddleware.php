<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ownerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role == "owner"){
            return $next($request);
        }
        return redirect()->route('home');
    }
}

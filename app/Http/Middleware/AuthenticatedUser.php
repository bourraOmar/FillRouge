<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            return match ($user->role) {
                'admin' => redirect()->route('dashboardAdmin'),
                'owner' => redirect()->route('dashboardOwner'),
                'client' => redirect()->route('profile'),
            };
        }
        return $next($request);
    }
}

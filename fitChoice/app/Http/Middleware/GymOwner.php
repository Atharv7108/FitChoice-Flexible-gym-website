<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Foundation\Application;

class GymOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('gymowner')->check()) {
            return redirect()->route('gymowner.login')
                ->with('error', 'You need to login first.');
        }

        if (Auth::guard('gymowner')->check()) {
            return $next($request);
        }

        return redirect()->route('gymowner.login')
            ->with('error', 'You dont have permission to access this page!');
    }
} 
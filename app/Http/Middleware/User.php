<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request);
        }

        // Redirect jika bukan user
        return redirect('/')->withErrors(['access' => 'Unauthorized access.']);
    }
}

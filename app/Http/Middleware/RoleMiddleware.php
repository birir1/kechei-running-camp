<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated and their role is in the allowed roles
        if (!Auth::check() || !in_array(Auth::user()->role, $roles)) {
            // Optional: Log unauthorized access
            Log::warning('Unauthorized access attempt by user: ' . (Auth::check() ? Auth::user()->email : 'Guest'));

            return redirect()->route('home'); // Redirect if user role doesn't match
        }

        return $next($request); // Proceed to the next middleware or request handler
    }
}
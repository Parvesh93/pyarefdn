<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Step 1: Check if user is authenticated
        if (!$request->user()) {
            return redirect()->route('login'); // Or use abort(401)
        }

        // Step 2: Role mismatch check
        if ($request->user()->role !== $role) {
            if ($request->user()->role === 'donor') {
                return redirect()->route('donor.dashboard.index');
            } elseif ($request->user()->role === 'admin') {
                return redirect()->route('admin.dashboard.index');
            } else {
                return redirect()->route('home');
            }
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        // dd($guards);
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                // dd($guard);

                if ($guard === 'web') {
                    // Check user role from database
                    if ($user->is_admin === 1) {
                        return redirect()->route('admin.dashboard.index');
                    } elseif ($user->is_admin === 0) {
                        return redirect()->route('admin.dashboard.index');
                    }
                } elseif ($guard === 'donor') {
                    //donor was authenticated with donor guard.
                    return redirect()->route('donor.dashboard.index');
                }
                // Default fallback
                return redirect('/');
            }
        }

        return $next($request);
    }
}

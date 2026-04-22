<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthenticatedSessionController extends Controller
{

    // Removed usage of AuthenticatesUsers trait as it is undefined.

    /**
     * Display the login view.
     */
    public function create(): View|RedirectResponse
    {

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Agar user inactive hai to logout + error message
        if ($request->user()->status === 'inactive') {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            $request->session()->flash('toastr', [
                'type' => 'error',
                'message' => 'Your account has been banned. Please connect with support!'
            ]);

            return redirect('/');
        }

        // Role ke hisaab se redirect
        if ($request->user()->is_admin === 1) {
            return redirect()->intended(route('admin.dashboard.index'));
        } elseif ($request->user()->is_admin === 0) {
            return redirect()->intended(route('admin.dashboard.index'));
        }
        // Normal user home page par
        return redirect()->intended(route('home'));
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}

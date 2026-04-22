<?php

namespace App\Http\Controllers\Donor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    

    
    /**
     * Username used in ThrottlesLogins trait
     * 
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Only guests for "student" guard are allowed except
     * for logout.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:donor')->except('logout');
    }

    /**
     * Show the login form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('frontend.donor.login', [
            'loginRoute' => 'donor.login.store',
            'forgotPasswordRoute' => 'donor.password.request',
        ]);
    }

    /**
     * Login the student.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
   
    public function login(Request $request)
    {
        $this->validator($request);

        

        // Create a unique key for rate limiter (e.g., based on IP + email)
        $key = Str::lower('login:donor:' . $request->input('email') . '|' . $request->ip());

        // Check if too many attempts
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'email' => "Too many login attempts. Please try again in {$seconds} seconds.",
            ]);
        }
       
        
        // Attempt login
        if (Auth::guard('donor')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            RateLimiter::clear($key); // successful login = clear attempts
            return redirect()
                ->intended(route('donor.dashboard.index'))
                ->with('success', __('auth_logged_in'));
        }

        // Login failed — increment attempts
        RateLimiter::hit($key, 180); // 3 minutes block time

        return redirect()->back()
            ->withInput()
            ->withErrors(['email' => __('auth_login_failed')]);
    }


    /**
     * Logout the student.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('donor')->logout();

        return redirect()
            ->route('donor.login')
            ->with('success', __('auth_logged_out'));
    }

    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:donors|min:5|max:191',
            'password' => 'required|string|min:6|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => __('auth_credentials_not_match'),
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }

    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', __('auth_login_failed'));
    }
}

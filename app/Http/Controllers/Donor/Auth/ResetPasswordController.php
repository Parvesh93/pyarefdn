<?php

namespace App\Http\Controllers\Donor\Auth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
     /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/donor/dashboard';

    /**
     * Only guests for "student" guard are allowed except
     * for logout.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:donor');
    }

    /**
     * Show the reset password form.
     * 
     * @param  \Illuminate\Http\Request $request
     * @param  string|null  $token
     * @return \Illuminate\Http\Response
     */
    public function showResetForm(Request $request, $token = null, $email = null){
        return view('frontend.donor.password.reset',[
            'passwordUpdateRoute' => 'donor.password.update',
            'token' => $token,
            'email' => $email,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reset(Request $request)
    {
        // Field Validation
        $request->validate([
            'token' => 'required',
            'email' => 'required:email',
            'password' => 'nullable|confirmed|min:6',
        ]);

        $user = Donor::where('email', $request->email)->first();

        if(isset($user)){

            $token_validate = DB::table('password_resets')
                        ->where('email', $request->email)
                        ->where('token', $request->token)
                        ->first();
            
            if(isset($token_validate)){
                $user->password = Hash::make($request->password);
                $user->password_text = Crypt::encryptString($request->password);
                $user->save();

                return redirect()->route('donor.login')->with('success', __('auth_password_changed_successfully'));
            }
            else{
                return redirect()->back()->with('error', __('auth_token_not_valid'));
            }
        }
        
        return redirect()->back()->with('error', __('auth_account_not_found'));
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    protected function broker(){
        return Password::broker('donors');
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard(){
        return Auth::guard('donor');
    }
}

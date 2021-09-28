<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(LoginRequest $request)
    {
        $credentials=$request->except('_token');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('/'));
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
    
}

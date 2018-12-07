<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->role == 'client') {
            return 'client/profil';
        } elseif (Auth::check() && Auth::user()->role == 'agent') {
            return 'agent/profil';
        } elseif (Auth::check() && Auth::user()->role == 'admin') {
            return'admin/profil';
        }else return '/home';
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}


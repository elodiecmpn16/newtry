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
    if (Auth::check() && Auth::user()->role_id == 2) {
       return 'client/profil';
    } elseif (Auth::check() && Auth::user()->role_id == 3) {
        return 'agent/profil';
    } elseif (Auth::check() && Auth::user()->role_id == 1) {
        return 'admin/profil';
    }else return '/main';

}



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// declare
use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // Default
    //protected $redirectTo = RouteServiceProvider::HOME;
    // custom
    protected function authenticated(Request $request, $user){
        if($user->roles[0]->role == 'Manager'){
            return redirect('/admin/managers');
        }
        if($user->roles[0]->role == 'Supervisor'){
            return redirect('/admin/supervisors');
        }
        if($user->roles[0]->role == 'Staff'){
            return redirect('/admin/staffs');
        }
        return redirect('/admin/normal_users');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

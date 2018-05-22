<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Controllers\Auth;

use SSSTEELE\Http\Controllers\Controller;
=======
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
<<<<<<< HEAD
    protected $redirectTo = '/admin/home';
=======
    protected $redirectTo = '/home';
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

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

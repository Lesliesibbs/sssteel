<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Controllers\Auth;

use SSSTEELE\Http\Controllers\Controller;
=======
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('guest');
    }
}

<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
            return redirect('/admin/home');
=======
            return redirect('/home');
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
        }

        return $next($request);
    }
}

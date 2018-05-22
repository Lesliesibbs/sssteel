<?php

<<<<<<< HEAD
namespace SSSTEELE\Http;
=======
namespace App\Http;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
<<<<<<< HEAD
        \SSSTEELE\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \SSSTEELE\Http\Middleware\TrustProxies::class,
=======
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
<<<<<<< HEAD
            \SSSTEELE\Http\Middleware\EncryptCookies::class,
=======
            \App\Http\Middleware\EncryptCookies::class,
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
<<<<<<< HEAD
            \SSSTEELE\Http\Middleware\VerifyCsrfToken::class,
=======
            \App\Http\Middleware\VerifyCsrfToken::class,
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
<<<<<<< HEAD
        'guest' => \SSSTEELE\Http\Middleware\RedirectIfAuthenticated::class,
=======
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}

<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}

<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}

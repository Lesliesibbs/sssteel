<?php

<<<<<<< HEAD
namespace SSSTEELE\Http\Controllers;
=======
namespace App\Http\Controllers;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

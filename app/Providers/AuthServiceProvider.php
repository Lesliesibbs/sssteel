<?php

<<<<<<< HEAD
namespace SSSTEELE\Providers;
=======
namespace App\Providers;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        'SSSTEELE\Model' => 'SSSTEELE\Policies\ModelPolicy',
=======
        'App\Model' => 'App\Policies\ModelPolicy',
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

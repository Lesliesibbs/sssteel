<?php

<<<<<<< HEAD
namespace SSSTEELE\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
=======
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
      Schema::defaultStringLength(191);
=======
        //
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

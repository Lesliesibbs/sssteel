<?php

<<<<<<< HEAD
namespace SSSTEELE\Providers;
=======
namespace App\Providers;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}

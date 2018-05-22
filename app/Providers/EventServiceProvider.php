<?php

<<<<<<< HEAD
namespace SSSTEELE\Providers;
=======
namespace App\Providers;
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'SSSTEELE\Events\Event' => [
            'SSSTEELE\Listeners\EventListener',
=======
        'App\Events\Event' => [
            'App\Listeners\EventListener',
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

<?php

namespace Tests;

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
        Hash::driver('bcrypt')->setRounds(4);

=======
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
        return $app;
    }
}

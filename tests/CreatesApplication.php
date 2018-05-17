<?php

namespace Tests;

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 0ddec4fba99bfa51b064081e64d73b540546e052
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
>>>>>>> 0ddec4fba99bfa51b064081e64d73b540546e052
        return $app;
    }
}

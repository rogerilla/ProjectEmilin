<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
<<<<<<< HEAD
     * @var string
=======
     * @var int
>>>>>>> 0ddec4fba99bfa51b064081e64d73b540546e052
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}

<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\VerifyAdmin::class,
        // Middleware lainnya yang sudah ada
    ];
}

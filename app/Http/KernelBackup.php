<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class KernelBackup extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\EnsureIsAdmin::class,
        // Tambahkan middleware lainnya yang sudah ada
    ];
}

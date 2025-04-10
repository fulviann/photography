<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Harap login terlebih dahulu');
        }

        if (!Auth::user()->is_admin) {
            return redirect('/')->with('error', 'Akses ditolak. Hanya untuk admin.');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SignupAccessMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session('from_signup')) {
            return redirect()->route('dashboard')->with('error', 'Akses ditolak. Halaman ini hanya untuk pengguna yang baru mendaftar.');
        }

        return $next($request);
    }
}

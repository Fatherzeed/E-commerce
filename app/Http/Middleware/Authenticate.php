<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Pengecualian untuk rute 'home'
            if ($request->routeIs('home')) {
                return null; // Tidak redirect ke halaman login
            }
            return route('login'); // Redirect ke halaman login untuk rute lainnya
        }
    }
}

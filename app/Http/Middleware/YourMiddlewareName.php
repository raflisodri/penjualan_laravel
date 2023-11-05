<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YourMiddlewareName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user) {
            if ($user->role === 'admin') {
                return $next($request); // Admin can access all routes
            } elseif ($user->role === 'kasir' && $request->is('penjualan*')) {
                return $next($request); // Kasir can only access penjualan route
            }
        }

        return redirect('/login')->with('error', 'You do not have permission to access this page.');
    }
}

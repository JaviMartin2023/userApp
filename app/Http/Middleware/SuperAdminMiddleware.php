<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'superadmin') {
            return redirect('/home')->withErrors(['error' => 'No tienes permiso para acceder a esta página.']);
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeVerificated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si el usuario está autenticado, redirige al dashboard
        if (auth()->check()) {
            return redirect()->route('admindash');
        }

        // Si el usuario no está autenticado, continúa con la ruta
        return $next($request);
    }
}

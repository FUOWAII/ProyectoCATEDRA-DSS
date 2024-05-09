<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckEmployeeLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('employees')->check() && !$this->isLoginRoute($request)) {
            return redirect()->route('login.employees');
        }

        return $next($request);
    }

    private function isLoginRoute($request)
    {
        return $request->is('dashboardEmployee') || $request->is('dashboardEmployee/*');
    }
}

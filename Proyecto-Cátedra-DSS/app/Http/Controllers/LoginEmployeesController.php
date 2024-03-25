<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Employees;
use Illuminate\Support\Facades\Auth;



class LoginEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create(): View
    {
        return view('auth.loginemployees');
    }

    public function store(Request $request)
    {
        $credentials = $request->except('_token');

        if (Auth::guard('employees')->attempt($credentials)) {
            return redirect()->route('admindash');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('employees')->logout(); // Cierra la sesión con la guardia "employees" o "web"
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.employees'); // Redirigir a la página de inicio de sesión
    }
    
}

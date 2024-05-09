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
        return view('employees.loginemployees');
    }

    public function store(Request $request)
    {
        $credentials = $request->except('_token');

        if (Auth::guard('employees')->attempt($credentials)) {
            $user = Auth::guard('employees')->user(); // Obtener el usuario autenticado

            // Almacenar el usuario en la sesión
            session(['user' => $user]);

            // Redirigir según el role_id del usuario
            switch ($user->role_id) {
                case 1:
                    return redirect()->route('dash.gg');
                    break;
                case 2:
                    return redirect()->route('dash.gs');
                    break;
                case 3:
                    return redirect()->route('dash.uc');
                    break;
                case 4:
                    return redirect()->route('dashboard.role4');
                    break;
                case 5:
                    return redirect()->route('dashboard.role5');
                    break;
                default:
                    // Redirigir a una ruta por defecto si el role_id no coincide
                    return redirect()->route('login.employees');
                    break;
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('employees')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.employees');
    }
}

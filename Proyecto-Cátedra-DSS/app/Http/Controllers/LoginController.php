<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    // Otras funciones de controlador aquí...

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('cuentabancaria'); // Cambia 'home' por el nombre de la ruta de la página a la que deseas redirigir al usuario
    }
}

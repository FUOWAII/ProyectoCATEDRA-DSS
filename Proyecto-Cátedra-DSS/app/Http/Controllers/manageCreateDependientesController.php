<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class manageCreateDependientesController extends Controller
{

    public function mostrarGestionClientes()
    {
        $dependientes = User::where('role_id', 4)->get();
        return view('usuarioCajero.gestionClientes', compact('dependientes'));
    }

    public function saveregisterdependients(Request $request)
    {
        // Validación de campos
        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ser un correo electrónico válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];

        // Validación de campos con mensajes personalizados
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear el usuario con role_id predeterminado
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 4;
        $user->save();

        // Redireccionar o mostrar mensaje de éxito
        return redirect()->route('dash.uc.clientes')->with('success', '¡Registro exitoso!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lendings;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LendingController extends Controller
{

    public function create()
    {
        $personas = User::all();

        $prestamos = Lendings::all();

        return view('usuarioCajero.gestionPrestamos', compact('personas', 'prestamos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'persona_id' => 'required|string|max:255',
            'montoPrestado' => 'required|numeric|min:1|max:50000',
            'sueldo_cliente' => 'required|numeric|min:1|max:10000',
            'abono_mensual' => 'required|numeric|min:1|max:5000',
            'intereses' => 'required|numeric|in:3,4,5',
        ]);

        // Obtener el salario del cliente
        $salario = User::find($request->persona_id)->salary;

        // Definir los montos máximos y los intereses según el salario
        $montoMaximo = 0;
        $intereses = $request->intereses;

        switch ($salario) {
            case $salario < 365:
                $montoMaximo = 10000;
                break;
            case $salario < 600:
                $montoMaximo = 25000;
                break;
            case $salario < 900:
                $montoMaximo = 35000;
                break;
            case $salario >= 1000:
                $montoMaximo = 50000;
                break;
            default:
                $montoMaximo = 0;
                break;
        }

        // Verificar que el monto solicitado no supere el máximo permitido
        $montoSolicitado = $request->montoPrestado;
        if ($montoSolicitado > $montoMaximo) {
            return back()->withErrors(['montoPrestado' => 'El monto prestado excede el máximo permitido para este salario.'])->withInput();
        }

        // Crear el préstamo y guardar en la base de datos
        $lending = new Lendings();
        $lending->IdCliente = $request->persona_id;
        $lending->montoPrestado = $montoSolicitado;
        $lending->intereses = $intereses;
        $lending->fechaPrestamo = now();
        $lending->sueldo_cliente = $request->sueldo_cliente;
        $lending->abono_mensual = $request->abono_mensual;
        $lending->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('dash.uc.prestamos')->with('success', 'Préstamo registrado correctamente.');
    }
}

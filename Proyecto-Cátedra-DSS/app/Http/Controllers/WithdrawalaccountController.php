<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\WithdrawalAccount;
use App\Models\BankAccount;

class WithdrawalaccountController extends Controller
{
    public function create()
    {
        $retiros = WithdrawalAccount::all(); // Obtener todos los retiros desde la base de datos
    
        return view('usuarioCajero.gestionRetiros', compact('retiros')); // Pasar los datos a la vista
    }

    public function store(Request $request)
    {
        // Validación de los campos para el retiro bancario
        $validator = Validator::make($request->all(), [
            'persona_receptora_abono' => ['required', 'string'],
            'IdCuenta' => [
                'required',
                'numeric',
                'digits:6',
                Rule::exists('bankaccounts', 'NumeroCuenta')->where(function ($query) use ($request) {
                    $query->where('id', $request->input('IdCuenta'));
                }),
            ],
            'cantidad_retiro' => ['required', 'numeric', 'min:10', 'max:5000'],
        ], [
            'persona_receptora_abono.required' => 'El nombre de la persona receptora es obligatorio.',
            'IdCuenta.required' => 'El campo IdCuenta es obligatorio.',
            'IdCuenta.numeric' => 'El camp IdCuenta debe ser numérico.',
            'IdCuenta.digits' => 'El campo IdCuenta debe tener exactamente 6 dígitos.',
            'IdCuenta.exists' => 'La cuenta bancaria no es válida para realizar el retiro.',
            'cantidad_retiro.required' => 'El campo cantidad de retiro es obligatorio.',
            'cantidad_retiro.numeric' => 'El campo cantidad de retiro debe ser numérico.',
            'cantidad_retiro.min' => 'El campo cantidad de retiro debe mayor a 10.',
            'cantidad_retiro.max' => 'El campo cantidad de retiro debe menor a 5000.'
        ]);

        // Si la validación falla, redireccionar con errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Obtener la cuenta bancaria
        $bankAccount = BankAccount::findOrFail($request->IdCuenta);

        // Verificar si el monto de retiro es mayor que el saldo de la cuenta
        if ($bankAccount->SaldoCuenta < $request->cantidad_retiro) {
            return redirect()->back()->withErrors(['cantidad_retiro' => 'El retiro no es posible porque el monto de retiro es mayor que el saldo de la cuenta.'])->withInput();
        }        

        // Crear un nuevo retiro bancario
        $withdrawal = new WithdrawalAccount();
        $withdrawal->IdCuenta = $request->IdCuenta;
        $withdrawal->persona_retiro_bancario = $request->persona_receptora_abono;
        $withdrawal->cantidad_retiro = $request->cantidad_retiro;
        $withdrawal->fecha = now(); 
        $withdrawal->save();

        // Actualizar el saldo de la cuenta
        $bankAccount->SaldoCuenta -= $request->cantidad_retiro;
        $bankAccount->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('dash.uc.retiros')->with('success', 'El retiro bancario se realizó correctamente.');
    }

}

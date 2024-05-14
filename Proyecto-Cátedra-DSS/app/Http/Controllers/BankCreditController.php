<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Bank_credit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BankCreditController extends Controller
{
    public function create()
    {
        $bankAccounts = BankAccount::all();

        $bankCredits = Bank_credit::with('account.user')->orderBy('created_at', 'desc')->get();

        return view('usuarioCajero.gestionAbonos', compact('bankAccounts', 'bankCredits'));
    }

    public function store(Request $request)
    {

        $messages = [
            'persona_receptora_abono.required' => 'El nombre de la persona receptora es obligatorio.',
            'DUI_persona_abono.required' => 'El DUI de la persona receptora es obligatorio.',
            'DUI_persona_abono.regex' => 'El DUI debe tener el formato correcto, por ejemplo, 12345678-9.',
            'id_cuenta_receptora.required' => 'La cuenta receptora es obligatoria.',
            'id_cuenta_receptora.exists' => 'La cuenta receptora seleccionada no es válida.',
            'cantid_adabono.required' => 'La cantidad de abono es obligatoria.',
            'cantid_adabono.numeric' => 'La cantidad de abono debe ser un valor numérico.',
            'cantid_adabono.min' => 'El abono debe ser igual o mayor a $10.00',
            'cantid_adabono.max' => 'El abono no puede ser mayor a $5000.',
        ];
        
        $validator = Validator::make($request->all(), [
            'persona_receptora_abono' => 'required|string',
            'DUI_persona_abono' => 'required|string|regex:/^\d{8}-\d$/',
            'id_cuenta_receptora' => 'required|exists:bankaccounts,id',
            'cantid_adabono' => 'required|numeric|min:10|max:5000',
        ], $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $bankAccount = BankAccount::findOrFail($request->id_cuenta_receptora);

        $bankCredit = new Bank_credit();
        $bankCredit->persona_receptora_abono = $request->persona_receptora_abono;
        $bankCredit->DUI_persona_abono = $request->DUI_persona_abono;
        $bankCredit->id_cuenta_receptora = $request->id_cuenta_receptora;
        $bankCredit->cantid_adabono = $request->cantid_adabono;
        $bankCredit->fecha = now();
        $bankCredit->save();

        $bankAccount->SaldoCuenta += $request->cantid_adabono;
        $bankAccount->save();

        return redirect()->route('dash.uc.abonos')->with('success', 'Abono realizado correctamente.');
    
    }
}

<?php

// HomeController.php
namespace App\Http\Controllers;

use App\Models\Lendings;
use Illuminate\Http\Request;
use App\Models\Bankaccount;
use App\Models\Withdrawalaccount;
use App\Models\Paymentsaccount;




class Detalles extends Controller
{
    public function index(Request $request)
{
    $numeroCuenta = $request->input('numero_cuenta');

    // Si no se proporciona un número de cuenta, simplemente muestra la vista sin realizar ninguna acción adicional.
    if (!$numeroCuenta) {
        return view('administrator.managebranchofficce.detalles');
    }

    $bankaccount = Bankaccount::where('NumeroCuenta', $numeroCuenta)->first();
    if (!$bankaccount) {
        return redirect()->back()->with('error', 'No se encontró una cuenta con el número proporcionado.');
    }

     // Filtrar los usuarios asociados a la cuenta bancaria por el id 3
     $user = $bankaccount->user()->where('id', 3)->first();
    $withdrawals = Withdrawalaccount::where('IdCuenta', $bankaccount->id)->get();
    $payments = Paymentsaccount::where('idCuentaReceptora', $bankaccount->id)->get();
    $lendings = Lendings::where('IdCuenta', $bankaccount->id)->get();
    
    return view('administrator.managebranchofficce.detalles', compact('bankaccount','user', 'withdrawals', 'payments', 'lendings'));
}

}

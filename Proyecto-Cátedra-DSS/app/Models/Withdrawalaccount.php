<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithdrawalAccount extends Model
{
    protected $table = 'withdrawalaccount';
    protected $fillable = [
        'IdCuenta', 'idUsuario', 'idEncargado', 'cantidadretiro', 'fecha'
    ];

    public function account()
    {
        return $this->belongsTo(BankAccount::class, 'IdCuenta');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BankAccount extends Model

{
    protected $table = 'bankaccounts';

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'IdUsuario');
    }

    public function withdrawals()
    {
        return $this->hasOne(WithdrawalAccount::class, 'IdCuenta');
    }
}

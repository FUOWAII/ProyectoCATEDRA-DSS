<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_credit extends Model
{
    protected $fillable = [
        'persona_receptora_abono',
        'DUI_persona_abono',
        'id_cuenta_receptora',
        'cantid_adabono',
        'fecha',
    ];

    public function account()
    {
        return $this->belongsTo(BankAccount::class, 'id_cuenta_receptora');
    }
}

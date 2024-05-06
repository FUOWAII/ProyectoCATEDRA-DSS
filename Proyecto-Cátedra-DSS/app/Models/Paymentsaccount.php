<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentsAccount extends Model
{
    protected $table = 'paymentsaccount';
    protected $fillable = [
        'idCuentaEmisora', 'idCuentaReceptora', 'idUsuarioEmisor', 'cantidadabono', 'fecha'
    ];
}

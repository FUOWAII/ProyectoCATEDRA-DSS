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
        return $this->belongsTo(User::class, 'IdUsuario'); // Suponiendo que el campo que relaciona BankAccount con User es 'IdUsuario'
    }
}

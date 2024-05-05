<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lendings extends Model
{
    protected $table = 'lendings';
    protected $fillable = [
        'IdCuenta', 'idUsuario', 'idEncargado', 'montoPrestado', 'descripcion', 'fechaPréstamo', 'montoPagoCuotas', 'estadoPagoPrestamo'
    ];
}

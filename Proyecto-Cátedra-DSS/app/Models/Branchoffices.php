<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchoffices extends Model
{
    protected $fillable = [
        'nombre', 'dirección', 'estado', 'idEncargado'
    ];
    use HasFactory;
}

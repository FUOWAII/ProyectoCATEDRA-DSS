<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccionesPersonal extends Model
{
    protected $table = 'acciones_personal';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'Tipo_Accion',
        'Descripcion',
        'Estado',
        'Fecha_Solicitud',
        'Fecha_Aprobacion',
        'idEncargado',
    ];

    // En el modelo AccionesPersonal.php
public function empleado()
{
    return $this->belongsTo(Employees::class, 'idEncargado');
}

}


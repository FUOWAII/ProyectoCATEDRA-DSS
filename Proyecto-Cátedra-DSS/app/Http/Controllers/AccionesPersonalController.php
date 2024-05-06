<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccionesPersonal;

class AccionesPersonalController extends Controller
{
    public function index()
    {
        $acciones = AccionesPersonal::all();
        return view('administrator.managebranchofficce.accionesPersonal', compact('acciones'));
    }

    public function update(Request $request, $id)
    {
        $accion = AccionesPersonal::findOrFail($id);

        $accion->Estado = $request->estado;
        $accion->Fecha_Aprobacion = now()->toDateTimeString();
        $accion->save();

        return redirect()->back()->with('success', 'Estado actualizado correctamente.');
    }

    
}


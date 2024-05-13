<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\Branchoffices;
use Illuminate\Support\Facades\Redirect;

class ManageBranchOficceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $databranchofficceindex['data'] = Branchoffices::paginate(10);
        return view('administrator.managebranchofficce.indexbranchofficce', $databranchofficceindex);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener los nombres de los empleados que tienen el id 2
        $empleados = Employees::where('role_id', 2)->pluck('name', 'id')->toArray();

        return view('administrator.managebranchofficce.createbranchofficce', compact('empleados'));
    }

    
    public function store(Request $request)
{
    // Valida y guarda los datos
    $validatedData = $request->validate([
        'nombre' => 'required',
        'dirección' => 'required',
        'estado' => 'required',
        'idEncargado' => 'required',
    ]);

    // Crea una nueva sucursal con los datos validados
    $branchoffice = Branchoffices::create($validatedData);

    // Redirige a la vista de éxito junto con los datos de la sucursal recién creada
    return redirect()->route('success', ['id' => $branchoffice->id]);
}

public function success()
{
    // Muestra la vista de éxito y pasa los datos de la sucursal
    return view('administrator.managebranchofficce.success');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

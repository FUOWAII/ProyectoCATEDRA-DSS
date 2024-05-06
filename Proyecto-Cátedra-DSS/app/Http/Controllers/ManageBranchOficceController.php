<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\Branchoffices;

class ManageBranchOficceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $databranchofficceindex['data']=Branchoffices::paginate(5);
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $databranchofficce = request()->except('_token');
        Branchoffices::insert($databranchofficce);

        return response()->json($databranchofficce);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

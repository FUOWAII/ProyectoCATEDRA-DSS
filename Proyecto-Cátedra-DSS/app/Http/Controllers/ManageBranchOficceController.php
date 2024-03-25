<?php

namespace App\Http\Controllers;

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
        //
        return view('administrator.managebranchofficce.createbranchofficce');
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

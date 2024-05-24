<?php

namespace App\Http\Controllers;

use App\Models\Unit_Kerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_unitkerja = Unit_Kerja::all();
        return view('unit_kerja.index', compact('list_unitkerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit_Kerja $unit_Kerja)
    {
        //
    }
}

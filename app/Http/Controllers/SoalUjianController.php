<?php

namespace App\Http\Controllers;

use App\Models\SoalUjian;
use Illuminate\Http\Request;

class SoalUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soalUjian = SoalUjian::all();
        return view('Admin.SoalUjian.index', compact('soalUjian'));
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
    public function show(SoalUjian $soalUjian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoalUjian $soalUjian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoalUjian $soalUjian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoalUjian $soalUjian)
    {
        //
    }
}

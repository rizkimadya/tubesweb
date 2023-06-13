<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('Admin.Peserta.index', compact('peserta'));
    }

    public function store(Request $request)
    {
        $peserta = new Peserta();

        $peserta->nomor_ujian = $request->nomor_ujian;
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->nis = $request->nis;
        $peserta->ruangan = $request->ruangan;
        $peserta->jk = $request->jk;

        $peserta->save();
        return redirect('/peserta');
    }


    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}

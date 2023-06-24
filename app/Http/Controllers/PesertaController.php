<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Http\Requests\ValidasiPeserta;

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

    public function store(ValidasiPeserta $request)
    {
        $request->validated();
        $peserta = new Peserta();

        $peserta->nomor_ujian = $request->nomor_ujian;
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->nis = $request->nis;
        $peserta->ruangan = $request->ruangan;
        $peserta->jk = $request->jk;

        $peserta->save();
        return redirect('/peserta');
    }


    public function edit($id)
    {
        $peserta = Peserta::where('id', $id)->firstOrFail();
        return view('Admin.Peserta.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $peserta = Peserta::where('id', $id)->first();
        $data = $request->all();

        $peserta->update($data);
        return redirect('/peserta');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();

        return redirect('/peserta');
    }
}

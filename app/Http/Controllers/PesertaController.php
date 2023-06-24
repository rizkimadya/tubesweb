<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidasiPeserta;
use App\Models\User;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = User::where('roles', '=', 'peserta')->get();
        return view('Admin.Peserta.index', compact('peserta'));
    }

    public function store(ValidasiPeserta $request)
    {
        $request->validated();
        $peserta = new User();

        $peserta->roles = 'peserta';
        $peserta->nomor_ujian = $request->nomor_ujian;
        $peserta->password = $request->password;
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->nis = $request->nis;
        $peserta->ruangan = $request->ruangan;
        $peserta->jk = $request->jk;

        $peserta->save();
        return redirect('/peserta');
    }


    public function edit($id)
    {
        $peserta = User::where('id', $id)->firstOrFail();
        return view('Admin.Peserta.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $peserta = User::where('id', $id)->first();
        $data = $request->all();

        $peserta->update($data);
        return redirect('/peserta');
    }

    public function destroy($id)
    {
        $peserta = User::findOrFail($id);
        $peserta->delete();

        return redirect('/peserta');
    }
}

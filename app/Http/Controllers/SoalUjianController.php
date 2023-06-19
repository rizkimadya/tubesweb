<?php

namespace App\Http\Controllers;

use App\Models\SoalUjian;
use Illuminate\Http\Request;

class SoalUjianController extends Controller
{
    public function index()
    {
        $soalUjian = SoalUjian::all();
        return view('Admin.SoalUjian.index', compact('soalUjian'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pertanyaan' => 'required|string',
            'pilihan_a' => 'required|string',
            'pilihan_b' => 'required|string',
            'pilihan_c' => 'required|string',
            'pilihan_d' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        SoalUjian::create($data);

        return redirect('/soalujian');
    }
    public function show($id)
    {
        $soalUjian = SoalUjian::findOrFail($id);
        return view('Admin.SoalUjian.show', compact('soalUjian'));
    }
    public function edit($id)
    {
        $soalUjian = SoalUjian::findOrFail($id);

        return view('Admin.SoalUjian.edit', compact('soalUjian'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pertanyaan' => 'required|string',
            'pilihan_a' => 'required|string',
            'pilihan_b' => 'required|string',
            'pilihan_c' => 'required|string',
            'pilihan_d' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        $soalUjian = SoalUjian::findOrFail($id);
        $soalUjian->update($data);

        return redirect('/soalujian');
    }
    public function destroy($id)
    {
        $soalUjian = SoalUjian::findOrFail($id);
        $soalUjian->delete();

        return redirect('/soalujian');
    }
}

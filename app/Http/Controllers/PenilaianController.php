<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\SoalUjian;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaian = Penilaian::all();
        return view('Admin.Penilaian.index', compact('penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Simpan jawaban ke dalam database
        $jawaban = [];
        $jumlah_benar = 0;
        $jumlah_salah = 0;

        foreach ($request->all() as $key => $value) {
            if (Str::startsWith($key, 'jawaban')) {
                $soalIndex = Str::replaceFirst('jawaban', '', $key);
                $jawaban[$soalIndex] = $value;

                // Bandingkan jawaban dengan jawaban benar pada model Pertanyaan
                $pertanyaan = SoalUjian::findOrFail($soalIndex);
                if ($value === $pertanyaan->jawaban) {
                    $jumlah_benar++;
                } else {
                    $jumlah_salah++;
                }
            }
        }
        $jumlah_soal = SoalUjian::count();
        $nilai = $jumlah_benar / $jumlah_soal * 100;

        Penilaian::create([
            'nomor_ujian' => $request->input('nomor_ujian'),
            'nama_peserta' => $request->input('nama_peserta'),
            'jumlah_benar' => $jumlah_benar,
            'jumlah_salah' => $jumlah_salah,
            'nilai' => $nilai,
            'jawaban' => json_encode($jawaban),
        ]);

        return redirect('/dashboard-peserta');
    }





    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}

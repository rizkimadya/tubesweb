<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\SoalUjian;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Policies\PenilaianPolicy;

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
    public function lihatNilai($nomor_ujian)
    {
        $penilaian = Penilaian::where('nomor_ujian', $nomor_ujian)->first();

        if ($penilaian && $penilaian->nomor_ujian === auth()->user()->nomor_ujian) {
            return view('User.nilai', compact('penilaian'));
        } else {
            abort(403, 'Unauthorized');
        }
    }
}

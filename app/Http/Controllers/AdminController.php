<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Peserta;
use App\Models\SoalUjian;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $peserta = User::where('roles', '=', 'peserta')->count();
        $SoalUjian = SoalUjian::count();
        return view('Admin.Dashboard.index', compact('peserta', 'SoalUjian'));
    }

    public function dashboardPeserta()
    {
        $soal = SoalUjian::all();
        $penilaian = Penilaian::where('nomor_ujian', '=', auth()->user()->nomor_ujian)->get();
        return view('User.ujian', compact('soal', 'penilaian'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\SoalUjian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $peserta = Peserta::count();
        $SoalUjian = SoalUjian::count();
        return view('Admin.Dashboard.index', compact('peserta', 'SoalUjian'));
    }
}

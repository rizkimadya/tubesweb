<?php

namespace App\Policies;

use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PenilaianPolicy
{

    public function view(User $user, Penilaian $penilaian)
    {
        return $user->nomor_ujian === $penilaian->nomor_ujian;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiPeserta extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->user()->roles == "admin") {
            return true;
        }
        return false;
    }

    public function rules()
    {
        return [
            'nomor_ujian' => 'required|unique:pesertas,nomor_ujian',
            'nama_peserta' => 'required',
            'nis' => 'required|unique:pesertas,nis',
            'ruangan' => 'required',
            'jk' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nomor_ujian.unique' => 'Nomor Ujian sudah ada',
            'nama_peserta' => 'Nama Tidak Boleh Kosong',
            'nis' => 'NIS Tidak Boleh Kosong',
            'ruangan' => 'Ruangan Tidak Boleh Kosong',
            'jk' => 'Jenis Kelamin Tidak Boleh Kosong',
        ];
    }
}

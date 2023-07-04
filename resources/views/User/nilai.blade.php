@extends('LayoutUser.app', ['title' => 'Ujian'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-md-4 p-3 d-flex align-items-center justify-content-center text-center"
                    style="height: 80vh; overflow: auto;">
                    <p class="mb-0">Nilai anda</p>
                    <p class="mb-0 text-success" style="font-size: 30px; font-weight: 600;">{{ $penilaian->nilai }}
                    </p>
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <div class="text-white p-3 bg-success">
                            <p class="mb-0" style="font-size: 30px; font-weight: 600;">
                                {{ $penilaian->jumlah_benar }}</p>
                            <p class="mb-0">Jawaban Benar</p>
                        </div>
                        <div class="text-white p-3 bg-danger">
                            <p class="mb-0" style="font-size: 30px; font-weight: 600;">
                                {{ $penilaian->jumlah_salah }}</p>
                            <p class="mb-0">Jawaban Salah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

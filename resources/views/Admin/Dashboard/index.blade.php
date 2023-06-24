@extends('LayoutAdmin.app', ['title' => 'Dashboard'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <p>Jumlah Peserta</p>
                    <p>{{ $peserta }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <p>Jumlah Soal Ujian</p>
                    <p>{{ $SoalUjian }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <p>Data Pegawai</p>
                    <p>100</p>
                </div>
            </div>
        </div>
    </div>
@endsection

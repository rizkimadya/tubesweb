@extends('LayoutUser.app', ['title' => 'Ujian'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-md-4 p-3" style="height: 80vh; overflow: auto;">
                    <h5 class="mb-3">Data Peserta</h5>
                    <div class="mb-3">
                        <label class="form-label">Nomor Ujian</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->nomor_ujian }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Peserta</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->nama_peserta }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Induk Siswa</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->nis }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ruangan Ujian</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->ruangan }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->jk }}" disabled>
                    </div>
                </div>
            </div>
            @if ($penilaian->contains('nomor_ujian', auth()->user()->nomor_ujian))
                <div class="col-md-8">
                    <div class="card p-md-4 p-3" style="height: 80vh; overflow: auto;">
                        <a class="btn btn-warning" href="/dashboard-peserta/{{ auth()->user()->nomor_ujian }}">Lihat
                            Nilai</a>
                    </div>
                </div>
            @else
                <div class="col-md-8">
                    <div class="card p-md-4 p-3" style="height: 80vh; overflow: auto;">
                        <h5 class="mb-3">Soal Ujian</h5>
                        <form action="{{ url('/dashboard-peserta') }}" method="POST">
                            @csrf
                            <input type="hidden" name="nomor_ujian" value="{{ auth()->user()->nomor_ujian }}">
                            <input type="hidden" name="nama_peserta" value="{{ auth()->user()->nama_peserta }}">
                            @foreach ($soal as $item)
                                <div class="mb-3">
                                    <div class="d-flex">
                                        <p class="me-2">{{ $loop->iteration }}.</p>
                                        <p style="text-align: justify">{{ $item->pertanyaan }}</p>
                                    </div>
                                    <div class="ms-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="jawaban{{ $loop->iteration }}" id="jawabanA{{ $loop->iteration }}"
                                                value="A">
                                            <label class="form-check-label" for="jawabanA{{ $loop->iteration }}">
                                                {{ $item->pilihan_a }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="jawaban{{ $loop->iteration }}" id="jawabanB{{ $loop->iteration }}"
                                                value="B">
                                            <label class="form-check-label" for="jawabanB{{ $loop->iteration }}">
                                                {{ $item->pilihan_b }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="jawaban{{ $loop->iteration }}" id="jawabanC{{ $loop->iteration }}"
                                                value="C">
                                            <label class="form-check-label" for="jawabanC{{ $loop->iteration }}">
                                                {{ $item->pilihan_c }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="jawaban{{ $loop->iteration }}" id="jawabanD{{ $loop->iteration }}"
                                                value="D">
                                            <label class="form-check-label" for="jawabanD{{ $loop->iteration }}">
                                                {{ $item->pilihan_d }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection

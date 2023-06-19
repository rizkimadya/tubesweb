@extends('LayoutAdmin.app', ['title' => 'Soal Ujian'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="card p-3 table-responsive">
                <div class="col-12 mb-2">
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea name="pertanyaan" id="pertanyaan" class="form-control" rows="4" disabled>{{ $soalUjian->pertanyaan }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan_a" class="form-label">Pilihan A</label>
                        <input type="text" name="pilihan_a" id="pilihan_a" class="form-control"
                            value="{{ $soalUjian->pilihan_a }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan_b" class="form-label">Pilihan B</label>
                        <input type="text" name="pilihan_b" id="pilihan_b" class="form-control"
                            value="{{ $soalUjian->pilihan_b }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan_c" class="form-label">Pilihan C</label>
                        <input type="text" name="pilihan_c" id="pilihan_c" class="form-control"
                            value="{{ $soalUjian->pilihan_c }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan_d" class="form-label">Pilihan D</label>
                        <input type="text" name="pilihan_d" id="pilihan_d" class="form-control"
                            value="{{ $soalUjian->pilihan_d }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban Benar</label>
                        <select name="jawaban" id="jawaban" class="form-select" disabled>
                            <option value="A" {{ $soalUjian->jawaban == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $soalUjian->jawaban == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $soalUjian->jawaban == 'C' ? 'selected' : '' }}>C</option>
                            <option value="D" {{ $soalUjian->jawaban == 'D' ? 'selected' : '' }}>D</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url('/soalujian') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

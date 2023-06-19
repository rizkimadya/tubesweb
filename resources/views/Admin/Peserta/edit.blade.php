@extends('LayoutAdmin.app', ['title' => 'Peserta'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="card p-3 table-responsive">
                <div class="col-12 mb-2">
                    <form action="/peserta/update/{{ $peserta->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nomor_ujian" class="form-label">Nomor Ujian</label>
                            <input type="text" name="nomor_ujian" id="nomor_ujian" class="form-control"
                                value="{{ $peserta->nomor_ujian }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_peserta" class="form-label">Nama Peserta</label>
                            <input type="text" name="nama_peserta" id="nama_peserta" class="form-control"
                                value="{{ $peserta->nama_peserta }}">
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="number" name="nis" id="nis" class="form-control"
                                value="{{ $peserta->nis }}">
                        </div>
                        <div class="mb-3">
                            <label for="ruangan" class="form-label">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan" class="form-control"
                                value="{{ $peserta->ruangan }}">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Laki-Laki"
                                    id="laki" {{ $peserta->jk == 'Laki-Laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="pr"
                                    value="Perempuan" {{ $peserta->jk == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ url('/peserta') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

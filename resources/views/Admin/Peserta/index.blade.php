@extends('LayoutAdmin.app', ['title' => 'Peserta'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="card p-3 table-responsive">
                <div class="col-12 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Peserta
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Peserta</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/peserta') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nomor_ujian" class="form-label">Nomor Ujian</label>
                                            <input type="text" name="nomor_ujian" id="nomor_ujian" class="form-control"
                                                placeholder="Masukkan Nomor Ujian Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_peserta" class="form-label">Nama Peserta</label>
                                            <input type="text" name="nama_peserta" id="nama_peserta" class="form-control"
                                                placeholder="Masukkan Nama Peserta Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nis" class="form-label">NIS</label>
                                            <input type="number" name="nis" id="nis" class="form-control"
                                                placeholder="Masukkan NIS Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ruangan" class="form-label">Ruangan</label>
                                            <input type="text" name="ruangan" id="ruangan" class="form-control"
                                                placeholder="Masukkan Ruangan Peserta">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk"
                                                    value="Laki-Laki" id="laki">
                                                <label class="form-check-label" for="laki">
                                                    Laki-Laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="pr"
                                                    value="Perempuan" checked>
                                                <label class="form-check-label" for="pr">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Ujian</th>
                            <th>Nama Peserta</th>
                            <th>Nomor Induk Siswa</th>
                            <th>Ruangan</th>
                            <th>Jenis Kelamin</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_ujian }}</td>
                                <td>{{ $item->nama_peserta }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->ruangan }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/peserta/edit/{{ $item->id }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="/peserta/destroy/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('LayoutAdmin.app', ['title' => 'Soal Ujian'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="card p-3 table-responsive">
                <div class="col-12 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Soal Ujian
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Soal Ujian</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/soalujian') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                            <textarea name="pertanyaan" id="pertanyaan" placeholder="Masukkan Pertanyaan" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pilihan_a" class="form-label">Pilihan A</label>
                                            <input type="text" name="pilihan_a" id="pilihan_a" class="form-control"
                                                placeholder="Masukkan Pilihan A">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pilihan_b" class="form-label">Pilihan B</label>
                                            <input type="text" name="pilihan_b" id="pilihan_b" class="form-control"
                                                placeholder="Masukkan Pilihan B">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pilihan_c" class="form-label">Pilihan C</label>
                                            <input type="text" name="pilihan_c" id="pilihan_c" class="form-control"
                                                placeholder="Masukkan Pilihan C">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pilihan_d" class="form-label">Pilihan D</label>
                                            <input type="text" name="pilihan_d" id="pilihan_d" class="form-control"
                                                placeholder="Masukkan Pilihan D">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jawaban" class="form-label">Jawaban Benar</label>
                                            <select name="jawaban" id="jawaban" class="form-select">
                                                <option>Pilih Jawaban Benar</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
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
                            <th>Pertanyaan</th>
                            <th>Jawaban Benar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($soalUjian as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->pertanyaan }}</td>
                                @if ($item->jawaban == 'A')
                                    <td>{{ $item->pilihan_a }}</td>
                                @elseif($item->jawaban == 'B')
                                    <td>{{ $item->pilihan_b }}</td>
                                @elseif($item->jawaban == 'C')
                                    <td>{{ $item->pilihan_c }}</td>
                                @elseif($item->jawaban == 'D')
                                    <td>{{ $item->pilihan_d }}</td>
                                @endif
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/soalujian/show/{{ $item->id }}" class="btn btn-warning btn-sm">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                        <a href="/soalujian/edit/{{ $item->id }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="/soalujian/destroy/{{ $item->id }}" method="POST">
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

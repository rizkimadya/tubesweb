@extends('LayoutAdmin.app', ['title' => 'Penilaian'])

@section('isicontent')
    <div class="container-fluid">
        <div class="row">
            <div class="card p-3 table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Ujian</th>
                            <th>Nama Peserta</th>
                            <th>Jumlah Benar</th>
                            <th>Jumlah Salah</th>
                            <th>Nilai</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penilaian as $item)
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

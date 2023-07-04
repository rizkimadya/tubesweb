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
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penilaian as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_ujian }}</td>
                                <td>{{ $item->nama_peserta }}</td>
                                <td>{{ $item->jumlah_benar }}</td>
                                <td>{{ $item->jumlah_salah }}</td>
                                <td>{{ $item->nilai }}</td>
                                <td>
                                    @if ($item->nilai != null)
                                        <span class="px-2 text-white bg-success">Selesai</span>
                                    @else
                                        <span class="px-2 text-white bg-danger">Belum Selesai</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

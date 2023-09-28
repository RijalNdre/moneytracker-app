@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Laporan</h1>
    </div>
    <a href="">
        <button class="btn btn-primary py-2 mt-2">Tambah data</button>
    </a>
    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Laporan</th>
                    <th scope="col">Jenis Laporan</th>
                    <th scope="col">Total Pemasukan</th>
                    <th scope="col">Total Pengeluaran</th>
                    <th scope="col">Saldo Akhir</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $report->tanggal_laporan }}</td>
                        <td>{{ $report->jenis_laporan }}</td>
                        <td>{{ $report->total_pemasukan }}</td>
                        <td>{{ $report->total_pengeluaran }}</td>
                        <td>{{ $report->saldo_akhir }}</td>
                        <td>
                            <a href="" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

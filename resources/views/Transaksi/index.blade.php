@extends('layouts.app')

@section('title', 'Transaksi')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('transaksi.tambah') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Penjualan</th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($transaksi as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->id_transaksi }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->penjualan }}</td>
                        <td>{{ $row->pemasukan }}</td>
                        <td>{{ $row->pengeluaran }}</td>
                        <td>
                            <a href="{{ route('transaksi.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('transaksi.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
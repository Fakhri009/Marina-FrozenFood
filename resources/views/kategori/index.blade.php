@extends('layouts.app')

@section('title', 'Kategori')

@section('contents')
<div class="mb-4 shadow card">
    <div class="py-3 card-header">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.tambah') }}" class="mb-3 btn btn-primary">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Kategori</th>
                        <th>Produk id</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($kategori as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->id_kategori }}</td>
                        <td>{{ $row->produk_id }}</td>
                        <td>{{ $row->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
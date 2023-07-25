@extends('layouts.app')

@section('title', 'Produk')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('produk.tambah') }}" class="btn btn-primary mb-3">Tambah Produk</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($produk as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->id_produk }}</td>
                        <td>{{ $row->nama_produk }}</td>
                      
                       <td>{{ $row->harga }}

                        <td>{{ $row->stok }}</td>
                        <td>
                            @if ($row->foto)
                                <img src="{{ asset('storage/' . $row->foto) }}" alt="" style="width : 100px;;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('produk.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
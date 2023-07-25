@extends('layouts.app')

@section('title', 'promo')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data promo</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('promo.tambah') }}" class="btn btn-primary mb-3">Tambah Promo</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Promo</th>
                        <th>Judul</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($promo as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->id_promo }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->stok }}</td>
                        <td>
                            @if ($row->foto)
                            <img src="{{ asset('storage/' . $row->foto) }}" alt="" style="width : 100px;;">
                        @endif
                        </td>
                        <td>
                            <a href="{{ route('promo.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('promo.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
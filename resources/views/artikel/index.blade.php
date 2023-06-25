@extends('layouts.app')

@section('title', 'Artikel')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('artikel.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Artikel</th>
                        <th>Judul</th>
                        <th>body</th>
                        <th>Excerpt</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($artikel as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->body }}</td>
                        <td>{{ $row->excerpt }}</td>
                        <td class="">
                            <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('artikel.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Form Barang')

@section('contents')

<form action="{{ isset($kategori) ?route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan') }}" method="post">
    @csrf
<div class="row">
    <div class ="col-12">
    <div class="mb-4 shadow card">
    <div class="py-3 card-header">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset ($kategori) ?'Fom Edit Barang':'Form Tambah Barang' }}</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="id_kategori">Id Kategori</label>
            <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="{{ isset($kategori) ? $kategori->id_kategori : '' }}">
        </div>
        <div class="form-group">
            <label for="produk_id">Jenis Produk</label>
            <input type="text" class="form-control" id="produk_id" name="produk_id" value="{{ isset($kategori) ? $kategori->produk_id : '' }}">
        </div>
        <div class="form-group">
            <label for="produk">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ isset($kategori) ? $kategori->nama_kategori : '' }}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

@endsection

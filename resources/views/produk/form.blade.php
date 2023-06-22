@extends('layouts.app')

@section('title', 'Form Produk')

@section('contents')


<form action="{{ isset($produk) ?route('produk.tambah.update', $produk->id) : route('produk.tambah.simpan') }}" method="post">
    @csrf
<div class="row">
    <div class ="col-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset ($produk) ?'Fom Edit Barang':'Form Tambah Barang' }}</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="id_produk">Id Produk</label>
            <input type="text" class="form-control" id="id_produk" name="id_produk" value="{{ isset($produk) ? $produk->id_produk : '' }}">
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ isset($produk) ? $produk->nama_produk : '' }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($produk) ? $produk->harga: '' }}">
        </div>
        <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control" id="stok" name="stok" value="{{ isset($produk) ? $produk->stok: '' }}">
     </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" value="{{ isset($produk) ? $produk->foto: '' }}">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

@endsection

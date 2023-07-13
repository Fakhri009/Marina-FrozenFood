@extends('layouts.app')

@section('title', 'Form promo')

@section('contents')


<form action="{{ isset($promo) ?route('promo.tambah.update', $promo->id) : route('promo.tambah.simpan') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class ="col-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset ($promo) ?'Fom Edit Barang':'Form Tambah Barang' }}</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="id_promo">Id promo</label>
            <input type="text" class="form-control" id="id_promo" name="id_promo" value="{{ isset($promo) ? $promo->id_promo : '' }}">
        </div>
        <div class="form-group">
            <label for="nama_promo">Nama promo</label>
            <input type="text" class="form-control" id="nama_promo" name="nama_promo" value="{{ isset($promo) ? $promo->nama_promo : '' }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($promo) ? $promo->harga: '' }}">
        </div>
        <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control" id="stok" name="stok" value="{{ isset($promo) ? $promo->stok: '' }}">
     </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

@endsection

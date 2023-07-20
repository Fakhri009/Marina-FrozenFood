@extends('layouts.app')

@section('title', 'Form Produk')

@section('contents')


<form action="{{ isset($produk) ? route('produk.tambah.update', $produk->id) : route('produk.tambah.simpan') }}" method="post" enctype="multipart/form-data">
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
        <input type="hidden" name="oldImage" value="{{isset($produk->foto) ? $produk->foto : '' }}">
        @if (isset($produk->foto) ? true : false)
            <img src="{{ asset('storage/' . $produk->foto) }}" class="img-preview img-fluid mb-3 col-sm-5">
        @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        <label for="foto" class="d-block">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage()">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview'); 
            
            imgPreview.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection

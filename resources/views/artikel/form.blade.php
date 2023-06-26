@extends('layouts.app')

@section('title', 'Form Artikel')

@section('contents')

<form action="{{ isset($artikel) ?route('artikel.create.update', $artikel->id) : route('artikel.create.simpan') }}" method="post">
    @csrf
<div class="row">
    <div class ="col-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset ($artikel) ?'Form Edit Barang':'Form Tambah Data' }}</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ isset($artikel) ? $artikel->judul : '' }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" value="{{ isset($artikel) ? $artikel->body : '' }}">
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ isset($artikel) ? $artikel->excerpt : '' }}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

@endsection

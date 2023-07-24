@extends('layouts.app')

@section('title', 'Form Transaksi')

@section('contents')

<form action="{{ isset($transaksi) ?route('transaksi.tambah.update', $transaksi->id) : route('transaksi.tambah.simpan') }}" method="post">
    @csrf
<div class="row">
    <div class ="col-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset ($transaksi) ?'Fom Edit Barang':'Form Tambah Transaksi' }}</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="id_transaksi">Id Transaksi</label>
            <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="{{ isset($transaksi) ? $transaksi->id_transaksi : '' }}">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ isset($transaksi) ? $transaksi->tanggal : '' }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($transaksi) ? $transaksi->nama : '' }}">
        </div>
        <div class="form-group">
            <label for="penjualan">Penjualan</label>
            <input type="text" class="form-control" id="penjualan" name="penjualan" value="{{ isset($transaksi) ? $transaksi->penjualan : '' }}">
        </div>
        <div class="form-group">
            <label for="pemasukan">Pemasukan</label>
            <input type="text" class="form-control" id="pemasukan" name="pemasukan" value="{{ isset($transaksi) ? $transaksi->pemasukan : '' }}">
        </div>
        <div class="form-group">
            <label for="pengeluaran">Pengeluaran</label>
            <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ isset($transaksi) ? $transaksi->pengeluaran : '' }}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>

@endsection

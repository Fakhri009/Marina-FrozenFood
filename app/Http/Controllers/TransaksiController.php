<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
          $transaksi = Transaksi::get();
          return view ('transaksi.index', ['transaksi'=>$transaksi]);
    }

    public function tambah()
    {
        return view ('transaksi.form');
    }
    public function simpan(Request $request) 
    {
        $data = [
            'id_transaksi'=>$request->id_transaksi, 
            'nama'=>$request->nama, 
            'tanggal'=>$request->tanggal, 
            'penjualan'=>$request->penjualan, 
            'pemasukan'=>$request->pemasukan, 
            'pengeluaran'=>$request->pengeluaran, 
        ];

        Transaksi::create($data);
        return redirect()->route('transaksi');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        //dd($transaksi);
        return view('transaksi.form', ['transaksi' => $transaksi]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_transaksi'=>$request->id_transaksi, 
            'nama'=>$request->nama, 
            'tanggal'=>$request->tanggal, 
            'penjualan'=>$request->penjualan, 
            'pemasukan'=>$request->pemasukan, 
            'pengeluaran'=>$request->pengeluaran, 
        ];
        $transaksi = Transaksi::find($id)->update($data);
        return redirect()->route('transaksi');
}
    public function hapus($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi');
    }
}

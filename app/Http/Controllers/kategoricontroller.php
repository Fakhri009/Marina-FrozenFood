<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoricontroller extends Controller
{
    public function index()
    {
          $kategori = Kategori::get();
          return view ('kategori.index', ['kategori'=>$kategori]);
    }
    public function show()
    {
        $kategori = Kategori::all();
        return view('kategori.form', compact('kategori'));
    }

    public function tambah()
    {
        return view ('kategori.form');
    }
    public function simpan(Request $request) 
    {
        // $request->validate([
        //     'id_kategori' => 'required',
        //     'produk_id' => 'required',
        //     'nama_kategori' => 'required',
        // ]);

        $data = [
            'id_kategori'=>$request->id_kategori,
            'produk_id'=>$request->produk_id,
            'nama_kategori'=>$request->nama_kategori, 
        ];

        Kategori::create($data);
        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        //dd($kategori);
        return view('kategori.form', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_kategori'=>$request->id_kategori,
            'produk_id'=>$request->produk_id,
            'nama_kategori'=>$request->nama_kategori, 
        ];
        $kategori = Kategori::find($id)->update($data);
        return redirect()->route('kategori');
}
    public function hapus($id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori');
    }
}
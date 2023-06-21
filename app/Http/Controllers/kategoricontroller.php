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

    public function tambah()
    {
        return view ('kategori.form');
    }
    public function simpan(Request $request) 
    {
        $data = [
            'id_kategori'=>$request->id_kategori, 
            'produk'=>$request->produk, 
            'artikel'=>$request->artikel, 
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
            'produk'=>$request->produk, 
            'artikel'=>$request->artikel, 
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
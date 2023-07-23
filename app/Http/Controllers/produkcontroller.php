<?php

namespace App\Http\Controllers;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class produkcontroller extends Controller
{
    public function index()
    {
          $produk = Produk::get();
          return view('produk.index', ['produk'=>$produk]);
    }

    public function tambah()
    {
        return view ('produk.form');
    }
    public function simpan(Request $request) 
    {
        $data = [
            'id_produk'=>$request->id_produk, 
            'nama_produk'=>$request->nama_produk, 
            'harga'=>$request->harga, 
            'stok'=>$request->stok,
        ];

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('product-images'); 
        }


        Produk::create($data);
        return redirect()->route('produk');
        
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        //dd($produk);
        return view('produk.form', ['produk' => $produk]);
    }

    public function update($id, Request $request)
    {
        
        //Storage::disk('public')->put ($path, file_get_contents($foto));
        $data = [ 
            'id_produk'=>$request->id_produk, 
            'nama_produk'=>$request->nama_produk, 
            'harga'=>$request->harga, 
            'stok'=>$request->stok, 
        ];

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['foto'] = $request->file('foto')->store('product-images');
        }

       

        $produk = Produk::find($id)->update($data);
        $filename =date ('Y-m-d').$request->file('foto')->getClientOriginalName();
        $path = '/product-images'.$filename;
        return redirect()->route('produk');
}
    public function hapus($id)
    {
        $foto = Produk::find($id)->foto;
        if ($foto) {
            Storage::delete($foto);
        }
        Produk::find($id)->delete();
        return redirect()->route('produk');
    }
}
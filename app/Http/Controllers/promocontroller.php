<?php

namespace App\Http\Controllers;
use App\Models\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\produkcontroller;

class promocontroller extends Controller
{
    public function index()
    {
          $promo = Promo::get();
          return view ('promo.index', ['promo'=>$promo]);
    }

    public function tambah()
    {
        return view ('promo.form');
    }
    public function simpan(Request $request) 
    {
        $data = [
            'id_promo'=>$request->id_promo, 
            'nama_promo'=>$request->nama_promo, 
            'harga'=>$request->harga, 
            'stok'=>$request->stok,
            'foto'=>$request->foto,
        ];
        Promo::create($data);
        return redirect()->route('promo');
    }

    public function edit($id)
    {
        $promo = Promo::find($id);
        //dd($promo);
        return view('promo.form', ['promo' => $promo]);
    }

    public function update($id, Request $request)
    {
        $foto = $request->file('foto');
        $filename =date ('Y-m-d').$foto->getClientOriginalName();
        $path = 'foto-promo/'.$filename;

        //Storage::disk('public')->put ($path, file_get_contents($foto));

        $data = [ 
            'id_promo'=>$request->id_promo, 
            'nama_promo'=>$request->nama_promo, 
            'harga'=>$request->harga, 
            'stok'=>$request->stok, 
            'foto'=>$request->foto, 
        ];
        $promo = Promo::find($id)->update($data);


        return redirect()->route('promo');
}
    public function hapus($id)
    {
        Promo::find($id)->delete();
        return redirect()->route('promo');
    }
}


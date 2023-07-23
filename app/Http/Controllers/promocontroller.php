<?php

namespace App\Http\Controllers;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        ];
        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('promo-images'); 
        }

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
        ];

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['foto'] = $request->file('foto')->store('product-images');
        }

        $promo = Promo::find($id)->update($data);
        $filename =date ('Y-m-d').$request->file('foto')->getClientOriginalName();
        $path = '/promo-images'.$filename;
        return redirect()->route('promo');
}
    public function hapus($id)
    {
        $foto = Promo::find($id)->foto;
        if ($foto) {
            Storage::delete($foto);
        }
        Promo::find($id)->delete();
        return redirect()->route('promo');
    }
}


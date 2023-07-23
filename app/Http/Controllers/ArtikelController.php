<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Http\Requests\StoreArtikelRequest;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $artikel = Artikel::get();
            return view ('artikel.index', ['artikel'=>$artikel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('artikel.form');
    }

    public function simpan(Request $request) 
    {
        $data = [
            'judul'=>$request->judul, 
            'body'=>$request->body, 
            'excerpt'=>$request->excerpt, 
        ];

        Artikel::create($data);
        return redirect()->route('artikel');
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Artikel $artikels)
    {
        $artikels = Artikel::find($id);
        return view('artikel.form', [
            'artikel' => $artikels
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'judul'=>$request->judul, 
            'body'=>$request->body, 
            'excerpt'=>$request->excerpt, 
        ];
        $artikel = Artikel::find($id)->update($data);
        return redirect()->route('artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Artikel::find($id)->delete();
        return redirect()->route('artikel');
    }
}
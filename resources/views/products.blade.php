@extends('layouts.main')

@section('container')

<section class="w-screen mx-auto bg-white rounded-md top-20 justify-items-center md:ml-auto">
    <div class="w-full mt-20 mb-3">
        <p class="text-xl text-center tracking-wide aboslute">List Produk</p>
    </div>
    <div class="w-screen h-[1px] bg-slate-200 mb-3"></div>

        <div class="grid grid-cols-1 gap-x-auto md:grid-cols-2 xl:grid-cols-2">
        @foreach ($produk as $item)
            
                <div class="bg-white rounded-lg  ">
                    <img class="object-cover mx-auto rounded-lg" style="width : 300px ; height : 220px" src="{{ asset('storage/' . $item->foto) }}"/>
                        <div class="content-center p-6 text-center ">
                            <h5 class="mb-2 text-xl font-medium text-gray-900">
                                {{ $item->nama_produk }}              
                            </h5>
                            <p class="mb-1 text-base text-gray-700">
                                {{ $item->harga }}
                            </p>
                            <div class="px-6 pt-4 pb-2">
                            @foreach($item->kategori as $items)
                                <a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $items->nama_kategori }}</a>
                            @endforeach
                            </div>
                            <div>
                                <a href="https://wa.me/6283143463416?text=Nama%20%3A%0AProduk%20%3A%20Tahu%20Walik%0Avarian%20%3A%20Original%2FMercon%2FMix%0Apcs%20%3A%20%0Ano%20hp%20%3A%20%0Aalamat%20%3A%20" target="_blank">
                                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Pesan Sekarang !</button>
                                </a>
                            </div>
                        </div>
                    </div>
        @endforeach
                    
        </div>
        
</section>

@endsection
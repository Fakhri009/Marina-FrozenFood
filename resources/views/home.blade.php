@extends('layouts.main')

@section('container')

<section class="w-1/3 absolute top-40 left-40 z-[-2]">
    <h4 class="text-2xl font-semibold">{{ $artikel->judul }}</h4>
    <p class="mt-5 text-sm font-thin">{{ $artikel->excerpt }}</p>
    <button class="w-32 h-8 mt-5 text-sm duration-300 bg-orange-500 rounded-full hover:text-white hover:bg-orange-600 text-slate-100">Learn more</button>
</section>

@endsection
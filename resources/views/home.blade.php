@extends('layouts.main')

@section('container')

<section class="w-1/3 absolute top-[160px] mx-auto xl:left-40 z-[2] left-40">
    <h4 class="text-2xl font-semibold ">{{ $artikel->judul }}</h4>
    <p class="mt-5 text-sm font-thin">{!! $artikel->excerpt !!}</p>
    <button class="w-32 h-8 mt-5 text-sm duration-300 bg-orange-500 rounded-full hover:text-white hover:bg-orange-600 text-slate-100">Read more</button>
</section>
<img src="{{url('/assets/Home.png')}}" alt="Home"  class="absolute w-[350px] xl:opacity-100 opacity-25 xl:top-[100px]  right-[150px] top-[220px]">

@endsection
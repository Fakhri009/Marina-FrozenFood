@extends('layouts.main')

@section('container')

<section class="xl:w-1/3 w-2/4 absolute xl:top-[160px] top-[250px] mx-auto xl:left-40 z-[2] left-40">
    <h4 class="xl:text-2xl text-4xl font-semibold ">{{ $artikel->judul }}</h4>
    <p class="mt-5 xl:text-sm text-lg font-thin">{!! $artikel->excerpt !!}</p>
    <button class="w-32 h-8 mt-5 text-sm duration-300 bg-orange-500 rounded-full hover:text-white hover:bg-orange-600 text-slate-100">Read more</button>
</section>
<img src="{{url('/assets/Home.png')}}" alt="Home"  class="absolute xl:w-[350px] w-[500px] xl:opacity-100 opacity-25 xl:top-[100px]  right-[70px] top-[220px]">

@endsection
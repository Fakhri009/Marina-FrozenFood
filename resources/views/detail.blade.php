@extends('layouts.main')

@section('container')

<section class="absolute w-3/4 top-20 lg:left-40 left-20">
    <h2 class="text-3xl font-semibold tracking-wide ">{{ $title }}</h2>
    <h2 class="text-3xl font-semibold tracking-wide text-orange-800">{{ $artikel->judul }}</h2>
    <p align=”justify” class="mt-5 text-sm font-thin">{!! $artikel->body !!}</p>
    
</section>

@endsection
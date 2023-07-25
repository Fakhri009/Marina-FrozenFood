@extends('layouts.main')

@section('container')

<section class="absolute w-2/4 top-40 left-40">
    <h2 class="text-4xl font-thin">{{ $title }}</h2>
    <h3 class="text-2xl font-semibold tracking-wide text-orange-800">{{ $second_title }}</h3>
    <p class="mt-5 text-sm font-thin">{{ $body }}</p>
</section>
<img src="{{url('/assets/about us.png')}}" alt="Home"  class="absolute xl:w-[350px] w-[520px] xl:opacity-100 opacity-25 xl:top-[120px]  xl:right-[150px] right-[50px] top-[130px]">

@endsection
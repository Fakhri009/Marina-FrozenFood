@extends('layouts.main')

@section('container')

<section class="absolute w-2/4 top-40 left-40">
    <h2 class="text-3xl font-semibold tracking-wide text-orange-800">Contact Us</h2>
    <p align="justify" class="mt-5 text-sm font-thin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet velit maxime esse voluptate voluptatibus iste impedit praesentium deserunt, minus dicta commodi molestias vel odio vitae quaerat similique consequuntur minima deleniti distinctio sit. Deleniti expedita, eius molestiae cumque voluptatibus soluta laudantium totam doloribus odit placeat rerum eveniet tempora aliquam omnis minus?</p>
    <button class="w-32 h-8 mt-5 text-sm text-white bg-orange-500 rounded-full hover:bg-orange-600">Contact</button>
</section>
<img src="{{url('/assets/contack us.png')}}" alt="Home" class="absolute w-[350px] xl:opacity-100 opacity-25 xl:top-[120px]  right-[150px] top-[220px]">
@endsection
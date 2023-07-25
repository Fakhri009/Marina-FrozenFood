@extends('layouts.main')

@section('container')

<section class="absolute w-2/4 top-[100px] xl:left-40 left-20">
    <h2 class="text-3xl font-semibold tracking-wide text-orange-800">Contact Us</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.2196539182773!2d114.5798654638239!3d-3.295710315611982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a80d47ba6b%3A0x8f5abfaddfe5a2d7!2sPoliteknik%20Negeri%20Banjarmasin!5e0!3m2!1sid!2sid!4v1690309143632!5m2!1sid!2sid" width="500" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="flex mt-6 w-2/3 justify-between">
            <a href="https://wa.me/6283143463416"><img src="{{url('/assets/whatsapp logo.png')}}" alt="whatsapp" class=" w-[70px] xl:top-[120px]  right-[150px] top-[220px]"> Syifa</a>
            <a href="https://instagram.com/marinaafrozen"><img src="{{url('/assets/instagram logo.png')}}" alt="instagram" class=" w-[70px] xl:top-[120px]  right-[150px] top-[220px]"> @marinaafrozen</a>
        </div>
</section>
<img src="{{url('/assets/contack us.png')}}" alt="Home" class="absolute w-[350px] xl:opacity-100 opacity-25 xl:top-[120px]  right-[150px] top-[220px]">
@endsection
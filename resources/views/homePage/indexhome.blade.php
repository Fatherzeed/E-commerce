@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    @guest
        <h1>Tahukah kamu kalau kamu adalah Guest? belum login lho</h1>
    @endguest
    @auth
        <h1>Halo, kamu adalah {{ Auth::user()->username }} selamat datang</h1>
    @endauth
    <section class="hero wrapper90 flex h-[70dvh] items-center grow-0 shrink-0 w-full mx-auto relative" id="heroArea">
        <div class="overlay-hero absolute top-0 h-full w-full bg-black"></div>
        <div class="wrapper90 h-full md:mx-auto relative">
            <div class="hero-text absolute top-[5em]">
                
            </div>
            <div class="w-fit h-10 left-10 xl:left-0 absolute bottom-4 flex items-center gap-x-2 z-10" id="indicatorButtons">
            </div>
        </div>
    </section>

    @include('sections.produk')
    @include('partials.footer')
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

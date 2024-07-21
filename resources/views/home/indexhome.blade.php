@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    {{-- <h1>Welcome, {{ $username }}</h1>
    <p>Your UUID: {{ $uuid }}</p> --}}

    <section class="hero flex h-[70dvh] bg-blue-600 items-center grow-0 shrink-0 w-full mx-auto">
        <div class="wrapper80 md:mx-auto">
            <div class="hero-container relative flex md:h-[60dvh] h-[70dvh] lg:w-[50dvw] w-full flex-grow-0 flex-shrink-0 mx-auto overflow-hidden lg:bg-cover bg-cover bg-top bg-no-repeat md:rounded-xl p-5"
                style="background-image: url('/image/hero.png');">
                <div class="absolute lg:top-[30%] lg:left-10 md:top-[20%] md:left-8 gap-0">
                    <h2 class="text-3xl font-bold text-left">Fashion</h2>
                    <h2 class="lg:text-7xl text-6xl font-bold text-left ml-2">Sh<span class="text-sky-600">op</span></h2>
                    <h3 class="mt-2 md:text-lg font-medium">For You and Partner...</h3>
                </div>

            </div>
        </div>
    </section>

    @include('sections.produk')

    <section class="h-[80dvh] bg-green-500">

    </section>
    @include('partials.footer')
@endsection

@section('script')
@endsection

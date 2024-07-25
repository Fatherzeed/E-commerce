@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    {{-- <h1>Welcome, {{ $username }}</h1>
    <p>Your UUID: {{ $uuid }}</p> --}}

    {{-- <div class="absolute lg:top-[30%] lg:left-10 md:top-[20%] md:left-8 gap-0">
        <h2 class="text-3xl font-bold text-left">Fashion</h2>
        <h2 class="lg:text-7xl text-6xl font-bold text-left ml-2">Sh<span class="text-sky-600">op</span></h2>
        <h3 class="mt-2 md:text-lg font-medium">For You and Partner...</h3>
    </div> --}}


    <section
        class="hero flex h-[70dvh] bg-gradient-to-tl from-cyan-400 via-blue-500 to-blue-700 items-center grow-0 shrink-0 w-full mx-auto">
        <div class="wrapper80 md:mx-auto">
            <div
                class="hero-container relative flex md:h-[65dvh] h-[65dvh] xl:w-[55dvw] lg:w-[75dvw] w-[95dvw] flex-grow-0 flex-shrink-0 mx-auto overflow-x-auto bg-no-repeat md:rounded-xl xl:p-5 space-x-5 snap-x snap-mandatory scrollbar-none rounded-lg">
                <img src="{{ asset('/image/hero.png') }}" alt="Image 1"
                    class="snap-center flex-none w-full h-auto object-cover rounded-lg">
                <img src="{{ asset('/image/hero.png') }}" alt="Image 2"
                    class="snap-center flex-none w-full h-auto object-cover rounded-lg">
                <img src="{{ asset('/image/hero.png') }}" alt="Image 3"
                    class="snap-center flex-none w-full h-auto object-cover rounded-lg">
                <div class="absolute xl:top-[30%] xl:left-10 md:top-[20%] md:left-8 gap-0">
                    <h2 class="text-3xl font-bold text-left">Fashion</h2>
                    <h2 class="lg:text-7xl text-6xl font-bold text-left ml-2">Sh<span class="text-sky-600">op</span></h2>
                    <h3 class="mt-2 md:text-lg font-medium">For You and Partner...</h3>
                </div>
            </div>
        </div>
    </section>


    @include('sections.produk')

    @include('partials.footer')
@endsection

@section('script')
@endsection

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
        <div class="wrapper80 md:mx-auto relative" id="heroArea">
            <div class="hero-container relative flex md:h-[65dvh] h-[65dvh] xl:w-[55dvw] lg:w-[75dvw] w-[95dvw] flex-grow-0 flex-shrink-0 mx-auto overflow-x-auto bg-no-repeat md:rounded-xl xl:p-5 space-x-5 snap-x snap-mandatory scrollbar-none rounded-xl"
                id="hero-container">
                <img src="{{ asset('/image/hero.png') }}" alt="Image 1"
                    class="snap-center flex-none w-full h-auto object-cover rounded-xl">
                <img src="{{ asset('/image/cloth1.jpeg') }}" alt="Image 2"
                    class="snap-center flex-none w-full h-auto object-cover rounded-xl">
                <img src="{{ asset('/image/cloth2.jpeg') }}" alt="Image 3"
                    class="snap-center flex-none w-full h-auto object-cover rounded-xl">
                <div class="absolute xl:top-[30%] xl:left-10 md:top-[20%] md:left-8 gap-0">
                    <h2 class="text-3xl font-bold text-left">Fashion</h2>
                    <h2 class="lg:text-7xl text-6xl font-bold text-left ml-2">Sh<span class="text-sky-600">op</span></h2>
                    <h3 class="mt-2 md:text-lg font-medium">For You and Partner...</h3>
                </div>

            </div>
            <div class="absolute inset-0 flex items-center justify-between">
                <button
                    class="!absolute top-2/4 xl:start-[10%] lg:start-[-5%] start-5 -translate-y-2/4 rounded-full select-none transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] bg-gray-100 text-blue-400 hover:text-white hover:bg-blue-600 active:bg-white/30 grid place-items-center"
                    id="hero-left-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="3" class="-ml-1 h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                    </svg></button>
                <button
                    class="!absolute top-2/4 xl:end-[10%] lg:end-[-5%] end-5 -translate-y-2/4 rounded-full select-none transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] bg-gray-100 text-blue-400 hover:text-white hover:bg-blue-600 active:bg-white/30 grid place-items-center"
                    id="hero-right-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="3" class="ml-1 h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                        </></button>
            </div>

        </div>
    </section>



    @include('sections.produk')

    @include('partials.footer')
@endsection

@section('script')
@endsection

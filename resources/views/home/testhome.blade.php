@extends('partials.main')


@section('content')

        @include('partials.navbar')
        @include('partials.cart')

        <section class="hero flex h-[70dvh] bg-red-600 items-center grow-0 shrink-0 w-full mx-auto border-2 border-black">
            <div class="wrapper80 mx-auto">
                <div class="hero-container flex md:h-[60dvh] h-[70dvh] w-[40dvw] flex-grow-0 flex-shrink-0 mx-auto overflow-hidden bg-cover bg-top bg-no-repeat"
                    style="background-image: url('/image/hero.png');">
                    {{-- <img src="{{ asset('image/hero.png') }}" alt="" class="w-full">  --}}
                </div>
            </div>
        </section>

        @include('sections.produk')

        <section class="h-[80dvh] bg-green-500">

        </section>
        <section class="h-[80dvh]">

        </section>

@endsection

@section('script')
@endsection

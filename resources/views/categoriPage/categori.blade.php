@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')

   


    <section
    class="hero flex h-[55dvh]  items-center grow-0 shrink-0 w-[89.8dvw] mx-auto">
        <div class="relative flex md:h-[50dvh] h-[50dvh] xl:w-[90dvw] lg:w-[75dvw] w-[95dvw] mx-auto overflow-x-auto">
                <img src="{{ asset('/image/img-login.jpg') }}" alt="" 
                    class="flex-none w-[84.3dvw] object-cover mx-auto">
               
                <div class="absolute xl:top-[30%] xl:left-60 md:top-[20%] md:left-8 gap-0">
                    <h2 class="text-3xl font-bold text-center">OUTFIT TRENDI PRIA</h2>
                    <h2 class="lg:text-xl text-6xl font-bold text-center ml-2 text-white">DI BAWAH<span class="text-7xl text-red-600">500</span></h2>
                   
                </div>

            </div>
    </section>



    @include('sections.populer')
    @include('sections.kategori-produk')

    @include('partials.footer')
@endsection

@section('script')
@endsection

@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')

   


    <section
    class="hero wrapper90 flex h-[55dvh]  items-center mx-auto">
        <div class="relative flex md:h-[50dvh] h-[50dvh] xl:w-full lg:w-[75dvw] w-[95dvw] mx-auto overflow-x-auto">
                <img src="{{ asset('/image/img-login.jpg') }}" alt="" 
                    class="flex-none w-full object-cover mx-auto">
            </div>
    </section>

    @include('categori.produk.kategori-produk')

    @include('partials.footer')
@endsection

@section('script')
@endsection

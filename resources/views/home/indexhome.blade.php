@extends('partials.main')


@section('content')

@include('partials.navbar')
@include('partials.cart')

<section class="hero flex h-[70dvh] bg-blue-600 items-center">
    <div class="hero-container flex md:h-[60dvh] h-[70dvh] w-[70dvw] mx-auto  overflow-hidden ">
      <img src="{{ asset('image/hero.png') }}" alt="" class="w-full"> 
    </div>
</section>

@include('sections.produk')

<section class="h-[80dvh]">

</section>
<section class="h-[80dvh]">

</section>
    
@endsection

@section('script')

@endsection
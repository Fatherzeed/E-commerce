@extends('partials.main')


@section('content')

@include('partials.navbar')
@include('partials.cart')

<section class="hero flex h-[80dvh] bg-blue-600 items-center">
    <div class="hero-container flex md:h-[40dvh] h-[70dvh] w-[80dvw] mx-auto border-2 border-red-500 overflow-y-auto">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime harum sit quam repellendus? Doloremque quod tempore alias. Eaque, quam sed necessitatibus odit, quidem consequatur earum inventore fugiat ipsam sint consectetur. Incidunt accusamus similique enim deserunt id nisi quos ad eos, accusantium cum asperiores est rerum sunt, aut, quia nostrum.</p>
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
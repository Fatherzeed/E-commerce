@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    <section class="bg-blue-500">
        <div class="py-5 mx-auto">
            <h1 class="textJudul text-center text-white">All Categories</h1>
        </div>

    </section>

  
    @include('sections.kategori')
    @include('partials.footer')
@endsection

@section('script')
@endsection

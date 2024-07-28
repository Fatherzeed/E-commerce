@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    <section class="bg-blue-300">
        <div class="max-w-7xl h-[60dvh] mx-auto bg-white flex gap-x-5 py-10">
            <div class="max-w-4xl mx-auto flex">

                <div class="relative">
                    @include('partials.sidebar')
                    <div class="p-10 shadow-xl">
                        <div class="w-full h-full bg-white flex flex-between">
                            <div class="flex flex-col text-center text-[2rem] font-semibold shrink-0">
                                <img src="{{ asset('/image/hero.png') }}" alt="" class="size-64 rounded-full object-cover object-center">
                                <h2>John Doe</h2>
                            </div>
                            {{-- Taruh disini ya --}}
                            <div class="flex flex-col pl-10 flex-grow">
                                <ul class="text-left">
                                    <h1 class="font-bold">Biodata Diri</h1>
                                    <li class="flex justify-between"><span>Name</span><span>: John Doe</span></li>
                                    <li class="flex justify-between"><span>Birth Date</span><span>: 11 November 1997</span></li>
                                    <li class="flex justify-between"><span>Gender</span><span>: Perempuan</span></li>
                                </ul>
                                <ul class="text-left mt-6">
                                    <h1 class="font-bold">Kontak</h1>
                                    <li class="flex justify-between"><span>Email</span><span>: Johndoe@gmail.com</span></li>
                                    <li class="flex justify-between"><span>Phone Contact</span><span>: 082299282828</span></li>
                                </ul>
                                <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection

@section('script')
@endsection

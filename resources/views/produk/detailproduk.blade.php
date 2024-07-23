@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')
    <div class="bg-white">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Product Images -->
                <div class="w-full md:w-3/4 px-4 flex xl:flex-row flex-col gap-x-5">
                    <div class="flex items-start justify-center xl:mb-0 mb-4">
                        <img src="{{asset('image/cloth1.jpeg')}}"
                            alt="Product" class="w-full h-auto object-cover object-center rounded-lg shadow-md mb-4" id="mainImage">
                    </div>
                    <div class="flex xl:flex-col items-center xl:justify-start justify-center gap-4 overflow-x-auto">
                        <img src="{{asset('image/cloth1.jpeg')}}"
                            alt="Thumbnail 1"
                            class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth2.jpeg')}}"
                            alt="Thumbnail 2"
                            class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth3.jpeg')}}"
                            alt="Thumbnail 3"
                            class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth4.jpeg')}}"
                            alt="Thumbnail 4"
                            class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/4 px-4 flex flex-col justify-start">
                    <h2 class="text-3xl font-bold mb-2">Premium Wireless Headphones</h2>
                    <p class="text-gray-600 mb-4">SKU: WH1000XM4</p>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2">Rp. 1.000.000</span>
                    </div>
                    <p class="text-gray-700 mb-6">Experience premium sound quality and industry-leading noise cancellation
                        with
                        these wireless headphones. Perfect for music lovers and frequent travelers.</p>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Color:</h3>
                        <div class="flex space-x-2">
                            <button
                                class="w-8 h-8 bg-black rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black"></button>
                            <button
                                class="w-8 h-8 bg-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"></button>
                            <button
                                class="w-8 h-8 bg-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"></button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-12 text-center rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex space-x-4 mb-6">
                        <button
                            class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            Add to Cart
                        </button>
                        <button
                            class="bg-gray-200 flex gap-2 items-center  text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                            Wishlist
                        </button>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Key Features:</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Industry-leading noise cancellation</li>
                            <li>30-hour battery life</li>
                            <li>Touch sensor controls</li>
                            <li>Speak-to-chat technology</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    @include('partials.footer')
@endsection

@section('script')
    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
@endsection

@extends('partials.main')


@section('content')
    @include('partials.navbar')
    @include('partials.cart')
    <div class="bg-white">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Product Images -->
                <div class="w-full lg:w-auto xl:max-w-[60%] lg:max-w-[50%] px-4 flex xl:flex-row flex-col gap-x-5">
                    <div class="flex items-start justify-center xl:mb-0 mb-4 lg:max-w-[85%] xl:max-h-[80%]">
                        <img src="{{asset('image/cloth1.jpeg')}}"
                            alt="Product" class="w-full h-auto object-cover object-center rounded-lg shadow-md mb-4" id="mainImage">
                    </div>
                    <div class="flex xl:flex-col items-center xl:justify-start justify-center gap-4 overflow-x-auto lg:mt-5 md:mt-10 xl:mt-0">
                        <img src="{{asset('image/cloth1.jpeg')}}"
                            alt="Thumbnail 1"
                            class="size-16 sm:size-20 object-cover rounded-md shadow-lg hover:border-2 hover:border-blue-600 cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth2.jpeg')}}"
                            alt="Thumbnail 2"
                            class="size-16 sm:size-20 object-cover rounded-md shadow-lg hover:border-2 hover:border-blue-600 cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth3.jpeg')}}"
                            alt="Thumbnail 3"
                            class="size-16 sm:size-20 object-cover rounded-md shadow-lg hover:border-2 hover:border-blue-600 cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{asset('image/cloth4.jpeg')}}"
                            alt="Thumbnail 4"
                            class="size-16 sm:size-20 object-cover rounded-md shadow-lg hover:border-2 hover:border-blue-600 cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full lg:w-auto xl:max-w-[35%] lg:max-w-[45%] px-4 flex flex-col justify-start xl:mt-0 mt-5">
                    <h2 class="text-3xl font-bold mb-2">Baju untuk membuktikan Kejantanan</h2>
                    <p class="text-gray-600 mb-4">Kode Product : BJ0001</p>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2 text-red-500">Rp. 1.000.000</span>
                    </div>
                    <p class="text-gray-700 mb-6">Baju ini digunakan untuk para Lelaki agar bisa membuktikan Kejantanan beliau dengan Gambar yang super duper menggambarkan sebuah Kejantanan</p>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Varian :</h3>
                        <div class="flex space-x-2">
                            <button
                                class="w-8 h-8 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 text-black border-2 border-blue-600 hover:text-white hover:bg-blue-600 hover:border-gray-50">1</button>
                            <button
                                class="w-8 h-8 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 text-black border-2 border-blue-600 hover:text-white hover:bg-blue-600 hover:border-gray-50">2</button>
                            <button
                                class="w-8 h-8 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 text-black border-2 border-blue-600 hover:text-white hover:bg-blue-600 hover:border-gray-50">3</button>
                            <button
                                class="w-8 h-8 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 text-black border-2 border-blue-600 hover:text-white hover:bg-blue-600 hover:border-gray-50">4</button>
                            <button
                                class="w-8 h-8 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 text-black border-2 border-blue-600 hover:text-white hover:bg-blue-600 hover:border-gray-50">5</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-12 text-center rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border-2 hover:border-black">
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
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Spesifikasi :</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Bahan Katun</li>
                            <li>Anti Bakteri</li>
                            <li>Warna tidak akan Luntur</li>
                            <li>Awet Puoool</li>
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

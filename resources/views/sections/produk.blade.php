<section class="produk-section w-full bg-white grow-0 shrink-0">
    <div id="collectionContainer" class="wrapper90 flex flex-col grow-0 shrink-0 py-10 mx-auto gap-y-2 text-center">
        <div class="w-full flex flex-col items-center gap-y-2">
            <h2 class="textJudul w-fit border-b-[3px] border-black pb-1 px-5">Categories</h2>
            <h4>Cari Kategori sesuai Keinginan mu di bawah ini</h4>
        </div>

        <div class="relative">
            <button id="arrow-left"
                class="arrow-left absolute left-0 rounded-full text-white p-2 cursor-pointer z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="3" class="-ml-1 h-7 w-7 text-blue-600 bg-white hover:bg-blue-500 ring-blue-500 ring-[0.5px] hover:text-white rounded-full p-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                </svg>
            </button>
            <button id="arrow-right"
                class="arrow-right absolute right-0  rounded-full text-white p-2 cursor-pointer z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="3" class="ml-1 h-7 w-7 text-blue-600 bg-white hover:bg-blue-500 ring-blue-500 ring-[0.5px] hover:text-white rounded-full p-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </>
            </button>
            <div id="kategoriContainer"
                class="kategoriContainer flex flex-row p-2 overflow-x-auto scroll-smooth snap-x scrollbar-none">
                <!-- Kategori Items -->
                <div class="kategoriItem flex-shrink-0 snap-center w-[22em] h-100 p-4 mr-4 text-center overflow-hidden">
                    <div class="relative overflow-hidden w-full h-80">
                        <img class="w-full h-80 object-cover rounded-md transform transition-transform duration-500 hover:scale-110"
                            src="{{ asset('image/product1.jpg') }}" alt="produk 1">
                    </div>
                    <h3 class="font-poppins font-semibold text-2xl mt-2">Baju Pria</h3>
                </div>
                <div class="kategoriItem flex-shrink-0 snap-center w-[22em] h-100 p-4 mr-4 text-center overflow-hidden">
                    <div class="relative overflow-hidden w-full h-80">
                        <img class="w-full h-80 object-cover rounded-md transform transition-transform duration-500 hover:scale-110"
                            src="{{ asset('image/product1.jpg') }}" alt="produk 1">
                    </div>
                    <h3 class="font-poppins font-semibold text-2xl mt-2">Baju Pria</h3>
                </div>
                <div class="kategoriItem flex-shrink-0 snap-center w-[22em] h-100 p-4 mr-4 text-center overflow-hidden">
                    <div class="relative overflow-hidden w-full h-80">
                        <img class="w-full h-80 object-cover rounded-md transform transition-transform duration-500 hover:scale-110"
                            src="{{ asset('image/product1.jpg') }}" alt="produk 1">
                    </div>
                    <h3 class="font-poppins font-semibold text-2xl mt-2">Baju Pria</h3>
                </div>
                <div class="kategoriItem flex-shrink-0 snap-center w-[22em] h-100 p-4 mr-4 text-center overflow-hidden">
                    <div class="relative overflow-hidden w-full h-80">
                        <img class="w-full h-80 object-cover rounded-md transform transition-transform duration-500 hover:scale-110"
                            src="{{ asset('image/product1.jpg') }}" alt="produk 1">
                    </div>
                    <h3 class="font-poppins font-semibold text-2xl mt-2">Baju Pria</h3>
                </div>
                <div class="kategoriItem flex-shrink-0 snap-center w-[22em] h-100 p-4 mr-4 text-center overflow-hidden">
                    <div class="relative overflow-hidden w-full h-80">
                        <img class="w-full h-80 object-cover rounded-md transform transition-transform duration-500 hover:scale-110"
                            src="{{ asset('image/product1.jpg') }}" alt="produk 1">
                    </div>
                    <h3 class="font-poppins font-semibold text-2xl mt-2">Baju Pria</h3>
                </div>

                <!-- Tambahkan lebih banyak kategoriItem sesuai kebutuhan -->
            </div>
        </div>
    </div>


    <div class="brandNew bg-gray-100 w-full py-10">
        <h1 class="textJudul w-full text-center">Brand New Items !</h1>
        <div class="wrapper90 mx-auto grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 ">
            <!-- Brand new Items -->
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
            <div
                class="mx-auto mt-11 w-64 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg font-poppins">
                <img class="h-48 w-full object-cover object-center relative"
                    src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Product Image" />
                <span
                    class="absolute text-white rounded-full text-xs p-2 top-2 right-2 tracking-thin bg-red-500">New!</span>
                <div class="p-4 text-center">
                    <h2 class="text-lg font-medium text-gray-900">Product Name</h2>
                    <p class="text-lg font-semibold text-red-600">Rp 100.000</p>
                </div>
            </div>
        </div>

    </div>
</section>

<aside id="cartbar" class="closecart h-[100dvh] lg:w-[30dvw] md:w-[50dvw] w-[90dvw] border-2  bg-white fixed z-50 top-0 right-0 rounded-l-xl p-5 pr-10 lg:pr-5">
    <div class="w-full h-full grid grid-rows-8 scroll-m-2">
        <div class="mb-5">
            <button id="closeCartBtn" class="group absolute top-6 left-6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="group text-black w-7 h-7 group-hover:text-blue-500" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
              </button>
              <div class="text-right px-5 border-b">
                <h2 class="font-poppins font-semibold text-3xl">Cart</h2>
                <h4 class="tracking-wide text-sm text-gray-500">Total item di Keranjang : 54</h4></div>
        </div>

        {{-- Card Produk dalam Cart --}}

        <div class="grid grid-flow-row row-span-5 gap-y-5 overflow-y-auto scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar scrollbar-thumb-slate-700 scrollbar-track-slate-300">
            <div class="cartProduct flex flex-row gap-x-2 h-36 w-full px-5 border-b">
                <div class="p-1 max-w-1/3 relative">
                    <img src="{{asset('image/hero.png')}}" alt="Gambar Product" class="h-full w-36 object-center object-cover rounded-lg ">
                    <button class="group absolute top-0 left-0"><svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-white group-hover:fill-red-500 group-hover:text-white group-hover:border-white" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      </button>
                </div>
                <div class="text-xl font-semibold font-sans py-2 gap-y-5 max-w-2/3">
                    <h2 class="textProduk">Baju Pria lanang iki bos</h2>
                    <p class="textQty">Qty : 1</p>
                    <p class="textHarga">Rp.1.000.000</p>
                </div>
            </div>
            <div class="cartProduct flex flex-row gap-x-2 h-36 w-full px-5 border-b">
                <div class="p-1 max-w-1/3 relative">
                    <img src="{{asset('image/hero.png')}}" alt="Gambar Product" class="h-full w-36 object-center object-cover rounded-lg ">
                    <button class="group absolute top-0 left-0"><svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-white group-hover:fill-red-500 group-hover:text-white group-hover:border-white" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      </button>
                </div>
                <div class="text-xl font-semibold font-sans py-2 gap-y-5 max-w-2/3">
                    <h2 class="textProduk">Baju Pria lanang iki bos</h2>
                    <p class="textQty">Qty : 1</p>
                    <p class="textHarga">Rp.1.000.000</p>
                </div>
            </div>
            <div class="cartProduct flex flex-row gap-x-2 h-36 w-full px-5 border-b">
                <div class="p-1 max-w-1/3 relative">
                    <img src="{{asset('image/hero.png')}}" alt="Gambar Product" class="h-full w-36 object-center object-cover rounded-lg ">
                    <button class="group absolute top-0 left-0"><svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-white group-hover:fill-red-500 group-hover:text-white group-hover:border-white" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      </button>
                </div>
                <div class="text-xl font-semibold font-sans py-2 gap-y-5 max-w-2/3">
                    <h2 class="textProduk">Baju Pria lanang iki bos</h2>
                    <p class="textQty">Qty : 1</p>
                    <p class="textHarga">Rp.1.000.000</p>
                </div>
            </div>
            <div class="cartProduct flex flex-row gap-x-2 h-36 w-full px-5 border-b">
                <div class="p-1 max-w-1/3 relative">
                    <img src="{{asset('image/hero.png')}}" alt="Gambar Product" class="h-full w-36 object-center object-cover rounded-lg ">
                    <button class="group absolute top-0 left-0"><svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-white group-hover:fill-red-500 group-hover:text-white group-hover:border-white" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      </button>
                </div>
                <div class="text-xl font-semibold font-sans py-2 gap-y-5 max-w-2/3">
                    <h2 class="textProduk">Baju Pria lanang iki bos</h2>
                    <p class="textQty">Qty : 1</p>
                    <p class="textHarga">Rp.1.000.000</p>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-3 items-center px-10 gap-x-7 border-t">
            <div class="items-center"><h4 class="text-2xl font-medium">Total :</h4></div>
            <div class="col-span-2 items-center text-right"><h4 class="text-xl text-red-600 font-medium">Rp, 4,000,000</h4></div>
        </div>
        <div class="flex items-center justify-start px-10 gap-x-7 border-t">
            <button id="checkoutBtn" class="w-auto h-auto px-3 py-2 bg-active-200 font-poppins font-medium rounded-md">Checkout</button>
        </div>
    </div>
</aside>
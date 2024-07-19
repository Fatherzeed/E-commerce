    <nav class="bg-white shadow-lg w-screen sticky top-0 z-20">
        <div class="nav-container flex lg:max-w-6xl w-full h-14 mx-auto">
            <div class="content grid grid-cols-3 px-4 w-full">
                <div class="flex flex-shrink-0 items-center ">
                    <a class="flex flex-shrink-0 items-center hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"
                        href="{{ route('home') }}">
                        <img class="h-10 w-auto" src="{{ asset('image/laravellogo.png') }}" alt="Logo" />
                        <span
                            class="lg:block hidden text-black text-3xl font-bold after:content-['op'] after:text-blue-600 ml-2">Sh</span></a>
                </div>
                
                <div class="hidden w-full md:flex justify-center  items-center gap-x-10">
                    <a class="garisbawah" href="">Home</a>
                    <a class="garisbawah" href="">Categories</a>
                </div>
                <div class="hidden md:flex w-full lg:justify-start md:justify-center items-center gap-x-5 lg:ml-[80px]">
                    <button class="group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            class="group group-hover:text-blue-600  w-7 h-7" viewBox="0 0 24 24" stroke-width="1.3"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                    <button id="openCartBtn" class="group"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            class="group group-hover:text-blue-600  w-7 h-7" viewBox="0 0 24 24" stroke-width="1.3"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <nav class="bg-white shadow-lg w-full sticky top-0 z-20">
        <div class="nav-container wrapper80 flex lg:max-w-6xl h-14 mx-auto">
            <div class="content grid grid-cols-5 px-4 w-full">
                <div class="flex flex-shrink-0 items-center ">
                    <a class="flex flex-shrink-0 items-center hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"
                        href="{{ route('home') }}">
                        <img class="h-10 w-auto" src="{{ asset('image/laravellogo.png') }}" alt="Logo" />
                        <span
                            class="lg:block hidden text-black text-3xl font-bold after:content-['op'] after:text-blue-600 ml-2">Sh</span></a>
                </div>
                <div class="hidden col-span-3 w-full md:flex justify-center  items-center gap-x-10 ">
                    <form
                        class="group form-inline flex w-full items-center hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"
                        action="" method="GET">
                        <input
                            class="h-10  form-input flex-grow px-4 py-2 rounded-l-xl border-2 border-r-0 text-sm font-poppins group-hover:border-blue-700  active:border-blue-700 focus:outline-none"
                            type="search" placeholder="Search Here..." aria-label="Search">
                        <button
                            class="h-10 my-2 -ml-px  px-4 py-2 border-2 border-l-0 rounded-r-xl group-hover:border-blue-700"
                            type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                                    class="text-gray-300 group-hover:text-blue-700 " />
                            </svg>
                        </button>
                    </form>
                    <a class="garisbawah font-poppins hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"
                        href="">Home</a>
                    <a class="garisbawah font-poppins hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"
                        href="">Categories</a>
                </div>
                <div class="hidden md:flex w-full lg:justify-start md:justify-center items-center gap-x-5 pl-36">
                    <button id="openCartBtn" class="group hover:scale-110 duration-300 hover:skew-x-10 ease-in-out"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none"
                            class="group group-hover:text-blue-600  w-7 h-7" viewBox="0 0 24 24" stroke-width="1.3"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                    <button class="group hover:scale-110 duration-300 hover:skew-x-10 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            class="group group-hover:text-blue-600  w-7 h-7" viewBox="0 0 24 24" stroke-width="1.3"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

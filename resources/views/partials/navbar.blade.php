<nav class="bg-white shadow-lg w-full sticky top-0 z-20">
    <div class="nav-container wrapper90 flex h-14 mx-auto">
        <div class="content grid grid-cols-5 px-4 w-full">
            <!-- Logo and Brand Name -->
            <div class="flex items-center col-span-4 md:col-span-1">
                <a href="{{ route('home') }}"
                    class="flex items-center hover:scale-105 duration-300 hover:skew-x-10 ease-in-out">
                    <span
                        class="block text-black text-4xl font-bold lg:ml-2 after:content-['op'] after:text-blue-600">Sh</span>
                </a>
            </div>

            <!-- Search Bar and Navigation Links -->
            <div class="hidden md:flex col-span-3 items-center justify-center lg:gap-x-10 gap-x-5 w-full">
                <form action="" method="GET"
                    class="group flex w-full items-center hover:scale-105 duration-300 hover:skew-x-10 ease-in-out">
                    <input type="search" placeholder="Search Here..." aria-label="Search"
                        class="h-10 flex-grow px-4 py-2 rounded-l-xl border-2 border-r-0 text-xs font-poppins group-hover:border-blue-700 focus:outline-none" />
                    <button type="submit"
                        class="group h-10 px-4 py-2 border-2 border-l-0 rounded-r-xl group-hover:border-blue-700 -ml-px group-hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 text-gray-300 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
                <a href="{{ route('home') }}"
                    class="h-full hidden xl:flex items-center border-b-[4px] border-transparent hover:text-blue-600 hover:scale-105 hover:border-blue-600 font-poppins text-sm duration-300 hover:skew-x-10 ease-in-out">Home</a>
                <a href="/categories"
                    class="h-full flex items-center font-poppins border-b-[4px] border-transparent hover:text-blue-600 hover:scale-105 hover:border-blue-600 text-sm duration-300 hover:skew-x-10 ease-in-out">Categories</a>
            </div>

            <!-- User Info and Cart Button -->
            <div class="hidden md:flex items-center lg:pl-10 pl-5">
                <button id="openCartBtn"
                    class="group flex items-center h-full hover:scale-110 duration-300 hover:skew-x-10 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                        stroke="currentColor" class="w-7 h-7 group-hover:text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
                <div id="profileContainer"
                    class="group relative h-full ml-5 flex items-center cursor-pointer border-b-4 border-transparent hover:border-blue-600 duration-300 ease-in-out">
                    @guest
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="w-8 group-hover:text-blue-600 duration-300 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    @endguest
                    @auth
                        <img src="{{ Auth::user()->profile_photo }}" class="w-8 h-8 rounded-full object-cover object-top"
                            alt="">
                        <h4
                            class="pl-1 font-poppins text-sm group-hover:text-blue-600 duration-300 ease-in-out select-none">
                            @if (Auth::check())
                                {{ Auth::user()->username }}
                            @else
                            @endif
                    </h4>@endauth

                    <svg id="arrowDown" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor"
                        class="w-3 group-hover:text-blue-600 duration-300 ease-in-out ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                    <div class="absolute hidden top-[100%] @if (Auth::check()) inset @else left-[-2em] @endif w-32 h-auto"
                        id="dropdownContainer">
                        <ul
                            class="flex flex-col items-center shadow-lg border-t-4 border-blue-600 bg-blue-600 rounded-b-lg">
                            @guest
                                <a class="dropdownContent w-full text-xs p-2 " href="{{ route('login') }}">
                                    <li>Login</li>
                                </a>
                            @endguest
                            @auth
                                <a class="dropdownContent w-full text-xs p-2 " href="{{ route('profile') }}">
                                    <li>My Profile</li>
                                </a>
                                <a class="dropdownContent w-full text-xs p-2 " href="#">
                                    <li>Edit Profile</li>
                                </a>
                                <hr>
                                <a class="dropdownContent w-full text-xs p-2 rounded-b-lg" href="{{ route('logout') }}">
                                    <li>Logout</li>
                                </a>
                            @endauth
                        </ul>
                    </div>

                </div>
            </div>

            <div class="md:hidden flex items-center justify-center">
                <button class="" id="mobileMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-gray-600 hover:text-gray-800 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                </button>
            </div>
            <div id="mobileMenu" class="hidden md:hidden fixed z-[2] inset-0 bg-gray-800 bg-opacity-75 overflow-y-auto h-full w-full flex flex-col items-center justify-center p-4">
                <div class="relative w-full max-w-[400px]">
                    <div class="relative flex flex-col w-full bg-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-between p-4 border-b border-gray-300">
                            <h3 class="text-lg font-bold">Menu</h3>
                            <button id="closeMobileMenu"
                                class="text-gray-400 hover:text-gray-600 focus:outline-none transition-colors duration-200 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 space-y-4">
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-200 rounded-lg transition-colors duration-200 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Menu Item
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-200 rounded-lg transition-colors duration-200 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Menu Item
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

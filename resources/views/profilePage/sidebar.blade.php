<aside class="mb-3">
    <div class="lg:w-48 lg:px-0 px-5">
        <div class="px-5 py-5 lg:border-r-[4px] border-r-0 lg:border-b-0 border-b-[4px] border-gray-300 flex lg:flex-col">
            <ul class="flex flex-1 flex-col gap-y-2">
                <div class="flex">
                    <i><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-blue-600 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </i>
                    <h1 class="lg:text-[1.4em] text-[1em] font-bold">My Profile</h1>
                </div>
                <div class="flex lg:flex-col gap-y-2 gap-x-5 ml-2 text-lg">
                    <a class="cursor-pointer" href="{{route('profile')}}">
                        <li class="hover:text-blue-500 text-[0.9em] lg:text-[1em]">Profile</li>
                    </a>
                    <a class="cursor-pointer" href="{{route('address')}}">
                        <li class="hover:text-blue-500 text-[0.9em] lg:text-[1em]">Address</li>
                    </a>
                </div>

            </ul>
            <ul class="flex flex-1 flex-col gap-y-2 lg:mt-5 ml-4 lg:ml-0 lg:border-l-0 border-l-[4px] border-gray-300 pl-3 lg:pl-0">
                <div class="flex">
                    <i><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-blue-600 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </i>
                    <h1 class="lg:text-[1.4em] text-[1em] font-bold">My Order</h1>
                </div>
                <div class="flex flex-col gap-y-2 ml-2 text-lg">
                    <a class="cursor-pointer" href="">
                        <li class="hover:text-blue-500 text-[0.9em] lg:text-[1em]">Payments</li>
                    </a>
                </div>

            </ul>
        </div>

    </div>
</aside>

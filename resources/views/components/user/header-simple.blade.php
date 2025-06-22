<header class="bg-white sticky top-0 inset-x-0 border-b shadow-sm z-20">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <img alt="Selera Panca Logo" class="h-14 rounded-xl" src="{{ asset('images/los_pollos_hermanos_2.png') }}" />
            <div class="flex items-center gap-x-4 ml-10">
                <p class="font-medium">{{ $title }}</p>
            </div>
        </div>
        <div class="flex items-center gap-x-4">
            @auth
            @if (Auth::user()->role == 'user')
            <div class="hs-dropdown relative [--strategy:absolute] inline-flex">
                <button id="hs-dropdown-custom-trigger" type="button"
                    class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <span class="text-gray-600 font-medium truncate max-w-[8rem]">{{ Auth::user()->name }}</span>
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-0 lg:start-auto lg:end-0 min-w-[250px] bg-white shadow-md rounded-lg mt-2 border border-gray-200"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">
                    <div class="py-3 px-4 border-b border-gray-200">
                        <div class="flex items-center gap-x-3">
                            <div>
                                <p class="text-sm font-medium text-gray-800">{{ Auth::user()->name }}</p>
                                <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 space-y-1">
                        <!-- <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="/profile">
                            <i class="ri-user-3-line"></i> My Profile <i class="ri-arrow-right-wide-fill ml-auto"></i>
                        </a>
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="/order/history">
                            <i class="ri-shopping-basket-line"></i> Purchases <i class="ri-arrow-right-wide-fill ml-auto"></i>
                        </a> -->
                        <form action="{{ route('logout') }}" method="post" class="flex">
                            @csrf
                            <button type="submit" class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 w-full">
                                <i class="ri-logout-box-line"></i> Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endauth
        </div>
    </div>
</header>

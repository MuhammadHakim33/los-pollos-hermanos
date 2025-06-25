@php
$isCartEmpty = count($carts) > 0 ? true : false;
@endphp


<header class="bg-white sticky top-0 inset-x-0 border-b shadow-sm z-10">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <img alt="Selera Panca Logo" class="h-14 rounded-xl" src="{{ asset('images/los_pollos_hermanos_2.png') }}" />
            <div class="flex items-center gap-x-4 ml-10">
                <p class="font-medium">Cabang</p>
                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Universitas Pancasila
                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                        <div class="p-1 space-y-0.5">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                                Universitas Indonesia
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                                Universitas Gunadarma
                            </a>
                        </div>
                    </div>
                </div>
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
            @guest
            <a href="{{ route('login') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-transparent disabled:pointer-events-none hover:bg-gray-100 focus:bg-gray-100">
                Log in
            </a>
            <a href="{{ route('register') }}"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-transparent bg-gray-200 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:pointer-events-none">
                Register
            </a>
            @endguest
            <button type="button" @class(['flex','shrink-0','justify-center','items-center','gap-2','size-[38px]','text-sm','font-medium','rounded-lg','border', 'border-green-700'=> $isCartEmpty, 'hover:bg-gray-100','focus:bg-gray-100']) aria-haspopup="dialog" aria-expanded="false" aria-controls="modal-cart" data-hs-overlay="#modal-cart">
                <i @class(['ri-shopping-basket-line', 'ri-lg' , 'text-green-700'=> $isCartEmpty])></i>
            </button>
        </div>
    </div>
</header>


<div id="modal-cart"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="modal-cart-label">
    <div
        class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-md sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-sm pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="modal-cart-label" class="font-medium text-gray-800">Keranjang</h3>
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                    aria-label="Close" data-hs-overlay="#modal-cart">
                    <i class="ri-close-large-fill"></i>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                @auth
                <ul class="flex flex-col divide-y divide-gray-200">
                    @if($carts->count())
                    @foreach ($carts as $item)
                    <li class="inline-flex items-center gap-x-2 py-3 text-sm text-gray-800">
                        <div class="inline-block bg-white mr-1" data-hs-input-number='{"min":1}'>
                            <div class="flex items-center gap-x-1.5">
                                <!-- DELETE -->
                                <form action="/cart/{{ $item->rowId }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                </form>
                                <!-- DECREASE -->
                                <!-- <form action="/cart/{{ $item->rowId }}/decrease" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="qty" value="{{ $item->qty }}" readonly hidden>
                                    <button type="submit" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" @disabled($item->qty == 1)>
                                        <i class="ri-subtract-fill ri-lg"></i>
                                    </button>
                                </form> -->
                                <!-- QUANTITY -->
                                <!-- <input class="p-0 w-4 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" value="{{ $item->qty }}"> -->
                                <!-- INCREASE -->
                                <!-- <form action="/cart/{{ $item->rowId }}/increase" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="qty" value="{{ $item->qty }}" readonly hidden>
                                    <button type="submit" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                        <i class="ri-add-fill ri-lg"></i>
                                    </button>
                                </form> -->
                                <form action="/cart/{{ $item->rowId }}/update" method="post" class="flex items-center gap-x-1.5" id="form-update-qty">
                                    @csrf
                                    @method('PUT')

                                    <!-- Tombol MIN -->
                                    <button type="button" class="qty-btn size-7 rounded border bg-white text-gray-800" onclick="adjustQty(this, -1)">
                                        <i class="ri-subtract-fill ri-lg"></i>
                                    </button>

                                    <!-- Input Qty -->
                                    <input
                                        type="number"
                                        name="qty"
                                        min="1"
                                        value="{{ $item->qty }}"
                                        class="input-qty p-0 w-8 bg-transparent border rounded border-gray-200 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                    >
                                    <!-- Tombol PLUS -->
                                    <button type="button" class="qty-btn size-7 rounded border bg-white text-gray-800" onclick="adjustQty(this, 1)">
                                        <i class="ri-add-fill ri-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <p>{{ $item->name }}</p>
                        <p class="ml-auto">{{ number_format($item->total) }}</p>
                    </li>
                    @endforeach
                    @else
                    <li class="mx-auto italic text-gray-500">Pilih Menu</li>
                    @endif
                </ul>
                @endauth
                @guest
                    <p class="text-center italic text-gray-500">Login untuk melihat isi keranjang</p>
                @endguest
            </div>
            @auth
            @if($carts->count())
            <div class="bg-gray-50 py-3 px-4 border-t">
                <div class="flex justify-between mb-4">
                    <h3 class="font-medium">Subtotal</h3>
                    <p class="font-medium">Rp {{ number_format($subtotal) }}</p>
                </div>
                <a class="block py-2 px-3 w-full text-sm text-center font-medium rounded border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/checkout">Pesan</a>
            </div>
            @endif
            @endauth
        </div>
    </div>
</div>

<script>
function adjustQty(button, delta) {

    const form = document.getElementById('form-update-qty');
    const input = form.querySelector('.input-qty');

    let qty = parseInt(input.value) || 1;
    qty += delta;
    if (qty < 1) qty = 1;

    input.value = qty;
    form.submit(); // langsung kirim form
}
</script>

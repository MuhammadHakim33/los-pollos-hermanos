<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <!-- HEADER -->
    <header class="bg-white sticky top-0 inset-x-0 border-b shadow-sm z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img alt="GrabFood Logo" class="h-10" src="https://storage.googleapis.com/a1aa/image/NN1CHnKtSlYvN51XTHLoMARLXbwgGqCSTKUrZw7FDcH1S75E.jpg"/>
            </div>
            <div class="flex items-center gap-x-4">
                <a href="{{ route('login') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-transparent disabled:pointer-events-none hover:bg-gray-100 focus:bg-gray-100">
                    Log in
                </a>
                <a href="{{ route('register') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-transparent bg-gray-200 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:pointer-events-none">
                    Register
                </a>
                <button type="button" class="flex shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-medium rounded-lg border hover:bg-gray-100 focus:bg-gray-100" aria-haspopup="dialog" aria-expanded="false" aria-controls="modal-cart" data-hs-overlay="#modal-cart">
                    <i class="ri-shopping-basket-line ri-lg"></i>
                </button>
            </div>
        </div>
    </header>

    <div id="modal-cart" class="hs-overlay hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="modal-cart-label">
        <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-sm pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="modal-cart-label" class="font-medium text-gray-800">Keranjang</h3>
                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#modal-cart">
                        <i class="ri-close-large-fill"></i>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <ul class="flex flex-col divide-y divide-gray-200">
                        <li class="inline-flex items-center gap-x-2 py-3 text-sm text-gray-800">
                            <div class="inline-block bg-white mr-1" data-hs-input-number="">
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                        <i class="ri-subtract-fill ri-lg"></i>
                                    </button>
                                    <input class="p-0 w-4 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="1" data-hs-input-number-input="">
                                    <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                        <i class="ri-add-fill ri-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <p>Nasi Goreng Ayam</p>
                            <p class="ml-auto">22.000</p>
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 text-sm text-gray-800">
                            <div class="inline-block bg-white mr-1" data-hs-input-number="">
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                        <i class="ri-subtract-fill ri-lg"></i>
                                    </button>
                                    <input class="p-0 w-4 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="1" data-hs-input-number-input="">
                                    <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                        <i class="ri-add-fill ri-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <p>Nasi Goreng Sapi</p>
                            <p class="ml-auto">30.000</p>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 py-3 px-4 border-t">
                    <div class="flex justify-between mb-4">
                        <h3 class="font-medium">Total Harga</h3>
                        <p class="font-medium">Rp 52.000</p>
                    </div>
                    <a class="block py-2 px-3 w-full text-sm text-center font-medium rounded border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- RESTORAN DESK -->
    <section class="bg-white py-8 rounded shadow-sm">
        <div class="container mx-auto px-4 flex flex-wrap justify-between gap-4">
            <div class="lg:max-w-md">
                <h1 class="text-4xl font-bold">Rumah Makan Selera Panca</h1>
                <p class="text-gray-600 mt-2">Asli Indonesia, Aneka Nasi</p>
                <div class="flex mt-2 text-gray-600">
                    <i class="ri-map-pin-2-fill mr-2"></i>
                    <p>Jl. IKPN Bintaro, RT.4/RW.10, Bintaro, Kec. Pesanggrahan Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</p>
                </div>
                <div class="flex mt-2 text-gray-600">
                    <i class="ri-time-fill mr-2"></i>
                    <p>Jam Buka : 17.00 - 23.59</p>
                </div>
            </div>
            <div class="lg:max-w-md border p-4 rounded">
                <h1 class="font-bold">Lokasi anda</h1>
                <div class="flex mt-2 text-gray-600">
                    <i class="ri-map-pin-2-fill mr-2"></i>
                    <p>Jl. IKPN Bintaro, RT.4/RW.10, Bintaro, Kec. Pesanggrahan Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KATALOG -->
    <main class="container mx-auto px-4 mt-8 space-y-6" id="scrollspy-scrollable-parent">
        <section class="bg-white px-4 border-b border-gray-200 rounded sticky z-0">
            <nav class="flex gap-x-6 overflow-auto" data-hs-scrollspy="#scrollspy" data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent">
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm font-medium whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 hs-scrollspy-active:text-blue-600 active" aria-current="page">Aneka Nasi Goreng</a>
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm font-medium whitespace-nowrap text-gray-600 hover:text-blue-600 focus:outline-none focus:text-blue-600 hs-scrollspy-active:text-blue-600">Aneka Mie</a>
                <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm font-medium whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 hs-scrollspy-active:text-blue-600">Aneka Kwe Tiaw</a>
            </nav>
        </section>

        <div id="scrollspy">
            <section id="satu">
                <h2 class="text-xl font-bold mb-4">Aneka Nasi Goreng</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <button class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative">
                        <img class="w-28 object-cover rounded" src="https://storage.googleapis.com/a1aa/image/Dr4vrl0hp0aJCNeHCVkkEOkTNcCXCnsBor0Fe4ofXG59WaPnA.jpg"/>
                        <div class="text-left">
                            <h3 class="mt-2 font-bold capitalize">Nasi Goreng Ayam</h3>
                            <p class="text-gray-600">Nasi goreng dengan topping telor, baso dan ayam suwir.</p>
                            <p class="mt-2 font-medium">Rp. 22.000</p>
                        </div>
                        <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                            <i class="ri-add-fill ri-xl"></i>
                        </div>
                    </button>
                    <button class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative">
                        <img class="w-28 object-cover rounded" src="https://storage.googleapis.com/a1aa/image/Dr4vrl0hp0aJCNeHCVkkEOkTNcCXCnsBor0Fe4ofXG59WaPnA.jpg"/>
                        <div class="text-left">
                            <h3 class="mt-2 font-bold capitalize">Nasi Goreng Ayam</h3>
                            <p class="text-gray-600">Nasi goreng dengan topping telor, baso dan ayam suwir.</p>
                            <p class="mt-2 font-medium">Rp. 22.000</p>
                        </div>
                        <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                            <i class="ri-add-fill ri-xl"></i>
                        </div>
                    </button>
                    <button class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative">
                        <img class="w-28 object-cover rounded" src="https://storage.googleapis.com/a1aa/image/Dr4vrl0hp0aJCNeHCVkkEOkTNcCXCnsBor0Fe4ofXG59WaPnA.jpg"/>
                        <div class="text-left">
                            <h3 class="mt-2 font-bold ">Nasi Goreng Ayam</h3>
                            <p class="text-gray-600">Nasi goreng dengan topping telor, baso dan ayam suwir.</p>
                            <p class="mt-2 font-medium">Rp. 22.000</p>
                        </div>
                        <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                            <i class="ri-add-fill ri-xl"></i>
                        </div>
                    </button>
                    <button class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative">
                        <img class="w-28 object-cover rounded" src="https://storage.googleapis.com/a1aa/image/Dr4vrl0hp0aJCNeHCVkkEOkTNcCXCnsBor0Fe4ofXG59WaPnA.jpg"/>
                        <div class="text-left">
                            <h3 class="mt-2 font-bold capitalize">Nasi Goreng Ayam</h3>
                            <p class="text-gray-600">Nasi goreng dengan topping telor, baso dan ayam suwir.</p>
                            <p class="mt-2 font-medium">Rp. 22.000</p>
                        </div>
                        <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                            <i class="ri-add-fill ri-xl"></i>
                        </div>
                    </button>
                </div>
            </section>
        </div>
    </main>

    <footer class="mt-5"></footer>

    <script src="../node_modules/preline/dist/preline.js"></script>
</body>
</html>
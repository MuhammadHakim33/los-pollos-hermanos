<x-user-layout>
    <x-user.header-simple :title="'Detail Pesanan'" />

    @php
        \Carbon\Carbon::setLocale('id');
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 container mx-auto mt-2 pt-10">
        <!-- Order Info -->
        <div class="col-span-full">
            <h2 class="text-3xl font-bold mb-2">{{ $order->id }}</h2>
            <p class="text-gray-700">{{ \Carbon\Carbon::parse($order->created_at)->translatedFormat('d F Y, H:i') }} WIB</p>
        </div>

        <div>
            <div class="bg-white p-6 rounded border space-y-6 mb-6">
                <div class="space-y-2">
                    <h3 class="text-xl font-semibold">Menu</h3>
                    <div class="space-y-3 text-sm">
                        @foreach ($order->items as $item)
                        <div class="flex items-center gap-x-2">
                            <img src="{{ $item->menu->path_img }}" class="max-w-20 h-fit aspect-square object-contain rounded" />
                            <div class="h-fit">
                                <h3 class="font-medium">{{ $item->menu->name }}</h3>
                                <p>Rp{{ number_format($item->price) }} X {{ $item->qty }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr class="mb-4">
                <div class="space-y-2">
                    <h3 class="text-xl font-semibold">Pengiriman</h3>
                    <p><span class="text-gray-700 capitalize">Penerima</span> : {{ $order->user->name }}</p>
                    <p><span class="text-gray-700 capitalize">Alamat</span> : {{ $order->delivery->address->detail . ', ' . $order->delivery->address->kelurahan . ', ' . $order->delivery->address->kecamatan . ', ' . $order->delivery->address->kota }}</p>
                </div>
                <hr class="mb-4">
                <div class="space-y-2">
                    <h3 class="text-xl font-semibold">Pembayaran</h3>
                    <div class="space-y-1">
                        <div class="flex justify-between items-center text-base text-gray-500">
                            <h5>Subtotal</h5>
                            <p>Rp {{ number_format($order->subtotal) }}</p>
                        </div>
                        <div class="flex justify-between items-center text-base text-gray-500">
                            <h5>Pengiriman</h5>
                            <p>Rp {{ number_format($order->harga_pengiriman) }}</p>
                        </div>
                        <div class="flex justify-between items-center text-base text-gray-500">
                            <h5>Diskon</h5>
                            <p>Rp {{ number_format($order->diskon) }}</p>
                        </div>
                        <div class="flex justify-between items-center text-base text-gray-500">
                            <h5>Pajak</h5>
                            <p>Rp {{ number_format($order->pajak) }}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <h3>Total Bayar</h3>
                            <p class="font-semibold">Rp {{ number_format(($order->subtotal + $order->harga_pengiriman + $order->pajak) - $order->diskon) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/" class="py-3 px-4 text-sm font-medium rounded border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">Kembali</a>
        </div>

        <div>
            <div class="bg-white p-6 rounded border space-y-6">
                <h3 class="text-xl font-semibold">Status</h3>

                @php
                    $status = $order->delivery->status;
                @endphp

                <div class="flex w-full flex-col items-start">
                    {{-- Tahap: Proses --}}
                    <div class="group flex gap-x-6 h-[100px]">
                        <div class="relative">
                            <div class="z-10 absolute left-1/2 top-0 h-full w-0.5 -translate-x-1/2 bg-slate-200"></div>
                            <span class="relative z-10 grid h-10 w-10 place-items-center rounded-full
                                @if($status == 'completed' || $status == 'delivered') bg-green-500 text-white
                                @elseif($status == 'process') bg-orange-500 text-white
                                @else bg-slate-200 text-slate-800
                                @endif">
                                1
                            </span>
                        </div>
                        <div class="pt-1 text-slate-600">
                            <p class="font-sans text-base font-medium text-slate-800 antialiased">Pesanan Anda sedang kami siapkan.</p>
                        </div>
                    </div>

                    {{-- Tahap: Pengiriman --}}
                    <div class="group flex gap-x-6 h-[100px]">
                        <div class="relative">
                            <div class="z-10 absolute left-1/2 top-0 h-full w-0.5 -translate-x-1/2 bg-slate-200"></div>
                            <span class="relative z-10 grid h-10 w-10 place-items-center rounded-full
                                @if($status == 'completed') bg-green-500 text-white
                                @elseif($status == 'delivered') bg-orange-500 text-white
                                @elseif(in_array($status, ['completed', 'delivered'])) bg-green-500 text-white
                                @else bg-slate-200 text-slate-800
                                @endif">
                                2
                            </span>
                        </div>
                        <div class="text-slate-600">
                            <p class="font-sans text-base font-medium text-slate-800 antialiased">Pesanan dalam pengiriman, harap ditunggu sebentar.</p>
                        </div>
                    </div>

                    {{-- Tahap: Sampai --}}
                    <div class="group flex gap-x-6">
                        <div class="relative">
                            <span class="relative z-10 grid h-10 w-10 place-items-center rounded-full
                                @if($status == 'completed') bg-green-500 text-white
                                @else bg-slate-200 text-slate-800
                                @endif">
                                3
                            </span>
                        </div>
                        <div class="-translate-y-1.5 pb-8 text-slate-600">
                            <p class="font-sans text-base font-medium text-slate-800 antialiased">Pesanan Anda telah sampai. Selamat menikmati makanan Anda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-user-layout>

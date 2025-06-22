<x-user-layout>
    <x-user.header-simple />

    <div class="flex justify-between gap-6 container mx-auto mt-2 pt-10">
        <form action="/checkout" method="post" class="flex-auto">
            @csrf
            <div class="bg-white p-6 rounded border mb-6">
                <div class="flex content-center items-baseline gap-x-2 divide-x divide-gray-700 mb-4">
                    <h3 class="text-xl font-semibold">Pengiriman</h3>
                </div>
                <div class="mb-4 space-y-0.5">
                    <p class="font-medium text-base">Penerima</p>
                    <p class="opacity-80 font-light text-base">{{ $user->name }}</p>
                    <p class="opacity-80 font-light text-base">{{ $user->phone }}</p>
                </div>
                <hr class="mb-4">
                <div class="grid grid-cols-2 gap-4">
                    @if($diskon!=0)
                    <input type="text" id="voucher" name="voucher" value="{{ $diskon }}" hidden>
                    @endif
                    <div class="col-span-2">
                        <label for="detail" class="mb-2 block font-medium text-sm">Alamat</label>
                        <textarea id="detail" name="detail" rows="3" class="py-3 px-4 block w-full border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"></textarea>
                    </div>
                    <div class="">
                        <label for="kota" class="mb-2 block font-medium text-sm">Kota</label>
                        <input type="text" id="kota" name="kota" class="py-3 px-4 block w-full border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>
                    <div class="">
                        <label for="kecamatan" class="mb-2 block font-medium text-sm">Kecamatan</label>
                        <input type="text" id="kecamatan" name="kecamatan" class="py-3 px-4 block w-full border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>
                    <div class="">
                        <label for="kelurahan" class="mb-2 block font-medium text-sm">Kelurahan</label>
                        <input type="text" id="kelurahan" name="kelurahan" class="py-3 px-4 block w-full border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    </div>
                </div>
            </div>
            <div class="bg-white gap-y-4 p-6 rounded border flex flex-col mb-6">
                <h3 class="text-xl font-semibold">Pembayaran</h3>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="gopay" class="flex p-3 w-full bg-white border border-gray-200 rounded focus:border-blue-500 focus:ring-blue-500 shadow-[0_8px_30px_rgb(0,0,0,0.05)]">
                        <span class="font-medium">Gopay</span>
                        <input type="radio" name="payment" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="gopay" value="gopay" checked="true">
                    </label>

                    <label for="dana" class="flex p-3 w-full bg-white border border-gray-200 rounded focus:border-blue-500 focus:ring-blue-500 shadow-[0_8px_30px_rgb(0,0,0,0.05)]">
                        <span class="font-medium">Dana</span>
                        <input type="radio" name="payment" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="dana" value="dana" checked="false">
                    </label>

                    <label for="bca" class="flex p-3 w-full bg-white border border-gray-200 rounded focus:border-blue-500 focus:ring-blue-500 shadow-[0_8px_30px_rgb(0,0,0,0.05)]">
                        <span class="font-medium">BCA</span>
                        <input type="radio" name="payment" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="bca" value="bca" checked="false">
                    </label>
                </div>
            </div>
            <button type="submit" class="py-3 px-4 text-sm font-medium rounded border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                Pesan
            </button>
        </form>

        <div class="flex-1 bg-white gap-y-5 p-6 rounded border flex flex-col h-fit">
            <h3 class="text-xl font-semibold">Detail Pesanan</h3>
            <div class="space-y-3 grow">
                @foreach ($carts as $menu)
                <div class="">
                    <h3 class="text-base font-medium">{{ $menu->name }}</h3>
                    <p>Rp{{ number_format($menu->price) }} X {{ $menu->qty }}</p>
                </div>
                @endforeach
            </div>
            <hr>
            <div class="">
                <h3 class="text-xl font-semibold mb-4">Voucher</h3>
                <form class="flex gap-x-2" action="/checkout" method="get">
                    <input placeholder="Kode" type="text" id="voucher" name="voucher" rows="3" class="py-3 px-4 block w-full border-gray-200 rounded text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded border border-transparent bg-red-100 text-red-800 hover:bg-red-200 focus:outline-hidden focus:bg-red-200 disabled:opacity-50 disabled:pointer-events-none">
                        Pakai
                    </button>
                </form>
            </div>
            <hr>
            <div>
                <div class="space-y-2 mb-3">
                    <div class="flex justify-between items-center text-base text-gray-500">
                        <h5>Subtotal</h5>
                        <p>Rp {{ number_format($subtotal) }}</p>
                    </div>
                    <div class="flex justify-between items-center text-base text-gray-500">
                        <h5>Pengiriman</h5>
                        <p>Rp {{ number_format($harga_pengiriman) }}</p>
                    </div>
                    <div class="flex justify-between items-center text-base text-gray-500">
                        <h5>Diskon</h5>
                        <p>Rp {{ number_format($diskon) }}</p>
                    </div>
                    <div class="flex justify-between items-center text-base text-gray-500">
                        <h5>Pajak</h5>
                        <p>Rp {{ number_format($pajak) }}</p>
                    </div>
                </div>
                <div class="flex justify-between items-center text-lg">
                    <h3>Total Bayar</h3>
                    <p class="font-semibold">Rp {{ number_format($total) }}</p>
                </div>
            </div>
        </div>
    </div>


    <!-- TOAST -->
    @if(session('failed'))
    <div class="fixed bottom-0 end-0 max-w-md p-6">
        <div id="dismiss-toast" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-100 border border-red-800 rounded shadow-lg" role="alert" tabindex="-1" aria-labelledby="hs-toast-dismiss-button-label">
            <div class="flex gap-x-4 p-4 text-red-800">
                <p id="hs-toast-dismiss-button-label" class="text-sm">
                    {{ session('failed') }}
                </p>
                <div class="ms-auto">
                    <button type="button" class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100" aria-label="Close" data-hs-remove-element="#dismiss-toast">
                        <span class="sr-only">Close</span>
                        <i class="ri-close-large-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-user-layout>

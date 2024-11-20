@extends('user.layout')

@section('content')
<!-- HEADER -->
@include('user.partials.header')

<!-- DESC -->
<section class="bg-white py-8 rounded shadow-sm">
    <div class="container mx-auto px-4 flex flex-wrap justify-between items-end gap-4">
        <div class="lg:max-w-md">
            <h1 class="text-4xl font-bold">Rumah Makan Selera Panca</h1>
            <p class="text-gray-600 mt-2">Makanan Asli Indonesia</p>
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

<!-- CATALOG -->
<main class="container mx-auto px-4 mt-8 space-y-6">
    <h2 class="text-xl font-bold mb-4">Aneka Nasi Goreng</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($menus as $menu)
        <form action="/cart" method="post">
            @csrf
            <input type="text" name="menu_id" value="{{ $menu->id }}" readonly hidden>
            <input type="text" name="menu_name" value="{{ $menu->name }}" readonly hidden>
            <input type="text" name="menu_price" value="{{ $menu->price }}" readonly hidden>
            <button type="submit" class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative">
                <img class="w-28 aspect-square object-cover rounded" src="{{ $menu->path_img }}"/>
                <div class="text-left">
                    <h3 class="mt-2 font-bold capitalize">{{ $menu->name }}</h3>
                    <p class="text-gray-600">{{ $menu->desc }}</p>
                    <p class="mt-2 font-medium">Rp{{ number_format($menu->price) }}</p>
                </div>
                <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                    <i class="ri-add-fill ri-xl"></i>
                </div>
            </button>
        </form>
        @endforeach
    </div>
</main>

<!-- FOOTER -->
@include('user.partials.footer')
@endsection
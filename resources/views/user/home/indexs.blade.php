@extends('user.layout')

@section('content')
<!-- HEADER -->
@include('user.partials.header')

<!-- DESC -->
<section class="bg-white py-8 rounded shadow-sm">
    <div class="container mx-auto px-4 flex flex-wrap justify-between items-end gap-4">
        <div class="lg:max-w-lg">
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
    </div>
</section>

<!-- CATALOG -->
<main class="container mx-auto px-4 mt-8 space-y-6">
    @if(isset($foods))
    <h2 class="text-xl font-bold mb-4">ANEKA MAKANAN</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach($foods as $item)
            <form action="/cart" method="post" class="menu-item">
                @csrf
                <input type="text" name="menu_id" value="{{ $item->id }}" readonly hidden>
                <input type="text" name="menu_name" value="{{ $item->name }}" readonly hidden>
                <input type="text" name="menu_price" value="{{ $item->price }}" readonly hidden>
                <button type="submit" class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative min-h-[185px]">
                    <img class="w-28 aspect-square object-cover rounded" src="{{ $item->path_img }}"/>

                    <div class="text-left flex flex-col justify-between h-full">
                        <h3 class="mt-2 font-bold capitalize">{{ $item->name }}</h3>
                        <p class="text-gray-600 line-clamp-3">{{ str($item->desc)->limit(50) }}</p>
                        <p class="mt-2 font-medium">Rp{{ number_format($item->price) }}</p>
                    </div>

                    <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                        <i class="ri-add-fill ri-xl"></i>
                    </div>
                </button>
            </form>
        @endforeach
    </div>
    @endif
    
    @if(isset($drinks))
    <h2 class="text-xl font-bold mb-4">ANEKA MINUMAN</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach($drinks as $item)
            <form action="/cart" method="post" class="menu-item">
                @csrf
                <input type="text" name="menu_id" value="{{ $item->id }}" readonly hidden>
                <input type="text" name="menu_name" value="{{ $item->name }}" readonly hidden>
                <input type="text" name="menu_price" value="{{ $item->price }}" readonly hidden>
                <button type="submit" class="bg-white p-3 rounded shadow flex gap-4 border border-transparent hover:border hover:border-blue-500 hover:bg-blue-50/20 relative min-h-[185px]">
                    <img class="w-28 aspect-square object-cover rounded" src="{{ $item->path_img }}"/>

                    <div class="text-left flex flex-col justify-between h-full">
                        <h3 class="mt-2 font-bold capitalize">{{ $item->name }}</h3>
                        <p class="text-gray-600 line-clamp-3">{{ str($item->desc)->limit(50) }}</p>
                        <p class="mt-2 font-medium">Rp{{ number_format($item->price) }}</p>
                    </div>

                    <div class="bg-blue-500 text-white rounded-full w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
                        <i class="ri-add-fill ri-xl"></i>
                    </div>
                </button>
            </form>
        @endforeach
    </div>
    @endif
</main>

<!-- <script>
    let menuItem = document.getElementsByClassName('menu-item');

    for(let item of menuItem) {
        item.addEventListener('submit', function(e) {
            e.preventDefault();
            // console.log(item.elements[0].name);
            // console.log(item.elements[2]);
            // console.log(item.elements[3]);

            let data = JSON.stringify({
                // _token: parseInt(item.elements[0].value),
                menu_id: parseInt(item.elements[1].value),
                menu_name: item.elements[2].value,
                menu_price:parseInt( item.elements[3].value),
            })
            
            var xhr = new XMLHttpRequest();
            var url = `${item.action}`;

            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', `${item.elements[0].value}`);
            xhr.onload = function () {               
                console.log (this.status);
            };
            xhr.send(data);

            // console.log(url);
        });
    }
    
    // console.log(item);
    // menuItem.forEach(function(item) {
    //     console.log(item);
    // });
    // menuItem.addEventListener('submit', function(e) {
    //     e.preventDefault();
    //     console.log(e);
    // });
</script> -->

<!-- FOOTER -->
@include('user.partials.footer')
@endsection
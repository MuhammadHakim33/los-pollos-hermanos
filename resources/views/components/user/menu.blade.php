<form action="/cart" method="post" class="menu-item">
    @csrf
    <input type="text" name="menu_id" value="{{ $menu->id }}" readonly hidden>
    <input type="text" name="menu_name" value="{{ $menu->name }}" readonly hidden>
    <input type="text" name="menu_price" value="{{ $menu->price }}" readonly hidden>
    <button type="submit" class="bg-white p-3 rounded shadow flex flex-col gap-4 border border-transparent hover:border hover:border-red-500 hover:bg-red-50/20 relative min-h-[140px] w-full">
        <img class="w-full h-[150px] aspect-video object-contain rounded" src="{{ $menu->path_img }}"/>

        <div class="text-left flex flex-col justify-between h-full">
            <h3 class="mt-2 font-bold capitalize">{{ $menu->name }}</h3>
            <p class="text-gray-600 line-clamp-3">{{ str($menu->desc)->limit(50) }}</p>
            <p class="mt-2 font-medium">Rp {{ number_format($menu->price) }}</p>
        </div>

        <div class="bg-red-600 text-white rounded w-9 h-9 absolute right-3 bottom-3 flex justify-center items-center">
            <i class="ri-add-fill ri-xl"></i>
        </div>
    </button>
</form>

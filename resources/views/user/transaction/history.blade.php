<x-user-layout>
    <x-user.header :$carts :$total />

    <main class="container max-w-xl mx-auto px-4 mt-8 space-y-6">
        @if($orders->count())
            @foreach($orders as $order)
                <div class="bg-white p-3 rounded shadow gap-4 border min-h-[140px]">
                    <div class="flex">
                        <p class="capitalize text-sm grow">{{ $order->created_at }}</p>
                        <span class="capitalize inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded text-xs font-medium bg-gray-100 text-gray-800">{{ $order->status }}</span>
                    </div>
                    <a href="/order/{{ $order->id }}">
                        <h3 class="font-bold capitalize">{{ $order->id }}</h3>
                    </a>
                    <ul class="max-w-xs flex flex-col mt-4">
                        @foreach ($order->items as $item)
                        <li class="inline-flex items-center gap-x-2 p-2 text-sm border border-gray-200 text-gray-600 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                            <span class="grow">{{ '('.$item->qty.') '.$item->menu->name }}</span> 
                            <span>Rp {{ number_format($item->price) }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex mt-6">
                        <p class="uppercase font-semibold text-sm grow">Pengiriman</p>
                        <span class="capitalize inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded text-xs font-semibold bg-gray-100 text-gray-800">{{ $order->delivery->status ?? 'Failed' }}</span>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center italic text-gray-500">Riwayat Pesanan Kosong</p>
        @endif
    </main>
</x-user-layout>
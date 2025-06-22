<x-user-layout>
    <x-user.header :$carts :$subtotal />

    <section class="py-8 rounded">
        <div class="container mx-auto px-4">
            <div data-hs-carousel='{
                "loadingClasses": "opacity-0",
                "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"
            }' class="relative">
                <div class="hs-carousel relative overflow-hidden w-full h-[500px] bg-white rounded">
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-white">
                                <img src="{{ asset('images/banner.jpg') }}" class="w-full h-fit object-fit object-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 mt-8 space-y-6">
        <nav class="relative z-0 flex border border-gray-200 rounded overflow-hidden" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            @foreach($category as $key => $item)
            <button type="button" @class(['hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 border-gray-200 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-hidden focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none capitalize', 'active' => $key==0 ? true : false]) id="{{ $item }}-item" aria-selected="@if($key==0) true @else false @endif" data-hs-tab="#{{ $item }}" aria-controls="{{ $item }}" role="tab">
                {{ $item }}
            </button>
            @endforeach
        </nav>

        <div class="mt-3">
            @foreach($category as $key => $item)
            <div id="{{ $item }}" @class(['hidden' => $key==0 ? false : true]) role="tabpanel" aria-labelledby="{{ $item }}-item">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($menus->where('category', $item) as $menu)
                    <x-user.menu :$menu />
                @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </main>
</x-user-layout>

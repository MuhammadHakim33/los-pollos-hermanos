<x-user-layout>
    <x-user.header :$carts :$total />

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
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 border-gray-200 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-hidden focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none active" id="hemat-item" aria-selected="true" data-hs-tab="#hemat" aria-controls="hemat" role="tab">
                Hemat
            </button>
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 border-gray-200 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-hidden focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none" id="kombo-item" aria-selected="false" data-hs-tab="#kombo" aria-controls="kombo" role="tab">
                Kombo
            </button>
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 border-gray-200 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="ayam-item" aria-selected="false" data-hs-tab="#ayam" aria-controls="ayam" role="tab">
                Ayam
            </button>
        </nav>

        <div class="mt-3">
            <div id="hemat" role="tabpanel" aria-labelledby="hemat-item">
                <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">first</em> item's tab body.
                </p>
            </div>
            <div id="kombo" class="hidden" role="tabpanel" aria-labelledby="kombo-item">
                <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">second</em> item's tab body.
                </p>
            </div>
            <div id="ayam" class="hidden" role="tabpanel" aria-labelledby="ayam-item">
                <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
                </p>
            </div>
        </div>

        <!-- @if(isset($foods))
        <h2 class="text-xl font-bold mb-4">ANEKA MAKANAN</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($foods as $item)
                <x-user.menu :$item />
            @endforeach
        </div>
        @endif

        @if(isset($drinks))
        <h2 class="text-xl font-bold mb-4">ANEKA MINUMAN</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($drinks as $item)
                <x-user.menu :$item />
            @endforeach
        </div>
        @endif -->
    </main>
</x-user-layout>

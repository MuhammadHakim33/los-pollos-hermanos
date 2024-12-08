<html>
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
<body class="bg-gray-100 flex items-center justify-center min-h-screen border">
    <div class="bg-white rounded p-6 mx-4 w-full max-w-3xl ">
        <div class="mb-4 text-center">
            <h1 class="text-2xl font-semibold">{{ $order->id }}</h1>
            <p class="text-gray-500">{{ $order->created_at }}</p>
        </div>
        <!-- Stepper -->
        <ul class="relative flex flex-row gap-x-2 max-w-xl mx-auto my-10">
            <!-- Item -->
            <li class="shrink basis-0 flex-1 group">
                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                    <span class="size-7 flex justify-center items-center shrink-0 bg-blue-500 font-medium text-white rounded-full">1</span>
                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                </div>
                <div class="mt-3">
                    <span class="block text-sm font-medium text-gray-800">Pending</span>
                </div>
            </li>
            <!-- End Item -->
            <!-- Item -->
            <li class="shrink basis-0 flex-1 group">
                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                    <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">2</span>
                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                </div>
                <div class="mt-3">
                    <span class="block text-sm font-medium text-gray-800">Proses</span>
                </div>
            </li>
            <!-- End Item -->
            <!-- Item -->
            <li class="shrink basis-0 flex-1 group">
                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                    <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">3</span>
                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                </div>
                <div class="mt-3">
                    <span class="block text-sm font-medium text-gray-800">Pengiriman</span>
                </div>
            </li>
            <!-- End Item -->
            <!-- Item -->
            <li class="shrink basis-0 flex-0 group">
                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                    <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">4</span>
                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
                </div>
                <div class="mt-3">
                    <span class="block text-sm font-medium text-gray-800">Selesai</span>
                </div>
            </li>
            <!-- End Item -->
        </ul>
        <!-- End Stepper -->
        <div class="border-t border-gray-200 py-4">
            <h2 class="text-gray-700 font-semibold mb-2">Order Detail</h2>
            @foreach ($order->itemOrder as $item)
                <div class="flex items-center mb-2">
                    <h3 class="text-gray-500 font-medium flex-1">{{ '('.$item->qty.') '.$item->menu->name }}</h3>
                    <p class="text-gray-500 font-medium">{{ 'Rp'.$item->price }}</p>
                </div>
            @endforeach
        </div>
        <div class="border-t border-gray-200 pt-4">
            <div class="mb-2 text-center bg-blue-400/10 border border-blue-400 p-4 rounded">
                <h4 class="font-semibold text-blue-500">MENUNGGU PEMBAYARAN</h4>
            </div>
            <h2 class="text-gray-700 font-semibold mb-2">Rincian Pembayaran</h2>
            <div class="flex justify-between mb-2">
                <span class="text-gray-500">Metode Pembayaran</span>
                <span class="text-gray-700">COD</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="text-gray-500">Subtotal</span>
                <span class="text-gray-700">{{ 'Rp'.$order->total }}</span>
            </div>
            <div class="border-t border-gray-200 my-2"></div>
            <div class="flex justify-between mt-4">
                <span class="text-gray-700 font-semibold">Total</span>
                <span class="text-gray-700 font-semibold">{{ 'Rp'.$order->total }}</span>
            </div>
        </div>
    </div>
</body>
</html>
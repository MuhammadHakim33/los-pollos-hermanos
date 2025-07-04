<x-user-layout>
    <div class="w-full max-w-md mx-auto mt-20">
        <div class="flex items-center mb-6">
            <img alt="Los Pollos Hermanos Logo" class="size-28 rounded-xl" src="{{ asset('images/los_pollos_hermanos_2.png') }}"/>
        </div>
        <h2 class="text-xl font-semibold mb-2">Buat Akun Baru</h2>
        <p class="text-gray-600 mb-6">Daftar sekarang dan nikmati banyak voucher & bonus spesial untuk setiap pesananmu.</p>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- nama -->
            <div class="relative mb-5">
                <label for="nama" class="block font-medium text-sm mb-2">Nama</label>
                <input type="text" name="nama" id="nama" class="py-2.5 sm:py-3 px-4 block w-full border-gray-300 rounded-sm sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>

            <!-- email -->
            <div class="relative mb-5">
                <label for="email_regis" class="block font-medium text-sm mb-2">Email</label>
                <input type="email" name="email_regis" id="email_regis" class="py-2.5 sm:py-3 px-4 block w-full border-gray-300 rounded-sm sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="email@google.com">
            </div>

            <!-- telp -->
            <div class="relative mb-5">
                <label for="no_telp" class="block font-medium text-sm mb-2">Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="py-2.5 sm:py-3 px-4 block w-full border-gray-300 rounded-sm sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="08XXXXXXXX">
            </div>

            <!-- password -->
            <div class="relative mb-5">
                <label class="block font-medium text-sm mb-2">Password</label>
                <div class="relative">
                    <input id="hs-toggle-password" type="password" name="password_regis" class="py-2.5 sm:py-3 ps-4 pe-10 block w-full border-gray-300 rounded-sm sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="">
                    <button type="button" data-hs-toggle-password='{
                        "target": "#hs-toggle-password"
                        }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600">
                            <svg class="shrink-0 size-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                            </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="mt-6 w-full py-3 px-4 text-sm text-center font-medium rounded-sm border border-transparent bg-red-700 text-white hover:bg-red-800 focus:outline-hidden focus:bg-red-800 disabled:opacity-50 disabled:pointer-events-none">
                Daftar
            </button>
        </form>

        <!-- Footer -->
        <div class="flex justify-center items-center mt-6">
            <a href="{{ route('login') }}" class="text-gray-500 text-sm">Sudah punya akun? <span class="text-black font-medium hover:underline">Login</span></a>
        </div>
    </div>
</x-user-layout>

<html>
  <head>
    <title>Gofood OTP Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-pink-100 h-screen flex items-center justify-center">
    <div class="absolute top-0 left-0 right-0 bg-white shadow-md">
      <div
        class="container mx-auto flex items-center justify-between py-4 px-6"
      >
        <div class="flex items-center">
          <img
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/yNOzGZFJTG6WKpiJH0IJKK8DPQrS2UKzIilRE4qSVzlvUL6E.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <div class="flex space-x-4 ml-8">
          <a class="text-gray-700" href="#"> Beranda </a>
          <a class="text-gray-700" href="#"> Rekomendasi </a>
        </div>
        <div class="relative ml-auto">
          <input
            class="border rounded-full py-1 px-3 pl-8"
            placeholder="Search"
            type="text"
          />
          <i
            class="fas fa-search absolute left-2 top-1/2 transform -translate-y-1/2 text-green-500"
          >
          </i>
        </div>
      </div>
    </div>
    <div
      class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md mx-auto mt-20"
    >
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <img
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/yNOzGZFJTG6WKpiJH0IJKK8DPQrS2UKzIilRE4qSVzlvUL6E.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <i class="fas fa-question-circle text-green-500"> </i>
      </div>
      <h2 class="text-lg font-semibold mb-2">OTP udah di-SMS ya</h2>
      <p class="text-gray-600 mb-4">
        Masukkan OTP yang kami kirim ke +6281273424186
      </p>
      <div class="mb-4">
        <label class="block text-gray-700 font-semibold" for="otp">
          Masukkan OTP
          <span class="text-red-500"> * </span>
        </label>
        <div class="relative">
          <input
            class="border rounded-full py-2 px-4 w-full mt-1"
            id="otp"
            placeholder="4-digit OTP"
            type="text"
          />
          <div
            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-green-500 flex items-center"
          >
            <i class="fas fa-sync-alt"> </i>
            <span class="ml-1"> 03:41 </span>
          </div>
        </div>
      </div>
      <!-- <button
        class="w-full py-2 bg-gray-200 text-gray-500 rounded-full mb-4"
        disabled=""
      >
        Kirim ulang OTP
      </button> -->
      <button type="button" class="w-full py-2 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-full bg-gray-200 text-gray-500 mb-5" disabled="">
        Kirim ulang OTP
      </button>
      <!-- <button
        class="w-full py-2 bg-gray-200 text-gray-500 rounded-full"
        disabled=""
      >
        Lanjut
      </button> -->
      <button type="button" class="w-full py-2 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-full bg-gray-200 text-gray-500" disabled="">
        Lanjut
      </button>
    </div>
  </body>
</html>

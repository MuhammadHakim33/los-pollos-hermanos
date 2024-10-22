<html>
  <head>
    <title>Gofood Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-pink-100 h-screen flex items-center justify-center">
    <div class="absolute top-0 left-0 right-0 bg-white shadow-md">
      <div
        class="container mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center">
          <img
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/wlkjVCA2sNYMHpVXernsNTxfiBsoFfFYrXSOAiJz9Onoe0iOB.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <div class="flex space-x-6 ml-8">
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
            class="fas fa-search absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500"
          >
          </i>
        </div>
      </div>
    </div>
    <div
      class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md mx-auto mt-20"
    >
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <img
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/wlkjVCA2sNYMHpVXernsNTxfiBsoFfFYrXSOAiJz9Onoe0iOB.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <i class="fas fa-question-circle text-green-500"> </i>
      </div>
      <h2 class="text-xl font-semibold mb-2">Masukkan nomor HP</h2>
      <p class="text-gray-600 mb-4">
        Buat masuk ke akunmu atau daftar kalau kamu baru di Gojek.
      </p>
      <form>
        <label class="block text-gray-700 mb-2" for="phone">
          Nomor HP
          <span class="text-red-500"> * </span>
        </label>
        <div class="flex items-center border rounded-lg overflow-hidden">
          <div class="flex items-center bg-gray-100 px-3">
            <span class="font-semibold"> ID </span>
            <select class="bg-gray-100 text-gray-700 ml-2">
              <option>+62</option>
            </select>
          </div>
          <input
            class="flex-1 py-2 px-4 outline-none"
            id="phone"
            placeholder="8123456789"
            type="text"
          />
        </div>
        <!-- <button
          class="mt-6 w-full py-2 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed"
          type="submit"
        >
          Lanjut
        </button> -->
        <button type="submit" class="mt-6 py-3 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-gray-300 text-gray-500">
            Lanjut
          </button>
      </form>
    </div>
  </body>
</html>

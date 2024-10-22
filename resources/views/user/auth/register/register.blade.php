<html>
  <head>
    <title>GoFood Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-pink-100 flex items-center justify-center min-h-screen">
    <div class="absolute top-0 left-0 w-full bg-white shadow-md">
      <div
        class="container mx-auto flex items-center justify-between py-4 px-6"
      >
        <div class="flex items-center">
          <img
            alt="GoFood logo"
            class="h-10 w-10"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/5iEFuJlGUEJyBJ6fXT2RNZM8e771etKz5ixZDRhFnLPosaRnA.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <div class="flex space-x-6 ml-8">
          <a class="text-gray-700" href="#"> Beranda </a>
          <a class="text-gray-700" href="#"> Rekomendasi </a>
        </div>
        <div class="flex items-center ml-auto">
          <i class="fas fa-search text-gray-700"> </i>
        </div>
      </div>
    </div>
    <div
      class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md mx-auto mt-20"
    >
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <img
            alt="GoFood logo"
            class="h-10 w-10"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/5iEFuJlGUEJyBJ6fXT2RNZM8e771etKz5ixZDRhFnLPosaRnA.jpg"
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
          <div class="flex items-center bg-gray-100 px-4 py-2">
            <span class="font-semibold"> ID </span>
            <select class="bg-gray-100 ml-2 outline-none">
              <option value="+62">+62</option>
            </select>
          </div>
          <input
            class="flex-1 px-4 py-2 outline-none"
            id="phone"
            placeholder="8123456789"
            type="text"
          />
        </div>
        <!-- <button
          class="mt-6 w-full bg-gray-300 text-gray-500 py-2 rounded-lg cursor-not-allowed"
          disabled=""
          type="submit"
        >
          Lanjut
        </button> -->
        <button type="submit" disabled="" class="mt-6 py-2 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-gray-300 text-gray-500 cursor-not-allowed">
            Lanjut
          </button>
      </form>
    </div>
  </body>
</html>

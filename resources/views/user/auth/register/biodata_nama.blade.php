<html>
  <head>
    <title>GoFood Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-pink-100 flex flex-col min-h-screen">
    <div class="flex justify-between items-center py-4 px-6 bg-white shadow-md">
      <div class="flex items-center">
        <img
          alt="GoFood logo"
          class="mr-2"
          height="30"
          src="https://storage.googleapis.com/a1aa/image/Uhg6hxOrfLzeFUD3ApZmDuDGLmIIS02x7LnQ1rsZlfns0aRnA.jpg"
          width="30"
        />
        <span class="text-xl font-semibold">gofood</span>
      </div>
      <div class="flex space-x-4">
        <a class="text-gray-700" href="#">Beranda</a>
        <a class="text-gray-700" href="#">Rekomendasi</a>
      </div>
    </div>
    <div class="flex-grow flex items-center justify-center">
      <div class="w-full max-w-md mx-auto">
        <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
              <img
                alt="GoFood logo"
                class="mr-2"
                height="30"
                src="https://storage.googleapis.com/a1aa/image/Uhg6hxOrfLzeFUD3ApZmDuDGLmIIS02x7LnQ1rsZlfns0aRnA.jpg"
                width="30"
              />
              <span class="text-xl font-semibold">gofood</span>
            </div>
            <i class="fas fa-question-circle text-green-500"></i>
          </div>
          <h2 class="text-lg font-semibold mb-2">Kenalan dulu, yuk</h2>
          <p class="text-gray-600 mb-4">
            Supaya kami tahu bagaimana cara memanggilmu nanti.
          </p>
          <form>
            <label class="block text-gray-700 mb-2" for="name"
              >Masukkan namamu <span class="text-red-500">*</span></label
            >
            <input
              class="w-full p-3 border rounded-lg mb-4"
              id="name"
              placeholder="Huruf alfabet, tanpa emoji, atau simbol"
              type="text"
            />
            <!-- <button
              class="w-full py-3 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed"
              type="submit"
            >
              Lanjut
            </button> -->
            <button type="submit" class="py-3 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-gray-300 text-gray-500 cursor-not-allowed">
                Lanjut
              </button>
          </form>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

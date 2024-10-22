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
    <div class="absolute top-0 left-0 w-full bg-white shadow-md">
      <div
        class="container mx-auto flex items-center justify-between py-4 px-6"
      >
        <div class="flex items-center">
          <img
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/Z2DrgWJDPhp5FF06HIJabrrfPlDBtjnJ0bUGtnJAUtmfbtoTA.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <div class="flex space-x-8">
          <a class="text-gray-700" href="#"> Beranda </a>
          <a class="text-gray-700" href="#"> Rekomendasi </a>
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
            src="https://storage.googleapis.com/a1aa/image/Z2DrgWJDPhp5FF06HIJabrrfPlDBtjnJ0bUGtnJAUtmfbtoTA.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> gofood </span>
        </div>
        <i class="fas fa-question-circle text-green-500"> </i>
      </div>
      <h2 class="text-lg font-semibold mb-2">Terus, emailnya apa?</h2>
      <p class="text-gray-600 mb-4">
        Supaya kamu bisa pake akun Gojekmu dengan maksimal dan aman.
      </p>
      <form>
        <label class="block text-gray-700 mb-2" for="email">
          Masukkan alamat email
          <span class="text-red-500"> * </span>
        </label>
        <input
          class="w-full border rounded-lg px-4 py-2 mb-4"
          id="email"
          name="email"
          placeholder="abc@xyz.com"
          type="email"
        />
        <!-- <button
          class="w-full bg-gray-300 text-gray-500 rounded-lg py-2 cursor-not-allowed"
          type="submit"
        >
          Lanjut
        </button> -->
        <button type="submit" class="py-2 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-gray-300 text-gray-500 cursor-not-allowed">
            Lanjut
          </button>
      </form>
    </div>
  </body>
</html>

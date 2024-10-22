<html>
  <head>
    <title>GoFood Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-pink-100">
    <div class="flex flex-col items-center min-h-screen">
      <!-- Header -->
      <div class="w-full bg-white shadow-md">
        <div
          class="container mx-auto flex items-center justify-between py-4 px-6"
        >
          <div class="flex items-center">
            <img
              alt="GoFood logo"
              class="h-8 w-8"
              height="40"
              src="https://storage.googleapis.com/a1aa/image/zgUzXWeReviQFEuaZfeNdraMLJvm9FPzPQn1kiu1O2HfArFdC.jpg"
              width="40"
            />
            <span class="ml-2 text-xl font-semibold"> gofood </span>
          </div>
          <div class="flex space-x-6 ml-8">
            <a class="text-gray-700" href="#"> Beranda </a>
            <a class="text-gray-700" href="#"> Rekomendasi </a>
          </div>
          <div class="ml-auto">
            <i class="fas fa-search text-gray-700"> </i>
          </div>
        </div>
      </div>
      <!-- Main Content -->
      <div class="flex-grow flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
          <div class="flex justify-between items-center mb-4">
            <i class="fas fa-arrow-left text-green-500"> </i>
            <img
              alt="GoFood logo"
              class="h-8 w-8"
              height="40"
              src="https://storage.googleapis.com/a1aa/image/zgUzXWeReviQFEuaZfeNdraMLJvm9FPzPQn1kiu1O2HfArFdC.jpg"
              width="40"
            />
          </div>
          <div class="flex justify-center mb-4">
            <img
              alt="Illustration of two people with a document and a checkmark"
              class="rounded-lg"
              height="200"
              src="https://storage.googleapis.com/a1aa/image/HdaKtGaCupp2CZwaCZLZ9Usf9deq8qWqSvxfrxgKQQfng1iOB.jpg"
              width="300"
            />
          </div>
          <p class="text-center text-gray-700 mb-4">
            Dengan melanjutkan, kamu menyetujui syarat dan ketentuin Gojek
          </p>
          <div class="text-center text-sm text-gray-500 mb-4">
            Baca
            <a class="text-green-500" href="#"> Ketentuan &amp; kondisi </a>
            dan
            <a class="text-green-500" href="#"> Kebijakan privasi </a>
            kami
          </div>
          <div class="flex justify-center">
            <!-- <button class="bg-green-500 text-white py-2 px-6 rounded-full">
              Lanjut
            </button> -->
            <button
                type="button"
                class="py-2 px-6 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                Lanjut
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

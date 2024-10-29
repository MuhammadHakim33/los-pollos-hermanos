<html>
  <head>
    <title>Form Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .custom-btn:hover {
        background-color: #34d399;
        color: white;
      }
    </style>
  </head>

  <body class="bg-pink-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-5xl mx-auto mt-20">
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <img
            alt="GoFood logo"
            class="h-10 w-10"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/5iEFuJlGUEJyBJ6fXT2RNZM8e771etKz5ixZDRhFnLPosaRnA.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold">Rumah Makan Selera Panca</span>
        </div>
        <i class="fas fa-question-circle text-green-500"></i>
      </div>
      <h2 class="text-xl font-semibold mb-2">Masukkan Biodata</h2>
      <p class="text-gray-600 mb-4">Buat daftar kalau kamu baru di Rumah Makan Selera Panca.</p>

      <form method="POST">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <!-- Nama -->
           <div class="relative">
            <input type="text" name="nama" id="nama" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="Nama">
            <label for="nama" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Name</label>
          </div>

          <!-- No Telepon -->
          <div class="relative">
            <input type="text" name="no_telp" id="no_telp" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="08xxxxxx">
            <label for="no_telp" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">No Telpon</label>
          </div>

          <!-- email -->
          <div class="relative">
            <input type="email" name="email_regis" id="email_regis" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="you@email.com">
            <label for="email_regis" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Email</label>
          </div>
          
          <!-- password -->
          <div class="relative">
            <input type="password" name="password_regis" id="password_regis" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="********">
            <label for="password_regis" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Password</label>
          </div>
         
          <!-- Alamat Detail -->
          <div class="relative">
            <input type="text" name="alamat" id="alamat" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="alamat">
            <label for="alamat" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Alamat</label>
          </div>

          <!-- Kecamatan -->
          <div class="relative">
            <input type="text" name="kecamatan" id="kecamatan" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="kecamatan">
            <label for="kecamatan" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Kecamatan</label>
          </div>

          <!-- Kelurahan -->
          <div class="relative">
            <input type="text" name="kelurahan" id="kelurahan" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [&:not(:placeholder-shown)]:pt-6
            [&:not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="kelurahan">
            <label for="kelurahan" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
              peer-focus:scale-90
              peer-focus:translate-x-0.5
              peer-focus:-translate-y-1.5
              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
              peer-[:not(:placeholder-shown)]:scale-90
              peer-[:not(:placeholder-shown)]:translate-x-0.5
              peer-[:not(:placeholder-shown)]:-translate-y-1.5
              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Kelurahan</label>
          </div>

        </div>
       
        <!-- Submit Button -->
        <button type="submit" class="mt-8 py-2 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-green-300 text-gray-600 custom-btn">Lanjut</button>

      </form>

      <div class="flex justify-center items-center">
            <a href="{{ route('login') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-teal-500 hover:bg-teal-100 focus:outline-none focus:bg-teal-100 hover:text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:text-teal-400">
            Punya Akun
          </a>
        </div>

    </div>



  </body>
</html>

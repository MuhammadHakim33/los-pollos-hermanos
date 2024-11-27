<html>
  <head>
    <title>Gofood Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  </head>
  
  <body class="bg-pink-100 h-screen flex items-center justify-center">
    
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md mx-auto mt-20">
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <img
            alt="Selera Panca Logo"
            class="h-20 rounded-xl"
            src="{{ asset('storage/image/LogoRM.png') }}"
          />
          <span class="ml-2 text-xl font-semibold"> Rumah Makan Selera Panca </span>
        </div>
        <i class="fas fa-question-circle text-green-500"> </i>
      </div>

      <h2 class="text-xl font-semibold mb-2">Masukkan Email</h2>
      <p class="text-gray-600 mb-5">
        Buat masuk ke akunmu atau daftar kalau kamu baru.
      </p>
      
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- email -->
        <div class="relative mt-20 mb-3">
          <input type="email" name="email" id="email" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none 
          focus:pt-6
          focus:pb-2
          [&:not(:placeholder-shown)]:pt-6
          [&:not(:placeholder-shown)]:pb-2
          autofill:pt-6
          autofill:pb-2" placeholder="you@email.com">
          <label for="email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
            peer-focus:scale-90
            peer-focus:translate-x-0.5
            peer-focus:-translate-y-1.5
            peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
            peer-[:not(:placeholder-shown)]:scale-90
            peer-[:not(:placeholder-shown)]:translate-x-0.5
            peer-[:not(:placeholder-shown)]:-translate-y-1.5
            peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Email</label>

          <!-- Pesan Error email -->
          @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        
        <!-- pasword -->
        <div class="relative mb-3">
          <input type="password" name="password" id="passowrd" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none 
          focus:pt-6
          focus:pb-2
          [&:not(:placeholder-shown)]:pt-6
          [&:not(:placeholder-shown)]:pb-2
          autofill:pt-6
          autofill:pb-2" placeholder="********">
          <label for="passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
            peer-focus:scale-90
            peer-focus:translate-x-0.5
            peer-focus:-translate-y-1.5
            peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
            peer-[:not(:placeholder-shown)]:scale-90
            peer-[:not(:placeholder-shown)]:translate-x-0.5
            peer-[:not(:placeholder-shown)]:-translate-y-1.5
            peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Password</label>

            <!-- Pesan error password -->
          @error('password')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>


        <!-- error umum -->
        @if ($errors->has('email'))
                <div class="text-red-500 text-sm mt-5 mb-4">
                    Email atau password yang dimasukkan salah.
                </div>
        @endif

        <button type="submit" class="mt-6 py-3 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-green-300 text-gray-500 mb-5">
            Lanjut
        </button>

      </form>

      <div class="flex justify-center items-center">
            <a href="{{ route('register') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-teal-500 hover:bg-teal-100 focus:outline-none focus:bg-teal-100 hover:text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:text-teal-400">
            Bikin Akun
          </a>
        </div>

    </div>

    
  </body>
</html>

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
            alt="Gofood logo"
            class="h-8 w-8"
            height="40"
            src="https://storage.googleapis.com/a1aa/image/wlkjVCA2sNYMHpVXernsNTxfiBsoFfFYrXSOAiJz9Onoe0iOB.jpg"
            width="40"
          />
          <span class="ml-2 text-xl font-semibold"> Rumah Makan Selera Panca </span>
        </div>
        <i class="fas fa-question-circle text-green-500"> </i>
      </div>

      <h2 class="text-xl font-semibold mb-2">Masukkan Email</h2>
      <p class="text-gray-600 mb-5">
        Untuk Melakukan Reset Password.
      </p>
      
      <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="relative mb-3">
                <input type="email" name="email" id="email" class="peer p-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600" placeholder="you@email.com" required>
                <label for="email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] peer-focus:scale-90 peer-focus:-translate-y-1.5 text-gray-500">Email</label>
            </div>
            <button type="submit" class="mt-6 py-3 w-full inline-flex items-center justify-center text-sm font-medium rounded-lg bg-green-300 text-gray-500 mb-5">
                Kirim Link Reset
            </button>
        </form>

    </div>

    
  </body>
</html>

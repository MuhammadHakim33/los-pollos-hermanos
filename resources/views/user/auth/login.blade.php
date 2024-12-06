<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gofood Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>

<body class="bg-pink-100 h-screen flex items-center justify-center font-poppins">
  <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <div class="flex items-center">
        <img
          alt="Selera Panca Logo"
          class="h-16 w-16 rounded-xl shadow-md"
          src="{{ asset('images/Logo RM. Selera Panca.png') }}" />
        <span class="ml-4 text-lg font-bold text-gray-800">Rumah Makan Selera Panca</span>
      </div>
      <i class="fas fa-question-circle text-green-500 text-xl"></i>
    </div>

    <!-- Form Title -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Masukkan Email</h2>
    <p class="text-gray-600 text-sm mb-6">
      Buat masuk ke akunmu atau daftar kalau kamu baru.
    </p>

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email -->
      <div class="relative mb-5">
        <input type="email" id="email" name="email" class="peer p-4 block w-full bg-gray-100 border border-gray-300 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-800 dark:focus:ring-neutral-600
        focus:pt-6
        focus:pb-2
        [&:not(:placeholder-shown)]:pt-6
        [&:not(:placeholder-shown)]:pb-2
        autofill:pt-6
        autofill:pb-2" placeholder="you@email.com">
        <label for="email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-black peer-disabled:opacity-50 peer-disabled:pointer-events-none
        peer-focus:scale-90
        peer-focus:translate-x-0.5
        peer-focus:-translate-y-1.5
        peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
        peer-[:not(:placeholder-shown)]:scale-90
        peer-[:not(:placeholder-shown)]:translate-x-0.5
        peer-[:not(:placeholder-shown)]:-translate-y-1.5
        peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-800 dark:text-neutral-500">Email</label>
        @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="relative mb-5">
        <input type="password" id="password" name="password" class="peer p-4 block w-full bg-gray-100 border border-gray-300 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-800 dark:focus:ring-neutral-600
        focus:pt-6
        focus:pb-2
        [&:not(:placeholder-shown)]:pt-6
        [&:not(:placeholder-shown)]:pb-2
        autofill:pt-6
        autofill:pb-2" placeholder="********">
        <label for="password" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-black peer-disabled:opacity-50 peer-disabled:pointer-events-none
        peer-focus:scale-90
        peer-focus:translate-x-0.5
        peer-focus:-translate-y-1.5
        peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
        peer-[:not(:placeholder-shown)]:scale-90
        peer-[:not(:placeholder-shown)]:translate-x-0.5
        peer-[:not(:placeholder-shown)]:-translate-y-1.5
        peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Password</label>
        @error('password')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- General Error -->
      @if ($errors->has('email'))
      <div class="text-red-500 text-sm mb-4">
        Email atau password yang dimasukkan salah.
      </div>
      @endif

      <!-- Submit Button -->
      <button
        type="submit"
        class="w-full py-3 bg-green-400 text-white rounded-lg font-semibold hover:bg-green-500 transition-all duration-200">
        Lanjut
      </button>
    </form>

    <!-- Footer -->
    <div class="flex justify-center items-center mt-6">
      <a
        href="{{ route('register') }}"
        class="text-teal-500 text-sm font-medium hover:text-teal-700">
        Bikin Akun
      </a>
    </div>
  </div>
</body>

</html>
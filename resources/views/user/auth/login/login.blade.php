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
        <input
          type="email"
          name="email"
          id="email"
          class="peer p-4 block w-full bg-gray-100 border border-gray-300 rounded-lg text-sm placeholder-transparent focus:border-black focus:ring-2 focus:ring-black focus:outline-none"
          placeholder="you@email.com" />
        <label
          for="email"
          class="absolute left-4 top-4 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-black">
          Email
        </label>
        @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="relative mb-5">
        <input
          type="password"
          name="password"
          id="password"
          class="peer p-4 block w-full bg-gray-100 border border-gray-300 rounded-lg text-sm placeholder-transparent focus:border-black focus:ring-2 focus:ring-black focus:outline-none"
          placeholder="********" />
        <label
          for="password"
          class="absolute left-4 top-4 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-black">
          Password
        </label>
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
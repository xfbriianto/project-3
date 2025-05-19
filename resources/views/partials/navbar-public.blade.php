<!-- resources/views/layouts/public.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Technocenter')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-50">

  {{-- NAVBAR --}}
  <nav class="bg-gray-800 text-white py-4 px-4 sm:px-6 lg:px-8 shadow-md">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center space-x-4">
        <a href="{{ url('/') }}" class="flex items-center">
          <img src="{{ asset('images/logo_TC.png') }}" alt="Technocenter" class="h-10">
        </a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-8">
        <a href="{{ url('/') }}" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Home</a>
        <a href="{{ route('service') }}" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Service</a>
        <a href="#components" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Komponen</a>
        <a href="#paket" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Paket Produk</a>
        <a href="#about" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Tentang Kita</a>
      </div>

      <!-- Right Menu -->
      <div class="flex items-center space-x-4">
        <a href="#contact" class="text-white font-bold">Contact</a>
        <a href="#cart" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
        </a>

        <!-- Profile Dropdown -->
        <div class="relative ml-4" x-data="{ open: false }">
          <button @click="open = !open" class="flex items-center focus:outline-none">
            <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden">
              <img src="{{ asset('images/profile.png') }}" alt="Profile" class="w-full h-full object-cover">
            </div>
            <svg class="ml-2 w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="open" @click.away="open = false" x-transition
               class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-20">
            <ul class="py-1">
              @guest
                <li><a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a></li>
                <li><a href="{{ route('register') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a></li>
              @else
                <li><a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a></li>
                <li>
                  <a href="#" @click.prevent="document.getElementById('logout-form').submit()"
                     class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
                </li>
              @endguest
            </ul>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden ml-4" x-data="{ openMenu: false }">
        <button @click="openMenu = !openMenu" class="text-white focus:outline-none">
          <svg x-show="!openMenu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="openMenu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <div x-show="openMenu" @click.away="openMenu = false" x-transition
             class="absolute top-16 right-4 bg-gray-800 text-white rounded-md shadow-lg w-40 z-10">
          <a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-gray-700">Home</a>
          <a href="{{ route('service') }}" class="block px-4 py-2 hover:bg-gray-700">Service</a>
          <a href="#components" class="block px-4 py-2 hover:bg-gray-700">Komponen</a>
          <a href="#paket" class="block px-4 py-2 hover:bg-gray-700">Paket Produk</a>
          <a href="#about" class="block px-4 py-2 hover:bg-gray-700">Tentang Kita</a>
          <a href="#contact" class="block px-4 py-2 hover:bg-gray-700">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  {{-- CONTENT --}}
  <main>
    @yield('content')
  </main>

</body>
</html>

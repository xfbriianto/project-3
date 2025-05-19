<!-- resources/views/layouts/public.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Technocenter')</title>
  <link rel="icon" href="{{ asset('images/logo_TC.png') }}" type="image/png">
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
        <a href="{{ route('about') }}" class="text-white py-2 px-1 border-t-2 border-transparent hover:border-blue-300 hover:text-blue-300 transition-all duration-200 ease-in-out">Tentang Kita</a>
      </div>

      <!-- Right Menu -->
      <div class="flex items-center space-x-4">
        <a href="#contact" class="text-white font-bold">Contact</a>
         <a href="{{ route('keranjang') }}" class="text-white">
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

  {{-- FOOTER --}}
  <footer class="bg-gray-100 text-gray-700 px-6 md:px-16 py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Company Info -->
      <div>
        <div class="flex items-center gap-2 mb-3">
          <img src="images/logo_TC.png" alt="Logo" class="w-8 h-8">
          <div>
            <h2 class="font-bold text-lg">SecureView</h2>
            <p class="text-sm text-gray-500">Total Surveillance Solutions</p>
          </div>
        </div>
        <p class="text-sm mb-4">SecureView is your trusted partner for advanced CCTV & security systems. Monitor anytime, anywhere with ease.</p>
        <ul class="space-y-2 text-sm">
          <li class="flex items-start gap-2">
            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Jl. Keamanan No.99, Jakarta, Indonesia 12345</span>
          </li>
          <li class="flex items-center gap-2">
            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 12H8m8 0H8m0 0v6m0-6V6" />
            </svg>
            <span>support@secureview.id</span>
          </li>
          <li class="flex items-center gap-2">
            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 5h2l3 9 4-8h8" />
            </svg>
            <span>+62 812 3456 7890</span>
          </li>
        </ul>
      </div>

      <!-- Company -->
      <div>
        <h3 class="font-semibold mb-3">Company</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline">About Us</a></li>
          <li><a href="#" class="hover:underline">Installation Service</a></li>
          <li><a href="#" class="hover:underline">Privacy Policy</a></li>
          <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
          <li><a href="#" class="hover:underline">Contact Us</a></li>
          <li><a href="#" class="hover:underline">Support</a></li>
        </ul>
      </div>

      <!-- Product Category -->
      <div>
        <h3 class="font-semibold mb-3">Products</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline">Outdoor Cameras</a></li>
          <li><a href="#" class="hover:underline">Indoor Cameras</a></li>
          <li><a href="#" class="hover:underline">DVR & NVR</a></li>
          <li><a href="#" class="hover:underline">Smart Alarm</a></li>
          <li><a href="#" class="hover:underline">Access Control</a></li>
          <li><a href="#" class="hover:underline">Wireless Kits</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h3 class="font-semibold mb-3">Subscribe to Newsletter</h3>
        <form class="flex items-center mb-4">
          <input type="text" placeholder="Search here..." class="w-full border rounded-l px-3 py-2">
          <button type="submit" class="bg-black text-white px-3 py-2 rounded-r">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </button>
        </form>
        <div class="flex space-x-3">
          <a href="#" class="w-8 h-8 bg-gray-200 flex items-center justify-center rounded hover:bg-gray-300">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="w-8 h-8 bg-gray-200 flex items-center justify-center rounded hover:bg-gray-300">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="w-8 h-8 bg-gray-200 flex items-center justify-center rounded hover:bg-gray-300">
            <i class="fab fa-dribbble"></i>
          </a>
          <a href="#" class="w-8 h-8 bg-gray-200 flex items-center justify-center rounded hover:bg-gray-300">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center mt-10 text-sm border-t pt-4 text-gray-500">
      © 2025 <span class="text-red-500 font-semibold">SecureView</span>, All rights reserved.
    </div>
  </footer>

  <!-- Chat Widget -->
  <div class="fixed bottom-6 right-6">
    <button class="bg-blue-600 hover:bg-blue-700 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
      </svg>
    </button>
  </div>

</body>
</html>
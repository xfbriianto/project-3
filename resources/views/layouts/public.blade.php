{{-- resources/views/layouts/public.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Technocenter')</title>
  <link rel="icon" href="{{ asset('images/logo_TC.png') }}" type="image/png">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/responsive-table.css') }}">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Space+Grotesk%3Awght%40400%3B500%3B700"
    />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Space+Grotesk%3Awght%40400%3B500%3B700"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Space+Grotesk%3Awght%40400%3B500%3B700"
    />

    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
     <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body class="bg-gray-50" style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>

  {{-- HEADER --}}
  {{-- NAVBAR --}}
<header class="bg-white border-b border-solid border-b-[#eaedf0] px-4 md:px-10 py-3 fixed w-full z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    {{-- Logo + Brand --}}
    <div class="flex items-center gap-4">
      <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('images/logo_TC.png') }}" alt="Technocenter" class="h-8 w-auto">
        <h2 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em]">Technocenter</h2>
      </a>
    </div>

    {{-- Desktop Menu (hanya tampil di md ke atas) --}}
    <nav class="hidden md:flex items-center gap-9">
      <a href="{{ url('/') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Home</a>
      <a href="{{ route('service') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Service</a>
     <a href="{{ route('komponen.index') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Komponen</a>
      <a href="{{ route('paket.index') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Paket Produk</a>
      <a href="{{ route('about') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Tentang Kita</a>
      <a href="{{ route('contact') }}" class="text-[#111418] text-sm font-medium hover:text-blue-600 transition-colors">Contact</a>
    </nav>

    {{-- Icons & Profile (desktop) --}}
    <div class="hidden md:flex items-center gap-6">
      {{-- Cart Icon --}}
      @auth
        @php
          $countCart = Auth::user()->cartItems()->sum('quantity');
        @endphp
      @else
        @php $countCart = 0; @endphp
      @endauth
      <a href="{{ route('cart.index') }}" class="relative">
        <button class="flex items-center justify-center h-10 w-10 rounded bg-[#eaedf0] hover:bg-[#d6dbe0] transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#111418]" fill="currentColor" viewBox="0 0 256 256">
            <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
          </svg>
        </button>
        @if($countCart > 0)
          <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs px-1 h-4 flex items-center justify-center">
            {{ $countCart }}
          </span>
        @endif
      </a>

      {{-- Profile Dropdown --}}
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center focus:outline-none">
          <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden">
            <img src="{{ asset('images/profile.png') }}" alt="Profile" class="w-full h-full object-cover">
          </div>
          <svg class="ml-1 w-4 h-4 text-[#5f7186]" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" @click.away="open = false" x-transition
             class="absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-md shadow-lg z-20">
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

    {{-- Mobile menu button (hanya tampil di bawah md) --}}
    <div class="md:hidden flex items-center">
      <button @click="openMenu = !openMenu" class="text-[#111418] focus:outline-none" x-data="{ openMenu: false }">
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

        {{-- Dropdown links untuk mobile --}}
        <div x-show="openMenu" @click.away="openMenu = false" x-transition
             class="absolute top-14 right-4 bg-white border border-gray-200 rounded-md shadow-lg w-48 z-30">
          <nav class="flex flex-col">
            <a href="{{ url('/') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Home</a>
            <a href="{{ route('service') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Service</a>
            <a href="{{ route('komponen.index') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Komponen</a>
            <a href="{{ route('paket.index') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Paket Produk</a>
            <a href="{{ route('about') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Tentang Kita</a>
            <a href="{{ route('contact') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Contact</a>
            <hr class="my-1 border-gray-200">
            {{-- Biar user bisa akses Cart dan Login/Logout dari mobile --}}
            <a href="{{ route('cart.index') }}" class="flex items-center px-4 py-2 text-[#111418] hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#111418]" fill="currentColor" viewBox="0 0 256 256">
                <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
              </svg>
              Cart @if($countCart > 0) <span class="ml-1 bg-red-500 text-white rounded-full text-xs px-1">{{ $countCart }}</span> @endif
            </a>
            @guest
              <a href="{{ route('login') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Login</a>
              <a href="{{ route('register') }}" class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Register</a>
            @else
              <a href="#" @click.prevent="document.getElementById('logout-form-mobile').submit()"
                 class="block px-4 py-2 text-[#111418] hover:bg-gray-100">Logout</a>
              <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            @endguest
          </nav>
        </div>
      </button>
    </div>
  </div>
</header>

  {{-- CONTENT --}}
  <div class="pt-16"></div>
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
   
  </div>

</body>
</html>

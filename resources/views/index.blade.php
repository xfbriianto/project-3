<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technocenter - Keamanan CCTV Terbaik</title>
    <link rel="icon" href="{{ asset('images/logo_TC.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans">
    <!-- Top Banner -->
    <div class="bg-gray-900 text-white py-4 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex items-center justify-center">
            <p class="text-sm sm:text-base text-center">
                Technocenter 😎 • Amankan rumah anda dengan memasang CCTV <span class="font-bold">kualitas terbaik dengan harga yang terjangkau</span>
            </p>
        </div>
    </div>

    <body class="bg-gray-50" style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>

  {{-- NAVBAR --}}
  <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#eaedf0] px-10 py-3">
    <div class="flex items-center gap-8">
      <div class="flex items-center gap-4 text-[#111418]">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="{{ url('/') }}" class="flex items-center gap-4">
            <img src="{{ asset('images/logo_TC.png') }}" alt="Technocenter" class="h-8">
            <h2 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em]">Technocenter</h2>
          </a>
        </div>
      </div>
      
      <!-- Desktop Menu -->
      <div class="flex items-center gap-9">
        <a href="{{ url('/') }}" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200">Home</a>
        <a href="{{ route('service') }}" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200">Service</a>
        <a href="#components" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200">Komponen</a>
        <a href="#paket" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200">Paket Produk</a>
        <a href="{{ route('about') }}" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200">Tentang Kita</a>
      </div>
    </div>
    
    <div class="flex flex-1 justify-end gap-8">
      <!-- Search Bar -->
      <label class="flex flex-col min-w-40 !h-10 max-w-64">
        <div class="flex w-full flex-1 items-stretch rounded h-full">
          <div
            class="text-[#5f7186] flex border-none bg-[#eaedf0] items-center justify-center pl-4 rounded-l border-r-0"
          >
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
          </div>
          <input
            placeholder="Search"
            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#eaedf0] focus:border-none h-full placeholder:text-[#5f7186] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
            value=""
          />
        </div>
      </label>
      
      <!-- Contact Link -->
      <a href="#contact" class="text-[#111418] text-sm font-medium leading-normal hover:text-blue-600 transition-colors duration-200 flex items-center">Contact</a>
      
      <!-- Cart Button -->
      {{-- Mulai blok: ikon keranjang dengan badge --}}
      @auth
        @php
          $countCart = Auth::user()->cartItems()->sum('quantity');
        @endphp
        <a href="{{ route('cart.index') }}" class="relative">
          <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded h-10 bg-[#eaedf0] text-[#111418] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5 hover:bg-[#d6dbe0] transition-colors duration-200">
            <div class="text-[#111418]">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
              </svg>
            </div>
          </button>
          @if($countCart > 0)
            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs px-1 min-w-[20px] h-5 flex items-center justify-center">
              {{ $countCart }}
            </span>
          @endif
        </a>
      @else
        <a href="{{ route('cart.index') }}" class="relative">
          <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded h-10 bg-[#eaedf0] text-[#111418] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5 hover:bg-[#d6dbe0] transition-colors duration-200">
            <div class="text-[#111418]">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
              </svg>
            </div>
          </button>
        </a>
      @endauth
      {{-- Akhir blok ikon keranjang dengan badge --}}

      <!-- Profile Dropdown -->
      <div class="relative ml-4" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center focus:outline-none">
          <div class="w-10 h-10 rounded-full bg-gray-200 overflow-hidden">
            <img src="{{ asset('images/profile.png') }}" alt="Profile" class="w-full h-full object-cover">
          </div>
          <svg class="ml-2 w-4 h-4 text-[#5f7186]" fill="currentColor" viewBox="0 0 20 20">
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
  </header>

    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://c0.wallpaperflare.com/preview/801/601/165/cctv-security-camera-surveillance.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
            <div class="max-w-3xl text-white">
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold leading-tight mb-6">
                    Kenyamanan dan keamanan<br>yang utama
                </h1>
                <p class="text-xl sm:text-2xl mb-8">
                    Tingkatkan Keamanan Rumah atau Bisnis Anda dengan Memasang CCTV.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-md transition duration-300">
                        Hubungi kami
                    </a>
                    <a href="{{ route('produk.index') }}" class="bg-transparent hover:bg-white hover:text-gray-900 text-white font-medium py-3 px-8 rounded-md border border-white transition duration-300">
                        Produk
                    </a>
                    <a href="#" class="bg-transparent hover:bg-white hover:text-gray-900 text-white font-medium py-3 px-8 rounded-md border border-white transition duration-300">
                        Penjualan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="container mx-auto">
        <!-- Title & Subtitle -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Produk dan merek yang kami pasarkan</h2>
            <p class="text-gray-600 text-base sm:text-lg">
                Produk berkualitas dengan sistem termutakhir untuk<br>keamanan dan kenyamanan bisnis anda
            </p>
        </div>

        <!-- Logos -->
        <div class="flex justify-center items-center flex-wrap gap-12">
            <!-- Hikvision -->
            <div class="flex justify-center items-center p-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Hikvision_logo.svg/960px-Hikvision_logo.svg.png" 
                     alt="Hikvision Logo" 
                     class="h-12 md:h-16 object-contain" />
            </div>

            <!-- Dahua -->
            <div class="flex justify-center items-center p-4">
                <img src="https://www.dahuasecurity.com/_nuxt/img/LOGO_header.57e0e23.png" 
                     alt="Dahua Logo" 
                     class="h-12 md:h-16 object-contain" />
            </div>

            <!-- SPC -->
            <div class="flex justify-center items-center p-4">
                <img src="https://spc-indonesia.com/wp-content/uploads/elementor/thumbs/logo-SPC-black-blue-qo4xvbj10eib157ws2pboiefk5l133sujfxliyg6ps.png" 
                     alt="SPC Logo" 
                     class="h-12 md:h-16 object-contain" />
            </div>
        </div>
    </div>
</section>

<!-- Produk Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#1e293b]">
  <div class="container mx-auto">
    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-base text-blue-300 font-semibold tracking-wide uppercase">Paket Pemasangan CCTV</h2>
      <h3 class="text-3xl sm:text-4xl font-bold text-white mb-4">Pilihan Paket Pemasangan CCTV sesuai Kebutuhan Bisnis Anda!</h3>
      <p class="text-gray-300">
        Temukan paket pemasangan CCTV yang sesuai dengan keamanan rumah atau bisnis Anda.  
        Dengan teknologi terkini dan fitur kunci, kami siap memberikan solusi keamanan yang handal.  
        Hubungi kami sekarang untuk konsultasi gratis!
      </p>
      <div class="mt-6">
        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition">
          Pasang Sekarang
        </a>
      </div>
    </div>

    <!-- Product Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      
      <!-- Card 1: Hikvision -->
      <div class="relative rounded-xl overflow-hidden shadow-lg">
        <!-- Logo -->
        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md z-10">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Hikvision_logo.svg/960px-Hikvision_logo.svg.png"
               alt="Hikvision" class="h-5 object-contain">
        </div>
        <!-- Image -->
        <img src="https://plus.unsplash.com/premium_photo-1675016457613-2291390d1bf6?w=500&auto=format&fit=crop&q=60"
             alt="CCTV Hikvision"
             class="w-full h-64 object-cover">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <!-- Text & Button -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">HIKVISION</h4>
          <a href="#"
             class="inline-block mt-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>

      <!-- Card 2: Dahua -->
      <div class="relative rounded-xl overflow-hidden shadow-lg">
        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md z-10">
          <img src="https://www.dahuasecurity.com/_nuxt/img/LOGO_header.57e0e23.png"
               alt="Dahua" class="h-5 object-contain">
        </div>
        <img src="https://images.unsplash.com/photo-1534157327728-accacabda257?w=500&auto=format&fit=crop&q=60"
             alt="CCTV Dahua"
             class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">DAHUA</h4>
          <a href="#"
             class="inline-block mt-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>

      <!-- Card 3: SPC -->
      <div class="relative rounded-xl overflow-hidden shadow-lg">
        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md z-10">
          <img src="https://spc-indonesia.com/wp-content/uploads/elementor/thumbs/logo-SPC-black-blue-qo4xvbj10eib157ws2pboiefk5l133sujfxliyg6ps.png"
               alt="SPC" class="h-5 object-contain">
        </div>
        <img src="https://images.unsplash.com/photo-1525939815185-7b25b346d3db?w=500&auto=format&fit=crop&q=60"
             alt="CCTV SPC"
             class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">SPC</h4>
          <a href="#"
             class="inline-block mt-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Komponen Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#031823]">
  <div class="container mx-auto">
    <!-- Judul -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-sm text-yellow-300 font-medium tracking-wide uppercase mb-2">Komponen Pemasangan CCTV</h2>
      <h3 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">
        Komponen Support Untuk Membantu<br>
        Kualitas Produk
      </h3>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="relative rounded-xl overflow-hidden shadow-xl">
        <!-- Logo -->
        <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-br-xl z-10">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Hikvision_logo.svg/960px-Hikvision_logo.svg.png"
               alt="Hikvision" class="h-6 object-contain">
        </div>
        <!-- Gambar -->
        <img src="https://plus.unsplash.com/premium_photo-1675016457613-2291390d1bf6?w=500&auto=format&fit=crop&q=60"
             alt="CCTV Hikvision"
             class="w-full h-72 object-cover">
        <!-- Overlay gradien -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <!-- Teks & button -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">HIKVISION</h4>
          <a href="#"
             class="mt-3 inline-block bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-5 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative rounded-xl overflow-hidden shadow-xl">
        <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-br-xl z-10">
          <img src="https://www.dahuasecurity.com/_nuxt/img/LOGO_header.57e0e23.png"
               alt="Dahua" class="h-6 object-contain">
        </div>
        <img src="https://images.unsplash.com/photo-1534157327728-accacabda257?w=500&auto=format&fit=crop&q=60"
             alt="CCTV Dahua"
             class="w-full h-72 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">DAHUA</h4>
          <a href="#"
             class="mt-3 inline-block bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-5 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative rounded-xl overflow-hidden shadow-xl">
        <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-br-xl z-10">
          <img src="https://spc-indonesia.com/wp-content/uploads/elementor/thumbs/logo-SPC-black-blue-qo4xvbj10eib157ws2pboiefk5l133sujfxliyg6ps.png"
               alt="SPC" class="h-6 object-contain">
        </div>
        <img src="https://images.unsplash.com/photo-1525939815185-7b25b346d3db?w=500&auto=format&fit=crop&q=60"
             alt="CCTV SPC"
             class="w-full h-72 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-center px-4">
          <h4 class="text-white font-semibold text-lg">SPC</h4>
          <a href="#"
             class="mt-3 inline-block bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-5 rounded-md text-sm transition">
            Detail
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How We Work Section -->
<section class="py-20 bg-white">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-3xl font-extrabold text-gray-900">Bagaimana Kami Bekerja?</h2>
      <p class="mt-2 text-gray-500 max-w-lg mx-auto">
        Tidak perlu ragu untuk menggunakan jasa pasang CCTV kami.
        Proses pemasangan CCTV dari kami setidaknya meliputi:
      </p>
    </div>

    <!-- Steps -->
    <div class="space-y-24">
      <!-- Step 01 -->
      <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
        <div class="md:w-1/2">
          <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60"
               alt="Konsultasi" class="rounded-lg shadow-lg w-full h-64 object-cover">
        </div>
        <div class="md:w-1/2">
          <div class="text-red-500 font-bold text-xl">01</div>
          <h3 class="mt-2 text-2xl font-semibold text-gray-900">Solusi Keamanan yang Dipersonalisasi</h3>
          <p class="mt-4 text-gray-600">
            Ketika Anda memilih layanan pemasangan CCTV kami, Anda memilih keamanan yang andal dan profesional.  
            Kami memulai dengan mendengarkan kebutuhan dan preferensi Anda secara cermat, memastikan bahwa  
            solusi yang kami rekomendasikan sepenuhnya sesuai dengan situasi dan anggaran Anda.
          </p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="flex flex-col md:flex-row-reverse items-center md:items-start gap-12">
        <div class="md:w-1/2">
          <img src="https://c1.wallpaperflare.com/preview/281/759/746/mini-storage-music-stored-music-library-mini-warehouse-self-small-warehouse.jpg"
               alt="Perangkat Berkualitas" class="rounded-lg shadow-lg w-full h-64 object-cover">
        </div>
        <div class="md:w-1/2">
          <div class="text-red-500 font-bold text-xl">02</div>
          <h3 class="mt-2 text-2xl font-semibold text-gray-900">Penggunaan Perangkat Berkualitas Tinggi</h3>
          <p class="mt-4 text-gray-600">
            Kami hanya menggunakan perangkat CCTV berkualitas tinggi dari merek terkemuka, memastikan kualitas  
            gambar yang tajam dan koneksi yang konsisten. Setelah instalasi, tim kami akan melakukan pengujian  
            menyeluruh untuk memastikan bahwa setiap kamera berfungsi dengan baik dan terhubung dengan sistem monitoring Anda.
          </p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
        <div class="md:w-1/2">
          <img src="https://t3.ftcdn.net/jpg/10/27/37/84/360_F_1027378493_ZbxBqGSej2wS6yRQHTHvvItRMSf7TGw6.jpg"
               alt="Dukungan Teknis" class="rounded-lg shadow-lg w-full h-64 object-cover">
        </div>
        <div class="md:w-1/2">
          <div class="text-red-500 font-bold text-xl">03</div>
          <h3 class="mt-2 text-2xl font-semibold text-gray-900">Dukungan Teknis dan Pelatihan yang Berkelanjutan</h3>
          <p class="mt-4 text-gray-600">
            Setelah pemasangan, kami tidak berhenti di situ. Kami menyediakan dukungan teknis dan pelatihan  
            berkelanjutan bagi tim Anda untuk memastikan Anda dapat memaksimalkan semua fitur sistem CCTV dengan mudah.
          </p>
        </div>
      </div>
    </div>

    <!-- Testimonials -->
    <div class="mt-24 text-center">
      <h4 class="text-xl font-semibold text-gray-900">Apa yang Client Katakan Mengenai Kami?</h4>
      <p class="mt-2 text-gray-500">Testimoni terbaik dari kalian untuk pelayanan dan kualitas kami</p>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
        <!-- Testi 1 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Stephen Smith" class="w-16 h-16 rounded-full mx-auto">
          <h5 class="mt-4 font-medium text-gray-900">Stephen Smith</h5>
          <p class="text-sm text-gray-500">Co Founder</p>
          <p class="mt-2 text-gray-600 italic">"Sangat profesional dan hasilnya memuaskan! Highly recommended."</p>
        </div>
        <!-- Testi 2 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Lorem Robinson" class="w-16 h-16 rounded-full mx-auto">
          <h5 class="mt-4 font-medium text-gray-900">Lorem Robinson</h5>
          <p class="text-sm text-gray-500">Manager</p>
          <p class="mt-2 text-gray-600 italic">"Timnya cepat tanggap dan solusinya tepat sasaran. Memuaskan!"</p>
        </div>
        <!-- Testi 3 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Saddika Alard" class="w-16 h-16 rounded-full mx-auto">
          <h5 class="mt-4 font-medium text-gray-900">Saddika Alard</h5>
          <p class="text-sm text-gray-500">Team Leader</p>
          <p class="mt-2 text-gray-600 italic">"Layanan purna jualnya top! Sistem CCTV kami jadi lebih andal."</p>
        </div>
      </div>
    </div>

    <!-- What we sell -->
    <div class="mt-24 text-center">
      <h4 class="text-xl font-semibold text-gray-900">What we sell</h4>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        barang terbaik gaming, headset, keyboard dan barang berkualitas 
        lain nya, memberi pengalaman terbaik dengan teknologi mutahir
      </p>
    </div>

    <!-- Stats -->
    <div class="mt-12 border-t pt-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="p-4">
          <h3 class="text-3xl font-extrabold text-gray-900">50+</h3>
          <p class="mt-1 text-gray-500">lebih kompetitor bergabung dan suplayer terbaik kami</p>
        </div>
        <div class="p-4 border-t md:border-t-0 md:border-l md:border-r border-gray-200">
          <h3 class="text-3xl font-extrabold text-gray-900">100%</h3>
          <p class="mt-1 text-gray-500">barang kami terbaik dan termurah</p>
        </div>
        <div class="p-4 border-t md:border-t-0">
          <h3 class="text-3xl font-extrabold text-gray-900">50 Million</h3>
          <p class="mt-1 text-gray-500">penjualan kami, hanya untuk membuat kalian senang</p>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Call to Action -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-blue-600 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Siap Untuk Meningkatkan Keamanan?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik untuk sistem keamanan CCTV Anda.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-white text-blue-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-md transition duration-300">
                    Hubungi Kami
                </a>
                <a href="{{ route('produk.index') }}" class="bg-transparent hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-md border border-white transition duration-300">
                    Lihat Produk
                </a>
            </div>
        </div>
    </section>

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

<!-- FontAwesome CDN for icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>


    <!-- Chat Widget -->
    <div class="fixed bottom-6 right-6">
        <button class="bg-blue-600 hover:bg-blue-700 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Button - Only visible on mobile -->
    <div class="md:hidden fixed top-4 right-4 z-50">
        <button id="mobile-menu-button" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-900 bg-opacity-95 z-40 hidden flex flex-col items-center justify-center">
        <button id="close-menu-button" class="absolute top-4 right-4 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="flex flex-col items-center space-y-6">
            <a href="#" class="text-white text-xl font-medium py-2 px-4 border-b-2 border-blue-500">Home</a>
            <a href="#" class="text-white text-xl font-medium py-2 px-4">Service</a>
            <a href="#" class="text-white text-xl font-medium py-2 px-4">komponen</a>
            <a href="#" class="text-white text-xl font-medium py-2 px-4">Paket Produk</a>
            <a href="#" class="text-white text-xl font-medium py-2 px-4">Tentang kita</a>
            <a href="#" class="text-white text-xl font-medium py-2 px-4">Contact</a>
        </div>
    </div>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMenuButton = document.getElementById('close-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            closeMenuButton.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });
        });
    </script>
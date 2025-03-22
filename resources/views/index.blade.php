<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   VIEW TECH
  </title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-gray-50 text-gray-900">
  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
     <a class="flex items-center space-x-2" href="#">
      <img alt="Logo CCTV camera icon in blue and black" class="h-10 w-10" height="40" src="https://storage.googleapis.com/a1aa/image/5a9821f9-1302-43f4-14be-cf67416a99cc.jpg" width="40"/>
      <span class="font-bold text-xl text-blue-600">
       VIEW TECH
      </span>
     </a>
     <div class="hidden md:flex space-x-8 font-semibold text-gray-700">
      <a class="hover:text-blue-600 transition" href="#">
       Home
      </a>
      <a class="hover:text-blue-600 transition" href="#">
       Products
      </a>
      <a class="hover:text-blue-600 transition" href="#">
       Brands
      </a>
      <a class="hover:text-blue-600 transition" href="#">
       About Us
      </a>
      <a class="hover:text-blue-600 transition" href="#">
       Contact
      </a>
     </div>
     <div class="hidden md:flex items-center space-x-4">
      <button aria-label="Search" class="text-gray-600 hover:text-blue-600 transition">
       <i class="fas fa-search fa-lg">
       </i>
        </button>
      <!-- Dropdown User Account -->
      <div class="relative group">
        <button aria-label="User Account" class="text-gray-600 hover:text-blue-600 transition focus:outline-none">
          <i class="fas fa-user fa-lg"></i>
        </button>
        <div class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg py-2 z-50 opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 pointer-events-none group-hover:pointer-events-auto group-focus-within:pointer-events-auto transition-opacity">
          <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">Login</a>
          <a href="{{ route('register') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">Register</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">Profile</a>
          <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">Logout</a>
        </div>
      </div>
            <a href="{{ route('keranjang') }}">
        <button aria-label="Shopping Cart" class="relative text-gray-600 hover:text-blue-600 transition">
          <i class="fas fa-shopping-cart fa-lg"></i>
          <span class="absolute -top-2 -right-2 bg-red-600 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">
            3
          </span>
        </button>
      </a>
     </div>
     <div class="md:hidden">
      <button aria-label="Open menu" class="text-gray-600 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600" id="mobile-menu-button">
       <i class="fas fa-bars fa-lg">
       </i>
      </button>
     </div>
    </div>
   </div>
   <!-- Mobile Menu -->
   <div class="hidden md:hidden bg-white border-t border-gray-200" id="mobile-menu">
    <a class="block px-4 py-3 text-gray-700 font-semibold hover:bg-blue-50 hover:text-blue-600" href="#">
     Home
    </a>
    <a class="block px-4 py-3 text-gray-700 font-semibold hover:bg-blue-50 hover:text-blue-600" href="#">
     Products
    </a>
    <a class="block px-4 py-3 text-gray-700 font-semibold hover:bg-blue-50 hover:text-blue-600" href="#">
     Brands
    </a>
    <a class="block px-4 py-3 text-gray-700 font-semibold hover:bg-blue-50 hover:text-blue-600" href="#">
     About Us
    </a>
    <a class="block px-4 py-3 text-gray-700 font-semibold hover:bg-blue-50 hover:text-blue-600" href="#">
     Contact
    </a>
    <div class="flex space-x-6 px-4 py-3 text-gray-600">
     <button aria-label="Search" class="hover:text-blue-600">
      <i class="fas fa-search fa-lg">
      </i>
     </button>
     <button aria-label="User Account" class="hover:text-blue-600">
      <i class="fas fa-user fa-lg">
      </i>
     </button>
     <button aria-label="Shopping Cart" class="relative hover:text-blue-600">
      <i class="fas fa-shopping-cart fa-lg">
      </i>
      <span class="absolute -top-2 -right-2 bg-red-600 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">
       3
      </span>
     </button>
    </div>
   </div>
  </nav>
  <!-- Hero Section -->
  <section class="relative bg-white">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col-reverse md:flex-row items-center py-12 md:py-20">
    <div class="w-full md:w-1/2 text-center md:text-left">
     <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 leading-tight">
      Keamanan Terbaik untuk Rumah dan Bisnis Anda
     </h1>
     <p class="mt-4 text-lg text-gray-600">
      Temukan berbagai pilihan CCTV berkualitas tinggi dengan harga terbaik.
          Pantau dan lindungi properti Anda dengan teknologi terbaru.
     </p>
     <a class="inline-block mt-8 px-8 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition" href="#products">
      Belanja Sekarang
     </a>
    </div>
    <div class="w-full md:w-1/2 mb-8 md:mb-0">
     <img alt="Modern home with CCTV security cameras installed on exterior walls and corners, daytime setting with clear blue sky" class="mx-auto rounded-lg shadow-lg" height="400" src="https://storage.googleapis.com/a1aa/image/ac8e47d5-baf7-409f-b9fb-ba6aa388054c.jpg" width="600"/>
    </div>
   </div>
  </section>
  <!-- Featured Products -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12" id="products">
   <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
    Produk Unggulan
   </h2>
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
     <img alt="Close-up of CCTV camera model A with black casing and infrared night vision LEDs" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/beef6ba2-986f-4883-8559-af5412871551.jpg" width="400"/>
     <div class="p-4">
      <h3 class="text-lg font-semibold text-gray-900">
       CCTV Camera Model A
      </h3>
      <p class="mt-2 text-gray-600 text-sm">
       Kamera CCTV resolusi 4K dengan night vision dan deteksi gerakan.
      </p>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-blue-600 font-bold text-lg">
        Rp1.200.000
       </span>
       <button class="bg-blue-600 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-700 transition">
        Tambah ke Keranjang
       </button>
      </div>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
     <img alt="Black dome CCTV camera model B mounted on ceiling with wide angle lens" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/ee847799-e2c3-4b94-b25f-6ebd780a81f6.jpg" width="400"/>
     <div class="p-4">
      <h3 class="text-lg font-semibold text-gray-900">
       CCTV Camera Model B
      </h3>
      <p class="mt-2 text-gray-600 text-sm">
       Kamera dome dengan fitur pan-tilt dan zoom optik 4x.
      </p>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-blue-600 font-bold text-lg">
        Rp1.800.000
       </span>
       <button class="bg-blue-600 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-700 transition">
        Tambah ke Keranjang
       </button>
      </div>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
     <img alt="White bullet CCTV camera model C with weatherproof casing installed outdoors" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/5c923aa8-3099-4f66-9b53-a17027d199db.jpg" width="400"/>
     <div class="p-4">
      <h3 class="text-lg font-semibold text-gray-900">
       CCTV Camera Model C
      </h3>
      <p class="mt-2 text-gray-600 text-sm">
       Kamera bullet tahan cuaca dengan resolusi Full HD 1080p.
      </p>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-blue-600 font-bold text-lg">
        Rp950.000
       </span>
       <button class="bg-blue-600 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-700 transition">
        Tambah ke Keranjang
       </button>
      </div>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
     <img alt="Compact CCTV camera model D with integrated microphone and speaker for two-way audio" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/09ac997f-18d8-442c-771e-8592d643dc29.jpg" width="400"/>
     <div class="p-4">
      <h3 class="text-lg font-semibold text-gray-900">
       CCTV Camera Model D
      </h3>
      <p class="mt-2 text-gray-600 text-sm">
       Kamera dengan audio dua arah dan koneksi Wi-Fi.
      </p>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-blue-600 font-bold text-lg">
        Rp1.500.000
       </span>
       <button class="bg-blue-600 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-700 transition">
        Tambah ke Keranjang
       </button>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Brands Section -->
  <section class="bg-white py-12">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
     Merek Terpercaya
    </h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-8 items-center justify-items-center">
     <img alt="Logo brand 1, stylized blue shield with white CCTV camera icon" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/1f88c40a-2cf8-47d2-7db3-eb9f07dbd246.jpg" width="120"/>
     <img alt="Logo brand 2, red circle with white letter C and camera lens graphic" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/3c24ee1e-11e2-4e22-ea84-430c7f1bc6cf.jpg" width="120"/>
     <img alt="Logo brand 3, black and yellow hexagon with stylized eye symbol" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/28f2d5f6-0c01-472a-0402-802a09b92e06.jpg" width="120"/>
     <img alt="Logo brand 4, green square with white CCTV camera silhouette" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/e8929d3f-0fa8-4d59-0c54-6bbe0c6214a7.jpg" width="120"/>
     <img alt="Logo brand 5, orange triangle with black camera aperture icon" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/60fce6b8-8d7f-40b9-992b-db71ce9d91f7.jpg" width="120"/>
     <img alt="Logo brand 6, purple circle with white wireless signal waves and camera" class="max-h-12 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/976ac182-62e0-4fa7-dcb5-e170f5c51988.jpg" width="120"/>
    </div>
   </div>
  </section>
  <!-- Why Choose Us Section -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
   <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
    Kenapa Memilih Kami?
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
     <i class="fas fa-shield-alt text-blue-600 text-5xl mb-4">
     </i>
     <h3 class="text-xl font-semibold mb-2">
      Keamanan Terjamin
     </h3>
     <p class="text-gray-600">
      Produk kami menggunakan teknologi terbaru untuk memastikan keamanan
          properti Anda.
     </p>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
     <i class="fas fa-truck text-blue-600 text-5xl mb-4">
     </i>
     <h3 class="text-xl font-semibold mb-2">
      Pengiriman Cepat
     </h3>
     <p class="text-gray-600">
      Kami menyediakan pengiriman cepat dan aman ke seluruh wilayah
          Indonesia.
     </p>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition">
     <i class="fas fa-headset text-blue-600 text-5xl mb-4">
     </i>
     <h3 class="text-xl font-semibold mb-2">
      Layanan Pelanggan 24/7
     </h3>
     <p class="text-gray-600">
      Tim support kami siap membantu Anda kapan saja dengan layanan terbaik.
     </p>
    </div>
   </div>
  </section>
  <!-- Latest News Section -->
  <section class="bg-white py-12">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
     Berita Terbaru
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <article class="bg-gray-50 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
      <img alt="Technician installing CCTV camera on office ceiling with tools and safety gear" class="w-full h-48 object-cover" height="250" src="https://storage.googleapis.com/a1aa/image/625436aa-0af8-47e1-abec-e400ed9dbc0f.jpg" width="400"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold mb-2">
        Tips Memilih CCTV untuk Kantor Anda
       </h3>
       <p class="text-gray-600 text-sm mb-4">
        Pelajari cara memilih CCTV yang tepat untuk kebutuhan keamanan
              kantor Anda.
       </p>
       <a class="text-blue-600 font-semibold hover:underline inline-flex items-center" href="#">
        Baca Selengkapnya
        <i class="fas fa-arrow-right ml-2">
        </i>
       </a>
      </div>
     </article>
     <article class="bg-gray-50 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
      <img alt="Close-up of CCTV camera night vision feature showing infrared LEDs glowing red" class="w-full h-48 object-cover" height="250" src="https://storage.googleapis.com/a1aa/image/84867779-1848-4cb6-a402-38014b579c90.jpg" width="400"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold mb-2">
        Manfaat Night Vision pada CCTV
       </h3>
       <p class="text-gray-600 text-sm mb-4">
        Ketahui bagaimana fitur night vision membantu pengawasan di malam
              hari.
       </p>
       <a class="text-blue-600 font-semibold hover:underline inline-flex items-center" href="#">
        Baca Selengkapnya
        <i class="fas fa-arrow-right ml-2">
        </i>
       </a>
      </div>
     </article>
     <article class="bg-gray-50 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
      <img alt="Wireless CCTV camera mounted on outdoor wall with clear blue sky background" class="w-full h-48 object-cover" height="250" src="https://storage.googleapis.com/a1aa/image/d9525191-3f38-4fb1-7ab9-6acd227f1e11.jpg" width="400"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold mb-2">
        Panduan Memasang CCTV Wireless Sendiri
       </h3>
       <p class="text-gray-600 text-sm mb-4">
        Langkah mudah memasang CCTV wireless tanpa bantuan teknisi.
       </p>
       <a class="text-blue-600 font-semibold hover:underline inline-flex items-center" href="#">
        Baca Selengkapnya
        <i class="fas fa-arrow-right ml-2">
        </i>
       </a>
      </div>
     </article>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 py-10">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
    <div>
     <h4 class="text-white font-bold text-lg mb-4">
      CCTV Store
     </h4>
     <p class="text-gray-400 text-sm">
      Menyediakan berbagai produk CCTV berkualitas untuk keamanan rumah dan
          bisnis Anda.
     </p>
     <div class="flex space-x-4 mt-4">
      <a aria-label="Facebook" class="hover:text-white transition" href="#">
       <i class="fab fa-facebook fa-lg">
       </i>
      </a>
      <a aria-label="Twitter" class="hover:text-white transition" href="#">
       <i class="fab fa-twitter fa-lg">
       </i>
      </a>
      <a aria-label="Instagram" class="hover:text-white transition" href="#">
       <i class="fab fa-instagram fa-lg">
       </i>
      </a>
      <a aria-label="LinkedIn" class="hover:text-white transition" href="#">
       <i class="fab fa-linkedin fa-lg">
       </i>
      </a>
     </div>
    </div>
    <div>
     <h4 class="text-white font-bold text-lg mb-4">
      Produk
     </h4>
     <ul class="space-y-2 text-sm">
      <li>
       <a class="hover:text-white transition" href="#">
        CCTV Camera Model A
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        CCTV Camera Model B
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        CCTV Camera Model C
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        CCTV Camera Model D
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h4 class="text-white font-bold text-lg mb-4">
      Perusahaan
     </h4>
     <ul class="space-y-2 text-sm">
      <li>
       <a class="hover:text-white transition" href="#">
        Tentang Kami
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        Karir
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        Blog
       </a>
      </li>
      <li>
       <a class="hover:text-white transition" href="#">
        Kontak
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h4 class="text-white font-bold text-lg mb-4">
      Hubungi Kami
     </h4>
     <address class="not-italic text-sm space-y-2">
      <p>
       Jl. Komputer No. 123, Banyuwangi, Jatim, Indonesia
      </p>
      <p>
       Telepon: (021) 1234-5678
      </p>
      <p>
       Email: support@cctvstore.id
      </p>
     </address>
    </div>
   </div>
   <div class="mt-10 text-center text-gray-500 text-xs">
    © 2024 CCTV Store. All rights reserved.
   </div>
  </footer>
  <script>
   const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
 </body>
</html>

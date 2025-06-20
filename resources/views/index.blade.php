@extends('layouts.public')

@section('title', 'Home Page | Technocenter')

@section('content')
<!-- Top Banner -->
    <div class="bg-gray-900 text-white py-4 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex items-center justify-center">
            <p class="text-sm sm:text-base text-center">
                Technocenter 😎 • Amankan rumah anda dengan memasang CCTV <span class="font-bold">kualitas terbaik dengan harga yang terjangkau</span>
            </p>
        </div>
    </div>
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
                    <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-md transition duration-300">
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

    
<!-- FontAwesome CDN for icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>


    <!-- Chat Widget -->
   

    

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
@endsection
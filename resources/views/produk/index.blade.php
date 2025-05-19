@extends('layouts.public')

@section('title', 'SecureView CCTV - Produk')

@section('content')
  <!-- Hero Section with Search -->
  <div class="bg-gradient-to-r from-slate-900 to-slate-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
      <img src="https://img.freepik.com/premium-photo/cctv-security-camera-building-background-generative-ai_634053-3073.jpg" alt="Hero Image" class="w-full h-full object-cover">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative py-12 sm:py-16 lg:py-20">
      <div class="text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">Solusi Keamanan Terbaik Untuk Anda</h1>
        <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-8">Temukan produk CCTV berkualitas tinggi untuk keamanan rumah dan bisnis Anda</p>
        <div class="max-w-xl mx-auto">
          <div class="relative flex rounded-full shadow-lg overflow-hidden">
           <form action="{{ route('produk.cari') }}" method="GET" class="relative w-full">
  <input type="text" name="q" placeholder="Cari produk ..." class="w-full pl-5 pr-16 py-4 bg-white focus:outline-none text-gray-700">
  <button type="submit" class="absolute right-0 top-0 bottom-0 px-5 bg-blue-600 hover:bg-blue-700 transition text-white flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>
  </button>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Product Categories Tabs -->
  <div class="bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <div class="flex overflow-x-auto gap-2 pb-1 scrollbar-hide">
        <button class="bg-blue-600 text-white px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm">Semua Produk</button>
        <button class="bg-white text-slate-700 hover:bg-slate-50 px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm shadow-sm">CCTV Indoor</button>
        <button class="bg-white text-slate-700 hover:bg-slate-50 px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm shadow-sm">CCTV Outdoor</button>
        <button class="bg-white text-slate-700 hover:bg-slate-50 px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm shadow-sm">IP Camera</button>
        <button class="bg-white text-slate-700 hover:bg-slate-50 px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm shadow-sm">DVR/NVR</button>
        <button class="bg-white text-slate-700 hover:bg-slate-50 px-5 py-2 rounded-full whitespace-nowrap font-medium text-sm shadow-sm">Aksesoris</button>
      </div>
    </div>
  </div>

  <!-- Products Grid -->
  <section class="py-12 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Katalog Produk</h2>
        <div class="flex items-center gap-2">
          <span class="text-sm text-slate-500">Urutkan:</span>
          <select class="bg-white border border-slate-200 rounded-lg py-2 px-3 text-sm text-slate-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option>Terbaru</option>
            <option>Harga Terendah</option>
            <option>Harga Tertinggi</option>
            <option>Terlaris</option>
          </select>
        </div>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($barangs as $barang)
          <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden group">
            <div class="relative">
              @if ($barang->image)
                <img src="{{ asset('storage/' . $barang->image) }}" alt="{{ $barang->name }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
              @else
                <div class="w-full h-48 bg-slate-200 flex items-center justify-center text-slate-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
              @endif
              <div class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $barang->category }}</div>
            </div>
            
            <div class="p-5">
              <div class="min-h-[3rem]">
                <h3 class="text-lg font-semibold text-slate-800 mb-1 line-clamp-2">{{ $barang->name }}</h3>
              </div>
              <div class="flex items-center mb-3">
                <div class="flex text-amber-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                </div>
                <span class="text-slate-500 text-xs ml-1">5.0 (120)</span>
              </div>
              <p class="text-slate-600 text-sm mb-3 line-clamp-2">{{ $barang->description }}</p>
              <div class="flex justify-between items-center">
                <p class="text-blue-600 font-bold text-lg">Rp {{ number_format($barang->price, 0, ',', '.') }}</p>
                <button class="bg-slate-100 hover:bg-slate-200 transition text-slate-700 rounded-full p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </button>
              </div>
              <div class="pt-4 mt-4 border-t border-slate-100">
                <a href="#" class="block w-full bg-blue-600 hover:bg-blue-700 transition text-white text-center py-2 rounded-lg font-medium">Lihat Detail</a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-span-full bg-white rounded-xl p-12 text-center shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-slate-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <p class="text-slate-600 text-lg mb-6">Belum ada produk yang tersedia saat ini.</p>
            <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-3 rounded-lg font-medium">Kembali ke Beranda</a>
          </div>
        @endforelse
      </div>
      
      <!-- Pagination -->
      <div class="mt-12 flex justify-center">
        <nav class="flex items-center space-x-1">
          <a href="#" class="px-4 py-2 text-slate-500 bg-white rounded-md hover:bg-slate-100">
            <span class="sr-only">Previous</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-md">1</a>
          <a href="#" class="px-4 py-2 text-slate-700 bg-white rounded-md hover:bg-slate-100">2</a>
          <a href="#" class="px-4 py-2 text-slate-700 bg-white rounded-md hover:bg-slate-100">3</a>
          <span class="px-4 py-2 text-slate-400">...</span>
          <a href="#" class="px-4 py-2 text-slate-700 bg-white rounded-md hover:bg-slate-100">8</a>
          <a href="#" class="px-4 py-2 text-slate-500 bg-white rounded-md hover:bg-slate-100">
            <span class="sr-only">Next</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="bg-gradient-to-r from-blue-600 to-blue-800 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
      <div class="mb-6 md:mb-0">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Butuh Konsultasi?</h2>
        <p class="text-blue-100">Tim ahli kami siap membantu kebutuhan keamanan Anda</p>
      </div>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="#" class="bg-white hover:bg-slate-50 text-blue-600 px-6 py-3 rounded-lg font-medium text-center">Hubungi Kami</a>
        <a href="#" class="bg-blue-900 hover:bg-blue-950 text-white px-6 py-3 rounded-lg font-medium text-center">Jadwalkan Demo</a>
      </div>
    </div>
  </section
@endsection
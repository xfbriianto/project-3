@extends('layouts.public')

@section('title', 'Produk | Technocenter')

@section('content')
  <!-- Hero Section with Search -->
  <div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
      <div class="px-4 py-3">
        <label class="flex flex-col min-w-40 h-12 w-full">
          <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
            <div class="text-[#5f7186] flex border-none bg-[#eaedf0] items-center justify-center pl-4 rounded-l-xl border-r-0" data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
              </svg>
            </div>
            <form action="{{ route('produk.cari') }}" method="GET" class="flex w-full">
              <input type="text" name="q" placeholder="Search for products" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#eaedf0] focus:border-none h-full placeholder:text-[#5f7186] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" value="" />
            </form>
          </div>
        </label>
      </div>

      <!-- Product Categories -->
      <div class="flex gap-3 p-3 flex-wrap pr-4">
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">All Products</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Indoor Cameras</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Outdoor Cameras</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Wireless Systems</p>
        </div>
      </div>

      <!-- Sort Options -->
      <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Sort by</h3>
      <div class="flex gap-3 p-3 flex-wrap pr-4">
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Newest</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Most Popular</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Lowest Price</p>
        </div>
        <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#eaedf0] pl-4 pr-4">
          <p class="text-[#111418] text-sm font-medium leading-normal">Highest Price</p>
        </div>
      </div>
      
    <!-- Products Grid -->
<div class="grid grid-cols-[repeat(auto-fill,minmax(280px,280px))] gap-4 p-4 justify-center">
  @forelse ($barangs as $barang)
    <div class="flex flex-col h-full gap-3 pb-3 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 max-w-[280px]">
      <div class="relative group">
        <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
             style='background-image: url("{{ $barang->image ? asset('storage/' . $barang->image) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuBM5gY2nc1auDrkV8mZUeydxBZ2SyNOQe6Q0YHd0upv8NWLCb_VlXs_gax86yIt5nq4KpCq7OdnJW6z48ZdqZdRrCXJUQok2KZRfdWm85VEJLP0fHN_jZKK26y68vBA258AukA9w2QEB7wCW0qaPrDeHROoSGSRGMX_F24oume6d31iQwKYlBPRo0zEDOoybUthzUHEjxO6znlsAAIDEqXy-3unWO-A8e8AYJl6GIcNphOBV-bnKw9cfTTIzy4yoidTd9n0vAvBH-2S' }}")'>
        </div>
        <!-- Wishlist Button -->
        <button class="absolute top-2 right-2 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors duration-200 shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600 hover:text-red-500 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </button>
      </div>

      <div class="flex flex-col flex-1 px-3">
        <div class="space-y-2 mb-3">
          <h3 class="text-[#111418] text-base font-medium leading-normal line-clamp-2">{{ $barang->name }}</h3>
          <p class="text-[#5f7186] text-sm font-normal leading-normal line-clamp-2">{{ Str::limit($barang->description, 45) }}</p>
          
          <div class="flex items-center justify-between">
            <div class="flex flex-col">
              <span class="text-[#111418] text-sm font-bold">Rp {{ number_format($barang->price, 0, ',', '.') }}</span>
              <span class="text-[#5f7186] text-sm font-normal leading-normal">Category: {{ $barang->category }}</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons - Always at bottom -->
        <div class="flex gap-2 mt-auto">
          <a href="{{ route('produk.show', $barang->id) }}"
             class="flex-1 bg-[#111418] text-white text-xs font-medium py-2 px-3 rounded-md hover:bg-[#2a2a2a] transition-colors duration-200 text-center">
            Detail
          </a>
          <button class="w-8 h-8 bg-[#eaedf0] hover:bg-[#d1d5db] rounded-md flex items-center justify-center transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#111418]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m1.6 8L5 3H2m5 10v6a1 1 0 001 1h12a1 1 0 001-1v-6M9 19v2m6-2v2" />
            </svg>
          </button>
        </div>
      </div>
    </div>
        
  @empty
          <!-- Empty State -->
          <div class="col-span-full flex flex-col items-center justify-center p-8">
            <div class="w-16 h-16 bg-[#eaedf0] rounded-full flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#5f7186]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
              </svg>
            </div>
            <h3 class="text-[#111418] text-lg font-medium leading-normal mb-2">Belum Ada Produk</h3>
            <p class="text-[#5f7186] text-sm font-normal leading-normal text-center max-w-md">
              Produk belum tersedia saat ini. Silakan kembali lagi nanti atau jelajahi kategori lainnya.
            </p>
          </div>
        @endforelse
      </div>

      <!-- Pagination -->
      <div class="flex items-center justify-center p-4">
        <a href="#" class="flex size-10 items-center justify-center">
          <div class="text-[#111418]" data-icon="CaretLeft" data-size="18px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
              <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
            </svg>
          </div>
        </a>
        <a class="text-sm font-bold leading-normal tracking-[0.015em] flex size-10 items-center justify-center text-[#111418] rounded-full bg-[#eaedf0]" href="#">1</a>
        <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">2</a>
        <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">3</a>
        <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">4</a>
        <a href="#" class="flex size-10 items-center justify-center">
          <div class="text-[#111418]" data-icon="CaretRight" data-size="18px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
              <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection
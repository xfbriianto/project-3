{{-- resources/views/keranjang.blade.php --}}
@extends('layouts.public')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mx-auto px-4 py-6">
    @if (!Auth::check())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">Kamu harus login atau register dulu untuk mengakses keranjang.</span>
            <div class="mt-3 space-x-2">
                <a href="{{ route('login') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Register</a>
            </div>
        </div>
@else
  <div x-data="{ show: true }" x-show="show" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Selamat datang, {{ Auth::user()->name }}!</strong>
    <span class="block sm:inline"> Kamu sudah login. Silakan lanjutkan belanja.</span>
    <button @click="show = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-700" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
        </svg>
    </button>
</div>
  <h1 class="text-xl font-semibold text-slate-900">Shopping Cart</h1>

  <div class="grid lg:grid-cols-3 lg:gap-x-8 gap-x-6 gap-y-8 mt-6">
    {{-- Daftar produk di kolom kiri (2/3 lebar) --}}
    <div class="lg:col-span-2 space-y-6">
      {{-- Item 1 --}}
      <div class="flex gap-4 bg-white px-4 py-6 rounded-md shadow-sm border border-gray-200">
        <div class="flex gap-6 sm:gap-4 max-sm:flex-col">
          <div class="w-24 h-24 max-sm:w-24 max-sm:h-24 shrink-0">
            <img src="https://readymadeui.com/images/watch1.webp" class="w-full h-full object-contain" />
          </div>
          <div class="flex flex-col gap-4">
            <div>
              <h3 class="text-sm sm:text-base font-semibold text-slate-900">Stylish Golden Watch</h3>
              <p class="text-[13px] font-medium text-slate-500 mt-2 flex items-center gap-2">
                Color: <span class="inline-block w-4 h-4 rounded-sm bg-[#ac7f48]"></span>
              </p>
            </div>
            <div class="mt-auto">
              <h3 class="text-sm font-semibold text-slate-900">$120.00</h3>
            </div>
          </div>
        </div>

        <div class="ml-auto flex flex-col">
          <div class="flex items-start gap-4 justify-end">
            {{-- Icon Favorite --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-pink-600 inline-block" viewBox="0 0 64 64">
              <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"></path>
            </svg>

            {{-- Icon Hapus --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-red-600 inline-block" viewBox="0 0 24 24">
              <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"></path>
              <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"></path>
            </svg>
          </div>
          <div class="flex items-center gap-3 mt-auto">
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-400 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"></path>
              </svg>
            </button>
            <span class="font-semibold text-base leading-[18px]">2</span>
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-800 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>

      {{-- Item 2 --}}
      <div class="flex gap-4 bg-white px-4 py-6 rounded-md shadow-sm border border-gray-200">
        <div class="flex gap-6 sm:gap-4 max-sm:flex-col">
          <div class="w-24 h-24 max-sm:w-24 max-sm:h-24 shrink-0">
            <img src="https://readymadeui.com/images/watch5.webp" class="w-full h-full object-contain" />
          </div>
          <div class="flex flex-col gap-4">
            <div>
              <h3 class="text-sm sm:text-base font-semibold text-slate-900">Stylish Smart Watch</h3>
              <p class="text-[13px] font-medium text-slate-500 mt-2 flex items-center gap-2">
                Color: <span class="inline-block w-4 h-4 rounded-sm bg-[#e8dcdc]"></span>
              </p>
            </div>
            <div class="mt-auto">
              <h3 class="text-sm font-semibold text-slate-900">$70.00</h3>
            </div>
          </div>
        </div>

        <div class="ml-auto flex flex-col">
          <div class="flex items-start gap-4 justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-pink-600 inline-block" viewBox="0 0 64 64">
              <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill‐slate-400 hover:fill-red-600 inline-block" viewBox="0 0 24 24">
              <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"></path>
              <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"></path>
            </svg>
          </div>
          <div class="flex items-center gap-3 mt-auto">
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-400 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"></path>
              </svg>
            </button>
            <span class="font-semibold text-base leading-[18px]">1</span>
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-800 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>

      {{-- Item 3 --}}
      <div class="flex gap-4 bg-white px-4 py-6 rounded-md shadow-sm border border-gray-200">
        <div class="flex gap-6 sm:gap-4 max-sm:flex-col">
          <div class="w-24 h-24 max-sm:w-24 max-sm:h-24 shrink-0">
            <img src="https://readymadeui.com/images/sunglass6.webp" class="w-full h-full object-contain" />
          </div>
          <div class="flex flex-col gap-4">
            <div>
              <h3 class="text-sm sm:text-base font-semibold text-slate-900">Round Glass</h3>
              <p class="text-[13px] font-medium text-slate-500 mt-2 flex items-center gap-2">
                Color: <span class="inline-block w-4 h-4 rounded-sm bg-black"></span>
              </p>
            </div>
            <div class="mt-auto">
              <h3 class="text-sm font-semibold text-slate-900">$20.00</h3>
            </div>
          </div>
        </div>

        <div class="ml-auto flex flex-col">
          <div class="flex items-start gap-4 justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-pink-600 inline-block" viewBox="0 0 64 64">
              <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-red-600 inline-block" viewBox="0 0 24 24">
              <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"></path>
              <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"></path>
            </svg>
          </div>
          <div class="flex items-center gap-3 mt-auto">
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-400 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"></path>
              </svg>
            </button>
            <span class="font-semibold text-base leading-[18px]">1</span>
            <button type="button" class="flex items-center justify-center w-[18px] h-[18px] bg-slate-800 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    {{-- Ringkasan Pesanan --}}
    <div class="bg-white rounded-md px-4 py-6 h-max shadow-sm border border-gray-200">
      <ul class="text-slate-500 font-medium space-y-4">
        <li class="flex flex-wrap gap-4 text-sm">Subtotal 
          <span class="ml-auto font-semibold text-slate-900">$200.00</span>
        </li>
        <li class="flex flex-wrap gap-4 text-sm">Shipping 
          <span class="ml-auto font-semibold text-slate-900">$2.00</span>
        </li>
        <li class="flex flex-wrap gap-4 text-sm">Tax 
          <span class="ml-auto font-semibold text-slate-900">$4.00</span>
        </li>
        <hr class="border-slate-300" />
        <li class="flex flex-wrap gap-4 text-sm font-semibold text-slate-900">Total 
          <span class="ml-auto">$206.00</span>
        </li>
      </ul>

      <div class="mt-8 space-y-4">
        <button type="button" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-slate-800 hover:bg-slate-900 text-white rounded-md cursor-pointer">
          Buy Now
        </button>
        <button type="button" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-slate-50 hover:bg-slate-100 text-slate-900 border border-gray-300 rounded-md cursor-pointer">
          Continue Shopping
        </button>
      </div>
      <div class="mt-5 flex flex-wrap justify-center gap-4">
        <img src="https://readymadeui.com/images/master.webp" alt="card1" class="w-10 object-contain" />
        <img src="https://readymadeui.com/images/visa.webp" alt="card2" class="w-10 object-contain" />
        <img src="https://readymadeui.com/images/american-express.webp" alt="card3" class="w-10 object-contain" />
      </div>
    </div>
  </div>
</div>
@endsection
@endif

{{-- resources/views/keranjang/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="flex justify-center py-5 px-4 sm:px-6 lg:px-8">
    <div class="layout-content-container flex flex-col w-full max-w-6xl py-5 flex-1">
        @if (!Auth::check())
    {{-- Alert minimalis di halaman keranjang --}}
    <div class="bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded-md mb-6 mx-4" role="alert">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
            <p class="text-sm font-medium">
                Kamu harus login atau register dulu untuk mengakses keranjang.
            </p>
            <div class="mt-2 sm:mt-0 flex space-x-2">
                <a href="{{ route('login') }}" class="text-white bg-red-600 hover:bg-red-700 text-xs font-medium py-1 px-3 rounded transition">
                    Login
                </a>
                <a href="{{ route('register') }}" class="text-red-800 bg-red-200 hover:bg-red-300 text-xs font-medium py-1 px-3 rounded transition">
                    Register
                </a>
            </div>
        </div>
    </div>
@else
            {{-- Pesan selamat datang --}}
            <div x-data="{ show: true }" x-show="show" class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-sm mb-6" role="alert">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium">Selamat datang, {{ Auth::user()->name }}! Kamu sudah login. Silakan lanjutkan belanja.</p>
                    </div>
                    <div class="ml-auto pl-3">
                        <div class="-mx-1.5 -my-1.5">
                            <button @click="show = false" class="inline-flex text-green-500 hover:text-green-600 focus:outline-none">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Breadcrumb --}}
            <div class="flex flex-wrap gap-2 p-4">
                <a class="text-[#4e7097] text-base font-medium leading-normal" href="{{ route('produk.index') }}">Shop</a>
                <span class="text-[#4e7097] text-base font-medium leading-normal">/</span>
                <span class="text-[#0e141b] text-base font-medium leading-normal">Cart</span>
            </div>

            {{-- Cart Title --}}
            <div class="flex flex-wrap justify-between gap-3 p-4">
                <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">Cart</p>
            </div>

            {{-- Cart Items Table --}}
            <div class="px-4 py-3 @container">
                <div class="flex overflow-hidden rounded-xl border border-[#d0dbe7] bg-slate-50">
                    <table class="flex-1">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="table-column-product px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">Product</th>
                                <th class="table-column-quantity px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">Quantity</th>
                                <th class="table-column-price px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">Price</th>
                                <th class="table-column-action px-4 py-3 text-left text-[#0e141b] w-[100px] text-sm font-medium leading-normal">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cartItems as $item)
                                <tr class="border-t border-t-[#d0dbe7]">
                                    <td class="table-column-product h-[72px] px-4 py-2 w-[400px] text-[#0e141b] text-sm font-normal leading-normal">
                                        <div class="flex items-center gap-3">
                                            @if($item->barang->image)
                                                <img src="{{ asset('storage/' . $item->barang->image) }}"
                                                     alt="{{ $item->barang->name }}"
                                                     class="w-12 h-12 object-contain rounded-md" />
                                            @else
                                                <div class="w-12 h-12 bg-gray-100 flex items-center justify-center text-gray-400 rounded-md text-xs">
                                                    No Image
                                                </div>
                                            @endif
                                            <div>
                                                <p class="font-medium">{{ $item->barang->name }}</p>
                                                @if($item->barang->color)
                                                    <p class="text-xs text-[#4e7097] flex items-center gap-1">
                                                        Color:
                                                        <span class="inline-block w-3 h-3 rounded-sm border border-gray-300"
                                                              style="background-color: {{ $item->barang->color }};">
                                                        </span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table-column-quantity h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                        <div class="flex items-center gap-2">
                                            <form action="{{ route('cart.update', $item->id) }}" method="POST" class="flex items-center gap-2">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" name="decrement" value="1"
                                                        class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded hover:bg-gray-100 text-xs"
                                                        aria-label="Kurangi jumlah">
                                                    –
                                                </button>
                                                <span class="w-6 text-center font-medium text-sm">{{ $item->quantity }}</span>
                                                <button type="submit" name="increment" value="1"
                                                        class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded hover:bg-gray-100 text-xs"
                                                        aria-label="Tambah jumlah">
                                                    +
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="table-column-price h-[72px] px-4 py-2 w-[400px] text-[#4e7097] text-sm font-normal leading-normal">
                                        Rp {{ number_format($item->barang->price, 0, ',', '.') }}
                                    </td>
                                    <td class="table-column-action h-[72px] px-4 py-2 w-[100px] text-[#4e7097] text-sm font-normal leading-normal">
                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" aria-label="Hapus item dari keranjang" class="text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="border-t border-t-[#d0dbe7]">
                                    <td colspan="4" class="h-[72px] px-4 py-2 text-center text-[#4e7097] text-sm font-normal leading-normal">
                                        Keranjang kosong. Silakan tambahkan barang dari halaman produk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>

            {{-- Order Summary --}}
            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Order Summary</h3>
            <div class="p-4">
                <div class="flex justify-between gap-x-6 py-2">
                    <p class="text-[#4e7097] text-sm font-normal leading-normal">Subtotal</p>
                    <p class="text-[#0e141b] text-sm font-normal leading-normal text-right">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between gap-x-6 py-2">
                    <p class="text-[#4e7097] text-sm font-normal leading-normal">Shipping</p>
                    <p class="text-[#0e141b] text-sm font-normal leading-normal text-right">Rp {{ number_format($shipping, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between gap-x-6 py-2">
                    <p class="text-[#4e7097] text-sm font-normal leading-normal">Tax (10%)</p>
                    <p class="text-[#0e141b] text-sm font-normal leading-normal text-right">Rp {{ number_format($tax, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between gap-x-6 py-2">
                    <p class="text-[#4e7097] text-sm font-normal leading-normal">Total</p>
                    <p class="text-[#0e141b] text-sm font-normal leading-normal text-right">Rp {{ number_format($total, 0, ',', '.') }}</p>
                </div>
            </div>

            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Payment Method</h3>
            <div class="flex flex-wrap gap-3 p-4">
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#d0dbe7] px-4 h-11 text-[#0e141b] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1669c9] relative cursor-pointer"
              >
                Credit Card
                <input type="radio" class="invisible absolute" name="347c929c-ad66-44ab-b011-f29ec6efb1b0" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#d0dbe7] px-4 h-11 text-[#0e141b] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1669c9] relative cursor-pointer"
              >
                PayPal
                <input type="radio" class="invisible absolute" name="347c929c-ad66-44ab-b011-f29ec6efb1b0" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#d0dbe7] px-4 h-11 text-[#0e141b] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1669c9] relative cursor-pointer"
              >
                Bank Transfer
                <input type="radio" class="invisible absolute" name="347c929c-ad66-44ab-b011-f29ec6efb1b0" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#d0dbe7] px-4 h-11 text-[#0e141b] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1669c9] relative cursor-pointer"
              >
                E-Wallet
                <input type="radio" class="invisible absolute" name="347c929c-ad66-44ab-b011-f29ec6efb1b0" />
              </label>
            </div>

            {{-- Checkout Button --}}
            <div class="flex px-4 py-3">
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-5 flex-1 bg-[#1669c9] text-slate-50 text-base font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Proceed to Checkout</span>
                </button>
            </div>

            {{-- Continue Shopping Link --}}
            <div class="flex px-4 py-2">
                <a href="{{ route('produk.index') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-5 flex-1 bg-slate-100 text-[#0e141b] text-base font-medium leading-normal tracking-[0.015em] hover:bg-slate-200">
                    <span class="truncate">Continue Shopping</span>
                </a>
            </div>

           {{-- Payment Icons --}}
<div class="flex items-center space-x-4 mt-4 px-4">
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png"
      alt="Visa"
      class="h-6 w-auto object-contain"
    />
  </a>
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
      alt="Mastercard"
      class="h-6 w-auto object-contain"
    />
  </a>
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/3/30/American_Express_logo_%282018%29.svg"
      alt="AmEx"
      class="h-6 w-auto object-contain"
    />
  </a>
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png"
      alt="PayPal"
      class="h-6 w-auto object-contain"
    />
  </a>
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
      alt="Apple Pay"
      class="h-6 w-auto object-contain"
    />
  </a>
  <a href="#" class="transition-transform duration-200 hover:scale-105 hover:opacity-80">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Google_Pay_%28GPay%29_Logo_%282018%29.svg"
      alt="Google Pay"
      class="h-6 w-auto object-contain"
    />
  </a>
</div>

        @endif
    </div>
</div>
@endsection
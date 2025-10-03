{{-- resources/views/checkout.blade.php --}}
@extends('layouts.public')

@section('title', 'Checkout - Data Pembeli & Pengiriman')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Data Pembeli & Pengiriman</h1>

<form action="{{ route('checkout.process') }}" method="POST" class="bg-white rounded-lg shadow-md p-8">
            @csrf

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Data Pembeli -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Data Pembeli</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                        <input type="text" id="full_name" name="full_name" value="{{ old('full_name', Auth::user()->name ?? '') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('full_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email ?? '') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor HP/WhatsApp *</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone ?? '') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            <!-- Alamat Pengiriman -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alamat Pengiriman</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label for="address_street" class="block text-sm font-medium text-gray-700 mb-2">Jalan / No rumah *</label>
                        <input type="text" id="address_street" name="address_street" value="{{ old('address_street') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('address_street')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="address_city" class="block text-sm font-medium text-gray-700 mb-2">Kota/Kabupaten *</label>
                        <input type="text" id="address_city" name="address_city" value="{{ old('address_city') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('address_city')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="address_province" class="block text-sm font-medium text-gray-700 mb-2">Provinsi *</label>
                        <input type="text" id="address_province" name="address_province" value="{{ old('address_province') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('address_province')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="address_postal_code" class="block text-sm font-medium text-gray-700 mb-2">Kode Pos *</label>
                        <input type="text" id="address_postal_code" name="address_postal_code" value="{{ old('address_postal_code') }}" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('address_postal_code')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label for="address_notes" class="block text-sm font-medium text-gray-700 mb-2">Catatan Alamat (Opsional)</label>
                        <textarea id="address_notes" name="address_notes" rows="3" placeholder="Contoh: rumah warna hijau dekat masjid"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address_notes') }}</textarea>
                        @error('address_notes')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Metode Pengiriman -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Metode Pengiriman</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block">
                            <input type="radio" name="shipping_method" value="JNE" {{ old('shipping_method') == 'JNE' ? 'checked' : '' }} required
                                   class="mr-2">
                            JNE
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <input type="radio" name="shipping_method" value="J&T" {{ old('shipping_method') == 'J&T' ? 'checked' : '' }}
                                   class="mr-2">
                            J&T
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <input type="radio" name="shipping_method" value="Grab" {{ old('shipping_method') == 'Grab' ? 'checked' : '' }}
                                   class="mr-2">
                            Grab
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <input type="radio" name="shipping_method" value="Gojek" {{ old('shipping_method') == 'Gojek' ? 'checked' : '' }}
                                   class="mr-2">
                            Gojek
                        </label>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block">
                            <input type="radio" name="shipping_method" value="ambil di toko" {{ old('shipping_method') == 'ambil di toko' ? 'checked' : '' }}
                                   class="mr-2">
                            Ambil di Toko
                        </label>
                    </div>
                </div>
                @error('shipping_method')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Ringkasan Pesanan -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ringkasan Pesanan</h2>
                <div class="bg-gray-50 rounded-lg p-6">
                    @foreach($cartItems as $item)
                        <div class="flex justify-between items-center mb-2">
                            <span>{{ $item->barang ? $item->barang->name : ($item->paket ? $item->paket->name : $item->komponen->nama) }} x{{ $item->quantity }}</span>
                            <span>Rp {{ number_format(($item->barang ? $item->barang->price : ($item->paket ? $item->paket->price : $item->komponen->harga)) * $item->quantity, 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                    <hr class="my-4">
                    <div class="flex justify-between items-center font-bold text-lg">
                        <span>Total:</span>
                        <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between">
                <a href="{{ route('cart.index') }}" class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium rounded-lg transition duration-200">
                    Kembali ke Keranjang
                </a>
                <button type="submit" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-200">
                    Lanjutkan ke Pembayaran
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

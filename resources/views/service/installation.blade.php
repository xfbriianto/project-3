@extends('layouts.public')

@section('title', 'Service | Technocenter')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-12">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Layanan Pemasangan CCTV</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Dapatkan layanan pemasangan profesional untuk sistem keamanan CCTV Anda</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-8 max-w-2xl mx-auto">
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl p-4 flex items-center space-x-3">
                    <svg class="w-6 h-6 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            <!-- Installation Request Form -->
            <div class="xl:col-span-2">
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-6">
                        <div class="flex items-center space-x-3">
                            <div class="bg-white/20 rounded-lg p-2">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white">Ajukan Pemasangan CCTV</h2>
                        </div>
                        <p class="text-blue-100 mt-2">Isi formulir di bawah untuk mengajukan layanan pemasangan</p>
                    </div>

                    <div class="p-8">
                        <form action="{{ route('service.installation.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf

                            <!-- Product Selection -->
                            <div class="space-y-3">
                                <label class="flex items-center justify-between text-sm font-semibold text-gray-700">
                                    <span class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                        <span>Pilih Produk dari Keranjang</span>
                                    </span>
                                    <span class="inline-flex items-center space-x-2">
                                        <input id="check-all-products" type="checkbox" class="w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                        <label for="check-all-products" class="text-xs text-gray-600">Pilih Semua</label>
                                    </span>
                                </label>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3" id="products-checklist">
                                    @forelse($cartItems as $item)
                                        <label class="flex items-start p-3 bg-gray-50 rounded-xl border border-gray-200 cursor-pointer hover:bg-white hover:border-blue-300 transition-colors duration-200">
                                            <input type="checkbox" name="barang_ids[]" value="{{ $item['barang_id'] }}" class="mt-1 w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                            <span class="ml-3">
                                                <span class="block font-medium text-gray-800">{{ $item['barang_name'] ?? 'Produk' }}</span>
                                                <span class="block text-xs text-gray-500">Quantity: x{{ $item['quantity'] }}</span>
                                            </span>
                                        </label>
                                    @empty
                                        <div class="text-sm text-gray-500">Keranjang kosong. Tambahkan produk terlebih dahulu.</div>
                                    @endforelse
                                </div>

                                @error('barang_ids')
                                    <p class="text-red-500 text-sm flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Installation Address -->
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Alamat Pemasangan</span>
                                </label>
                                <input type="text" name="address" value="{{ old('address') }}" 
                                       class="w-full border border-gray-200 rounded-xl p-3 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all duration-200" 
                                       placeholder="Masukkan alamat lengkap pemasangan" required>
                                @error('address')
                                    <p class="text-red-500 text-sm flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Google Maps Location -->
                            <div class="space-y-3">
                                <label class="flex items-center space-x-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></span>
                                    </svg>
                                    <span>Cari Lokasi (Google Maps)</span>
                                </label>
                                <div class="relative">
                                    <input id="pac-input" 
                                           class="w-full border border-gray-200 rounded-xl p-3 pl-10 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all duration-200" 
                                           type="text" placeholder="Cari alamat atau tempat" autocomplete="off" />
                                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <div id="map" class="w-full h-80 rounded-xl border-2 border-gray-200 shadow-inner"></div>
                                <input type="hidden" name="formatted_address" id="formatted_address" value="{{ old('formatted_address') }}">
                                <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}">
                                <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                                @if(empty(config('services.google.maps_key')))
                                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-center space-x-3">
                                        <svg class="w-6 h-6 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                        <span class="text-amber-700 text-sm">Google Maps API key belum diatur. Tambahkan GOOGLE_MAPS_API_KEY di .env lalu reload.</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Installation Date -->
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>Tanggal Pemasangan</span>
                                </label>
                                <input type="date" name="installation_date" value="{{ old('installation_date') }}" 
                                       class="w-full border border-gray-200 rounded-xl p-3 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all duration-200" required>
                                @error('installation_date')
                                    <p class="text-red-500 text-sm flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Location Photo -->
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>Foto Lokasi</span>
                                    <span class="text-gray-400 text-xs">(opsional)</span>
                                </label>
                                <div class="relative">
                                    <input id="location_photo" type="file" name="location_photo" accept="image/*" 
                                           class="w-full border border-gray-200 rounded-xl p-3 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                </div>
                                <div id="photo-preview-wrapper" class="hidden">
                                    <p class="text-sm text-gray-600 mb-2 flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span>Pratinjau Foto:</span>
                                    </p>
                                    <img id="photo-preview" src="#" alt="Pratinjau lokasi" class="rounded-xl border-2 border-gray-200 max-h-48 shadow-sm cursor-zoom-in click-preview">
                                </div>
                                @error('location_photo')
                                    <p class="text-red-500 text-sm flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Notes -->
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    <span>Catatan</span>
                                    <span class="text-gray-400 text-xs">(opsional)</span>
                                </label>
                                <textarea name="note" rows="4" 
                                          class="w-full border border-gray-200 rounded-xl p-3 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all duration-200 resize-none" 
                                          placeholder="Contoh: Mohon datang setelah jam 3 sore, atau informasi khusus lainnya">{{ old('note') }}</textarea>
                                @error('note')
                                    <p class="text-red-500 text-sm flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    <span>Kirim Permintaan Pemasangan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Request History -->
            <div class="xl:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden h-fit">
                    <div class="bg-gradient-to-r from-slate-600 to-slate-700 p-6">
                        <div class="flex items-center space-x-3">
                            <div class="bg-white/20 rounded-lg p-2">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-white">Riwayat Permintaan</h2>
                        </div>
                        <p class="text-slate-200 mt-2 text-sm">Track status permintaan Anda</p>
                    </div>

                    <div class="p-6">
                        <div class="space-y-4">
                            @forelse($requests as $req)
                                <div class="border border-gray-200 rounded-xl p-4 hover:shadow-md transition-shadow duration-200 bg-gradient-to-br from-gray-50 to-white">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex items-center space-x-2">
                                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">#{{ $req->id }}</span>
                                            <span class="text-sm text-gray-500">{{ $req->installation_date->format('d M Y') }}</span>
                                        </div>
                                        @php
                                            $statusColors = [
                                                'pending' => 'bg-yellow-100 text-yellow-800',
                                                'approved' => 'bg-green-100 text-green-800',
                                                'rejected' => 'bg-red-100 text-red-800',
                                                'completed' => 'bg-blue-100 text-blue-800'
                                            ];
                                            $statusClass = $statusColors[$req->status] ?? 'bg-gray-100 text-gray-800';
                                        @endphp
                                        <span class="text-xs font-medium px-2.5 py-1 rounded-full uppercase {{ $statusClass }}">
                                            {{ $req->status }}
                                        </span>
                                    </div>
                                    
                                    <h3 class="font-semibold text-gray-900 mb-2 flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>{{ $req->barang->name ?? 'Produk tidak tersedia' }}</span>
                                    </h3>
                                    
                                    <p class="text-sm text-gray-600 mb-3 flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>{{ $req->address }}</span>
                                    </p>
                                    
                                    @if($req->location_photo_path)
                                        <div class="mt-3">
                                            <img src="{{ asset('storage/' . $req->location_photo_path) }}" 
                                                 alt="Lokasi" 
                                                 class="rounded-lg max-h-32 w-full object-cover border-2 border-gray-200 hover:border-blue-300 transition-colors duration-200 cursor-zoom-in click-preview">
                                        </div>
                                    @endif
                                </div>
                            @empty
                                <div class="text-center py-12">
                                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                    <p class="text-gray-500 text-sm">Belum ada permintaan pemasangan</p>
                                    <p class="text-gray-400 text-xs mt-1">Ajukan permintaan pertama Anda sekarang!</p>
                                </div>
                            @endforelse
                        </div>

                        @if($requests->hasPages())
                            <div class="mt-6 pt-4 border-t border-gray-100">
                                {{ $requests->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Preview uploaded photo before submit
document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('location_photo');
  const wrapper = document.getElementById('photo-preview-wrapper');
  const img = document.getElementById('photo-preview');
  let lastUrl = null;
  if (input) {
    input.addEventListener('change', function () {
      if (lastUrl) {
        URL.revokeObjectURL(lastUrl);
        lastUrl = null;
      }
      const file = this.files && this.files[0];
      if (file) {
        const url = URL.createObjectURL(file);
        lastUrl = url;
        img.src = url;
        wrapper.classList.remove('hidden');
      } else {
        wrapper.classList.add('hidden');
        img.src = '#';
      }
    });
  }
});

// Prevent Enter key on the search input from submitting the form
document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('pac-input');
  if (searchInput) {
    searchInput.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') e.preventDefault();
    });
  }
});

function initMap() {
  if (!window.google || !google.maps || !google.maps.places) {
    console.error('Google Maps SDK gagal dimuat');
    return;
  }

  const initial = { lat: -6.200000, lng: 106.816666 }; // Jakarta default
  const mapEl = document.getElementById('map');
  const input = document.getElementById('pac-input');
  const latEl = document.getElementById('latitude');
  const lngEl = document.getElementById('longitude');
  const formattedEl = document.getElementById('formatted_address');

  const map = new google.maps.Map(mapEl, {
    center: initial,
    zoom: 12,
    mapTypeControl: false,
    streetViewControl: false,
    fullscreenControl: false,
    styles: [
      {
        featureType: "poi",
        elementType: "labels",
        stylers: [{ visibility: "off" }]
      },
      {
        featureType: "transit",
        elementType: "labels",
        stylers: [{ visibility: "off" }]
      }
    ]
  });

  const autocomplete = new google.maps.places.Autocomplete(input, {
    fields: ['formatted_address', 'geometry', 'name'],
    types: ['geocode'],
  });
  autocomplete.bindTo('bounds', map);

  const marker = new google.maps.Marker({ 
    map, 
    draggable: true, 
    visible: false,
    icon: {
      url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
        <svg width="32" height="40" viewBox="0 0 32 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 16 40 16 40C16 40 32 24.8366 32 16C32 7.16344 24.8366 0 16 0ZM16 21.8182C13.2073 21.8182 10.9091 19.52 10.9091 16.7273C10.9091 13.9345 13.2073 11.6364 16 11.6364C18.7927 11.6364 21.0909 13.9345 21.0909 16.7273C21.0909 19.52 18.7927 21.8182 16 21.8182Z" fill="#2563eb"/>
        </svg>
      `),
      scaledSize: new google.maps.Size(32, 40),
      anchor: new google.maps.Point(16, 40)
    }
  });

  function updateHiddenFields(latLng, formatted) {
    if (!latLng) return;
    latEl.value = typeof latLng.lat === 'function' ? latLng.lat() : latLng.lat;
    lngEl.value = typeof latLng.lng === 'function' ? latLng.lng() : latLng.lng;
    if (formatted) formattedEl.value = formatted;
  }

  autocomplete.addListener('place_changed', () => {
    const place = autocomplete.getPlace();
    if (!place.geometry || !place.geometry.location) return;
    const loc = place.geometry.location;
    map.setCenter(loc);
    map.setZoom(17);
    marker.setPosition(loc);
    marker.setVisible(true);
    updateHiddenFields(loc, place.formatted_address || input.value);
  });

  map.addListener('click', (e) => {
    marker.setPosition(e.latLng);
    marker.setVisible(true);
    updateHiddenFields(e.latLng, null);
  });

  marker.addListener('dragend', () => {
    updateHiddenFields(marker.getPosition(), null);
  });

  // If there are old values, rehydrate the marker
  const oldLat = parseFloat(latEl.value);
  const oldLng = parseFloat(lngEl.value);
  if (!isNaN(oldLat) && !isNaN(oldLng)) {
    const oldPos = { lat: oldLat, lng: oldLng };
    map.setCenter(oldPos);
    map.setZoom(17);
    marker.setPosition(oldPos);
    marker.setVisible(true);
  }
}
</script>
@if(!empty(config('services.google.maps_key')))
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_key') }}&libraries=places&callback=initMap" async defer></script>
@endif
<script>
// Simple image modal for preview
document.addEventListener('DOMContentLoaded', function () {
  const images = document.querySelectorAll('.click-preview');
  if (!images.length) return;

  const backdrop = document.createElement('div');
  backdrop.className = 'fixed inset-0 bg-black/80 flex items-center justify-center z-50 hidden';
  const modalImg = document.createElement('img');
  modalImg.className = 'max-w-[90vw] max-h-[85vh] rounded-xl shadow-2xl';
  backdrop.appendChild(modalImg);
  document.body.appendChild(backdrop);

  function open(src) {
    modalImg.src = src;
    backdrop.classList.remove('hidden');
  }
  function close() {
    backdrop.classList.add('hidden');
    modalImg.src = '#';
  }

  backdrop.addEventListener('click', close);
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });

  images.forEach(img => {
    img.addEventListener('click', () => open(img.src));
  });
});

// Check-all for products
document.addEventListener('DOMContentLoaded', function () {
  const checkAll = document.getElementById('check-all-products');
  const container = document.getElementById('products-checklist');
  if (!checkAll || !container) return;
  checkAll.addEventListener('change', function () {
    const checks = container.querySelectorAll('input[type="checkbox"][name="barang_ids[]"]');
    checks.forEach(cb => cb.checked = checkAll.checked);
  });
});
</script>
@endsection
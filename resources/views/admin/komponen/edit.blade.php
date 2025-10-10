@extends('layouts.app')

@section('title', 'Edit Komponen CCTV')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Komponen CCTV</h1>
            <p class="text-gray-600">Perbarui informasi komponen CCTV</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <form action="{{ route('admin.komponen.update', $komponen->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Nama Komponen -->
                <div class="space-y-2">
                    <label for="nama" class="block text-sm font-semibold text-gray-700">
                        Nama Komponen
                        <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="nama"
                        name="nama" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 @error('nama') border-red-300 @enderror" 
                        value="{{ old('nama', $komponen->nama) }}" 
                        placeholder="Masukkan nama komponen"
                        required
                    >
                    @error('nama')
                        <p class="text-red-600 text-sm flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Harga -->
                <div class="space-y-2">
                    <label for="harga" class="block text-sm font-semibold text-gray-700">
                        Harga
                        <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-500 text-sm">Rp</span>
                        <input 
                            type="number" 
                            id="harga"
                            name="harga" 
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 @error('harga') border-red-300 @enderror" 
                            value="{{ old('harga', $komponen->harga) }}" 
                            placeholder="0"
                            required
                        >
                    </div>
                    @error('harga')
                        <p class="text-red-600 text-sm flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="space-y-2">
                    <label for="kategori" class="block text-sm font-semibold text-gray-700">
                        Kategori
                        <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="kategori"
                        name="kategori" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 @error('kategori') border-red-300 @enderror" 
                        value="{{ old('kategori', $komponen->kategori) }}" 
                        placeholder="Contoh: Kamera, DVR, Kabel, dll"
                        required
                    >
                    @error('kategori')
                        <p class="text-red-600 text-sm flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Gambar Upload with Current Image Preview -->
                <div class="space-y-2">
                    <label for="gambar" class="block text-sm font-semibold text-gray-700">
                        Gambar Komponen
                        <span class="text-gray-400 font-normal">(opsional)</span>
                    </label>
                    
                    @if($komponen->gambar)
                        <!-- Current Image Preview -->
                        <div class="mb-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-sm text-gray-600 mb-3 font-medium">Gambar Saat Ini:</p>
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('storage/' . $komponen->gambar) }}" 
                                         alt="{{ $komponen->nama }}" 
                                         class="w-20 h-20 object-cover rounded-lg border-2 border-gray-200 shadow-sm">
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-700 font-medium">{{ $komponen->nama }}</p>
                                    <p class="text-xs text-gray-500 mt-1">Pilih gambar baru untuk mengganti</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- File Upload Area -->
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 transition-colors duration-200">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="gambar" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-amber-500">
                                    <span>{{ $komponen->gambar ? 'Ganti gambar' : 'Upload gambar' }}</span>
                                    <input id="gambar" name="gambar" type="file" class="sr-only" accept="image/*">
                                </label>
                                <p class="pl-1">atau drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, JPEG hingga 2MB</p>
                        </div>
                    </div>
                    @error('gambar')
                        <p class="text-red-600 text-sm flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="space-y-2">
                    <label for="deskripsi" class="block text-sm font-semibold text-gray-700">
                        Deskripsi
                        <span class="text-gray-400 font-normal">(opsional)</span>
                    </label>
                    <textarea 
                        id="deskripsi"
                        name="deskripsi" 
                        rows="4" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 resize-none @error('deskripsi') border-red-300 @enderror"
                        placeholder="Tambahkan deskripsi detail tentang komponen..."
                    >{{ old('deskripsi', $komponen->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-600 text-sm flex items-center mt-1">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.komponen.index') }}" 
                       class="inline-flex justify-center items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Batal
                    </a>
                    <button type="submit" 
                            class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-bluw-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 shadow-sm transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Update Komponen
                    </button>
                </div>
            </form>
        </div>

        <!-- Info Card with Edit-specific Information -->
        <div class="mt-8 bg-amber-50 border border-blue-200 rounded-lg p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-700">
                        <strong>Info:</strong> Jika Anda mengganti gambar, gambar lama akan otomatis terhapus. Pastikan perubahan yang dibuat sudah sesuai sebelum menyimpan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Component Info Summary (Optional) -->
        <div class="mt-6 bg-white rounded-lg shadow-sm border border-gray-200 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-medium text-gray-900">ID Komponen</h3>
                    <p class="text-sm text-gray-600">#{{ $komponen->id }}</p>
                </div>
                <div class="text-right">
                    <h3 class="text-sm font-medium text-gray-900">Terakhir Diupdate</h3>
                    <p class="text-sm text-gray-600">{{ $komponen->updated_at ? $komponen->updated_at->format('d M Y, H:i') : 'Belum pernah' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// File upload preview functionality
document.getElementById('gambar').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // You can add file preview functionality here
        console.log('File selected:', file.name);
        
        // Optional: Show preview of new image before upload
        const reader = new FileReader();
        reader.onload = function(e) {
            // Create preview element or update existing preview
            console.log('Image loaded for preview');
        };
        reader.readAsDataURL(file);
    }
});

// Form validation enhancement
document.querySelector('form').addEventListener('submit', function(e) {
    const submitButton = document.querySelector('button[type="submit"]');
    submitButton.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Menyimpan...
    `;
    submitButton.disabled = true;
});
</script>

@endsection
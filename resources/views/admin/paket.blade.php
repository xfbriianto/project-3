@extends('layouts.app')

@section('title', 'Manajemen Paket')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-6xl">
    <!-- Header with title and add button -->
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Paket</h1>
        <button onclick="openAddPackageModal()" 
                class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-all duration-300 flex items-center gap-2 shadow-sm">
            <i class="fas fa-box"></i> Tambah Paket
        </button>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div id="successAlert" class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-sm relative animate-fade-in-down" role="alert">
            <div class="flex items-center">
                <svg class="h-5 w-5 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
            <button onclick="closeSuccessAlert()" class="absolute top-0 right-0 mt-4 mr-4">
                <svg class="h-4 w-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif

    <!-- Main table -->
    <div class="overflow-hidden rounded-xl shadow-sm border border-gray-100">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead>
                <tr class="bg-gray-50">
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Paket</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Item</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($pakets as $index => $paket)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $paket->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">Rp {{ number_format($paket->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                {{ $paket->items->count() }} item
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex gap-2">
                            <button onclick="openEditPackageModal({{ $paket->id }})"
                                   class="px-3 py-1.5 text-xs font-medium text-amber-700 bg-amber-100 rounded-md hover:bg-amber-200 transition-all duration-200 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </button>
                            <button onclick="showDeleteModal({{ $paket->id }}, '{{ $paket->name }}')"
                                   class="px-3 py-1.5 text-xs font-medium text-red-700 bg-red-100 rounded-md hover:bg-red-200 transition-all duration-200 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus
                            </button>
                            <form id="delete-form-{{ $paket->id }}" action="{{ route('admin.paket.destroy', $paket->id) }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="h-16 w-16 text-gray-300 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <p class="text-gray-500 font-medium mb-1">Belum ada paket tersedia</p>
                                <button onclick="openAddPackageModal()" class="mt-2 text-indigo-600 hover:text-indigo-800 text-sm font-medium hover:underline focus:outline-none transition-colors">
                                    Tambah Paket Sekarang
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination (jika diperlukan) -->
    @if(isset($pakets) && method_exists($pakets, 'links') && $pakets->hasPages())
    <div class="mt-6">
        {{ $pakets->links() }}
    </div>
    @endif
</div>

<!-- Package Modal (Add & Edit) -->
<div id="packageModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-4 modal-transition">
    <div class="bg-white rounded-xl shadow-xl max-w-2xl w-full mx-4 overflow-hidden transform transition-transform duration-300">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h3 id="modalTitle" class="text-lg font-semibold text-gray-800">Tambah Paket Baru</h3>
        </div>
        
        <form id="packageForm" method="POST" action="{{ route('admin.paket.store') }}" class="px-6 py-5">
            @csrf
            <div id="method-field"></div>
            <div class="mb-6">
    <label for="name" class="block text-base font-semibold text-gray-700 mb-2">Nama Paket</label>
    <input
        type="text"
        name="name"
        id="name"
        class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-4 py-3 text-base focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="Masukkan nama paket"
        required
    >
</div>

<div class="mb-6">
    <label for="price" class="block text-base font-semibold text-gray-700 mb-2">Harga (Rp)</label>
    <input
        type="number"
        name="price"
        id="price"
        class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-4 py-3 text-base focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="Contoh: 100000"
        required
    >
</div>

            
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Item</label>
                <div class="max-h-60 overflow-y-auto p-3 border border-gray-200 rounded-lg bg-gray-50">
                    <div id="itemsContainer" class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        @foreach($barangs as $item)
                            <div class="flex items-center p-1.5 rounded hover:bg-gray-100 transition-colors">
                                <input type="checkbox" name="items[]" id="item-{{ $item->id }}" value="{{ $item->id }}" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="item-{{ $item->id }}" class="ml-2 block text-sm text-gray-800 cursor-pointer">
                                    <span class="font-medium">{{ $item->name }}</span> 
                                    <span class="text-gray-500">- Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                <button type="button" onclick="closePackageModal()" class="bg-white text-gray-700 px-4 py-2 border border-gray-300 rounded-lg mr-2 hover:bg-gray-50 transition-colors duration-200 font-medium text-sm">
                    Batal
                </button>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors duration-200 shadow-sm font-medium text-sm">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-4 modal-transition">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full mx-4 overflow-hidden transform transition-transform duration-300">
        <div class="bg-red-50 px-6 py-4 border-b border-red-100">
            <h3 class="text-lg font-semibold text-red-800">Konfirmasi Hapus</h3>
        </div>
        
        <div class="px-6 py-5">
            <p class="text-gray-700">Apakah Anda yakin ingin menghapus paket <span id="deleteItemName" class="font-semibold text-gray-900"></span>?</p>
            <p class="mt-2 text-sm text-gray-500">Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        
        <div class="flex items-center justify-end px-6 py-4 bg-gray-50 border-t border-gray-100">
            <button onclick="closeDeleteModal()" class="bg-white text-gray-700 px-4 py-2 border border-gray-300 rounded-lg mr-2 hover:bg-gray-50 transition-colors duration-200 font-medium text-sm">
                Batal
            </button>
            <button id="confirmDelete" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-200 shadow-sm font-medium text-sm">
                Ya, Hapus
            </button>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk membuka modal tambah paket
    function openAddPackageModal() {
        // Set judul dan reset form
        document.getElementById('modalTitle').textContent = 'Tambah Paket Baru';
        document.getElementById('packageForm').action = "{{ route('admin.paket.store') }}";
        document.getElementById('method-field').innerHTML = '';
        document.getElementById('packageForm').reset();

        // Uncheck semua checkbox
        document.querySelectorAll('#itemsContainer input[type="checkbox"]').forEach(cb => cb.checked = false);

        // Tampilkan modal dengan animasi
        const modal = document.getElementById('packageModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Tambahkan animasi fade-in untuk modal content saja, bukan background
        setTimeout(() => {
            modal.querySelector('div').classList.add('scale-100', 'opacity-100');
            modal.querySelector('div').classList.remove('scale-95', 'opacity-0');
        }, 10);
    }

    // Fungsi untuk membuka modal edit paket
    function openEditPackageModal(id) {
        fetch(`/admin/paket/${id}/edit`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Set judul dan action form
                document.getElementById('modalTitle').textContent = 'Edit Paket';
                document.getElementById('packageForm').action = `/admin/paket/${id}`;
                document.getElementById('method-field').innerHTML = '@method("PUT")';

                // Set nilai-nilai form
                document.getElementById('name').value = data.name;
                document.getElementById('price').value = data.price;

                // Uncheck semua checkbox terlebih dahulu
                document.querySelectorAll('#itemsContainer input[type="checkbox"]').forEach(cb => cb.checked = false);

                // Check checkbox yang sesuai dengan item paket
                if (Array.isArray(data.items)) {
                    data.items.forEach(itemId => {
                        const checkbox = document.getElementById('item-' + itemId);
                        if (checkbox) checkbox.checked = true;
                    });
                }

                // Tampilkan modal dengan animasi
                const modal = document.getElementById('packageModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                
                // Tambahkan animasi fade-in untuk modal content saja
                setTimeout(() => {
                    modal.querySelector('div').classList.add('scale-100', 'opacity-100');
                    modal.querySelector('div').classList.remove('scale-95', 'opacity-0');
                }, 10);
            })
            .catch(err => {
                // Tampilkan pesan error dengan alert yang lebih baik
                showToast('Gagal memuat data paket', 'error');
                console.error('Error fetching package data:', err);
            });
    }

    // Fungsi untuk menutup modal paket
    function closePackageModal() {
        const modal = document.getElementById('packageModal');
        
        // Tambahkan animasi fade-out untuk modal content saja
        modal.querySelector('div').classList.add('scale-95', 'opacity-0');
        modal.querySelector('div').classList.remove('scale-100', 'opacity-100');
        
        // Sembunyikan modal setelah animasi selesai
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }, 200);
    }

    // Fungsi untuk menampilkan modal konfirmasi hapus
    function showDeleteModal(id, name) {
        document.getElementById('deleteItemName').textContent = name;
        document.getElementById('confirmDelete').onclick = function() {
            document.getElementById('delete-form-' + id).submit();
        };
        
        // Tampilkan modal dengan animasi
        const modal = document.getElementById('deleteModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Tambahkan animasi fade-in untuk modal content saja
        setTimeout(() => {
            modal.querySelector('div').classList.add('scale-100', 'opacity-100');
            modal.querySelector('div').classList.remove('scale-95', 'opacity-0');
        }, 10);
    }

    // Fungsi untuk menutup modal konfirmasi hapus
    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        
        // Tambahkan animasi fade-out untuk modal content saja
        modal.querySelector('div').classList.add('scale-95', 'opacity-0');
        modal.querySelector('div').classList.remove('scale-100', 'opacity-100');
        
        // Sembunyikan modal setelah animasi selesai
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }, 200);
    }

    // Fungsi untuk menutup alert sukses
    function closeSuccessAlert() {
        const alert = document.getElementById('successAlert');
        
        // Tambahkan animasi fade-out
        alert.classList.add('opacity-0');
        
        // Hapus alert setelah animasi selesai
        setTimeout(() => {
            alert.remove();
        }, 300);
    }

    // Fungsi untuk menampilkan toast message
    function showToast(message, type = 'success') {
        // Buat elemen toast
        const toast = document.createElement('div');
        toast.className = `fixed bottom-4 right-4 px-4 py-3 rounded-lg shadow-lg transform transition-all duration-300 translate-y-4 opacity-0 z-50 ${
            type === 'success' ? 'bg-green-50 text-green-800 border-l-4 border-green-500' : 'bg-red-50 text-red-800 border-l-4 border-red-500'
        }`;
        
        // Isi toast
        toast.innerHTML = `
            <div class="flex items-center">
                <svg class="h-5 w-5 ${type === 'success' ? 'text-green-500' : 'text-red-500'} mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${type === 'success' 
                        ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />'
                        : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />'}
                </svg>
                <p class="font-medium">${message}</p>
            </div>
        `;
        
        // Tambahkan toast ke body
        document.body.appendChild(toast);
        
        // Tampilkan toast dengan animasi
        setTimeout(() => {
            toast.classList.add('translate-y-0', 'opacity-100');
            toast.classList.remove('translate-y-4', 'opacity-0');
        }, 10);
        
        // Hilangkan toast setelah 3 detik
        setTimeout(() => {
            toast.classList.add('translate-y-4', 'opacity-0');
            toast.classList.remove('translate-y-0', 'opacity-100');
            
            // Hapus toast dari DOM setelah animasi selesai
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }

    // Inisialisasi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        // Tambahkan class untuk animasi pada modal content (bukan background overlay)
        document.querySelectorAll('#packageModal > div, #deleteModal > div').forEach(modal => {
            modal.classList.add('transform', 'transition-all', 'duration-300', 'scale-95', 'opacity-0');
        });
        
        // Auto-close success alert setelah 3 detik
        if (document.getElementById('successAlert')) {
            document.getElementById('successAlert').classList.add('transition-opacity', 'duration-300');
            setTimeout(closeSuccessAlert, 3000);
        }
    });
</script>
@endsection
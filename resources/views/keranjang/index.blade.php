{{-- resources/views/keranjang/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Keranjang Belanja</h1>

        @if($cartItems->isEmpty())
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <div class="mb-4">
                    <svg class="mx-auto h-24 w-24 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v5a2 2 0 01-2 2H9a2 2 0 01-2-2v-5m6 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-600 mb-2">Keranjang Anda Kosong</h3>
                <p class="text-gray-500 mb-6">Belum ada produk yang ditambahkan ke keranjang</p>
                <a href="{{ route('produk.index') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                    </svg>
                    Mulai Berbelanja
                </a>
            </div>
        @else
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Header Table -->
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <div class="grid grid-cols-12 gap-4 font-semibold text-gray-700 text-sm uppercase tracking-wide">
                        <div class="col-span-5">Produk</div>
                        <div class="col-span-2 text-center">Harga</div>
                        <div class="col-span-2 text-center">Jumlah</div>
                        <div class="col-span-2 text-center">Subtotal</div>
                        <div class="col-span-1 text-center">Aksi</div>
                    </div>
                </div>

                <!-- Cart Items -->
                <div class="divide-y divide-gray-200">
                    @foreach($cartItems as $item)
                        <div class="px-6 py-6 hover:bg-gray-50 transition duration-200">
                            <div class="grid grid-cols-12 gap-4 items-center">
                                <!-- Product Info -->
                                <div class="col-span-5">
                                    <div class="flex items-center space-x-4">
                                        @if(isset($item->barang->image) && $item->barang->image)
                                            <img src="{{ asset('storage/' . $item->barang->image) }}" 
                                                 alt="{{ $item->barang->name }}" 
                                                 class="w-16 h-16 object-cover rounded-lg border border-gray-200 shadow-sm">
                                        @else
                                            <div class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center shadow-sm">
                                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 text-lg">{{ $item->barang->name }}</h4>
                                            @if(isset($item->barang->description) && $item->barang->description)
                                                <p class="text-sm text-gray-500 mt-1">{{ Str::limit($item->barang->description, 80) }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Price -->
                                <div class="col-span-2 text-center">
                                    <span class="text-lg font-semibold text-gray-800">
                                        Rp {{ number_format($item->barang->price, 0, ',', '.') }}
                                    </span>
                                </div>

                                <!-- Quantity -->
                                <div class="col-span-2 text-center">
                                    <div class="inline-flex items-center bg-gray-100 rounded-lg">
                                        <form method="POST" action="{{ route('cart.update', $item->id) }}" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="decrement" value="1">
                                            <button type="submit" class="p-2 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-l-lg transition duration-200">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                                </svg>
                                            </button>
                                        </form>
                                        <span class="px-4 py-2 font-semibold text-gray-800 text-lg min-w-[50px] text-center">{{ $item->quantity }}</span>
                                        <form method="POST" action="{{ route('cart.update', $item->id) }}" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="increment" value="1">
                                            <button type="submit" class="p-2 text-gray-600 hover:text-green-600 hover:bg-green-50 rounded-r-lg transition duration-200">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Subtotal -->
                                <div class="col-span-2 text-center">
                                    <span class="text-xl font-bold text-blue-600">
                                        Rp {{ number_format($item->barang->price * $item->quantity, 0, ',', '.') }}
                                    </span>
                                </div>

                                <!-- Delete Button -->
                                <div class="col-span-1 text-center">
                                    <form method="POST" action="{{ route('cart.remove', $item->id) }}" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini dari keranjang?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Cart Summary -->
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-8 border-t border-gray-200">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-6 lg:space-y-0">
                        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                            <a href="{{ route('produk.index') }}" class="inline-flex items-center justify-center px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 font-medium rounded-lg border border-gray-300 shadow-sm transition duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                                Lanjut Belanja
                            </a>
                        </div>

                        <div class="text-right bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                            <div class="mb-3">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-gray-600">Total Item:</span>
                                    <span class="font-semibold text-gray-800">{{ $cartItems->sum('quantity') }} item</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Subtotal:</span>
                                    <span class="font-semibold text-gray-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 pt-3 mb-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-semibold text-gray-800">Total:</span>
                                    <span class="text-2xl font-bold text-blue-600">
                                        Rp {{ number_format($subtotal, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                            <button id="pay-button" class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold text-lg rounded-lg shadow-lg hover:shadow-xl transition duration-200 transform hover:scale-105">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Loading Overlay -->
<div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-8 flex flex-col items-center space-y-4 shadow-2xl">
        <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-600 border-t-transparent"></div>
        <span class="text-gray-700 font-medium text-lg">Memproses pembayaran...</span>
        <p class="text-gray-500 text-sm text-center">Mohon tunggu, jangan tutup halaman ini</p>
    </div>
</div>

<!-- Tambahkan script Snap.js -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    document.getElementById('pay-button')?.addEventListener('click', function () {
        // Show loading overlay
        document.getElementById('loading-overlay').classList.remove('hidden');
        
        fetch('{{ route('payment.create') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            // Hide loading overlay
            document.getElementById('loading-overlay').classList.add('hidden');
            
            if (data.snap_token) {
                snap.pay(data.snap_token, {
                    onSuccess: function(result) {
                        alert('Pembayaran berhasil!');
                        window.location.reload();
                    },
                    onPending: function(result) {
                        alert('Pembayaran pending. Silakan selesaikan pembayaran Anda.');
                        window.location.reload();
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal. Silakan coba lagi.');
                    },
                    onClose: function() {
                        console.log('Pembayaran ditutup oleh user');
                    }
                });
            } else {
                alert(data.error || 'Terjadi kesalahan saat memproses pembayaran.');
            }
        })
        .catch(error => {
            // Hide loading overlay
            document.getElementById('loading-overlay').classList.add('hidden');
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memproses pembayaran.');
        });
    });

    // Smooth scroll and animations
    document.addEventListener('DOMContentLoaded', function() {
        // Add fade-in animation to cart items
        const cartItems = document.querySelectorAll('.divide-y > div');
        cartItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            setTimeout(() => {
                item.style.transition = 'all 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>

<style>
    /* Custom scrollbar */
    .container::-webkit-scrollbar {
        width: 8px;
    }
    
    .container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    
    .container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 4px;
    }
    
    .container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* Loading animation */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
@endsection
{{-- resources/views/payment.blade.php --}}
@extends('layouts.public')

@section('title', 'Pembayaran')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <div class="mb-6">
                <svg class="mx-auto h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Memproses Pembayaran</h1>
            <p class="text-gray-600 mb-6">Mohon tunggu sebentar, Anda akan diarahkan ke halaman pembayaran...</p>

            <div class="animate-spin rounded-full h-8 w-8 border-4 border-blue-600 border-t-transparent mx-auto"></div>
        </div>
    </div>
</div>

<!-- Loading Overlay -->
<div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-8 flex flex-col items-center space-y-4 shadow-2xl">
        <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-600 border-t-transparent"></div>
        <span class="text-gray-700 font-medium text-lg">Memproses pembayaran...</span>
        <p class="text-gray-500 text-sm text-center">Mohon tunggu, jangan tutup halaman ini</p>
    </div>
</div>

<!-- Tambahkan script Snap.js -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
                        window.location.href = '{{ route('produk.index') }}';
                    },
                    onPending: function(result) {
                        alert('Pembayaran pending. Silakan selesaikan pembayaran Anda.');
                        window.location.href = '{{ route('produk.index') }}';
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal. Silakan coba lagi.');
                        window.location.href = '{{ route('cart.index') }}';
                    },
                    onClose: function() {
                        console.log('Pembayaran ditutup oleh user');
                        window.location.href = '{{ route('cart.index') }}';
                    }
                });
            } else {
                alert(data.error || 'Terjadi kesalahan saat memproses pembayaran.');
                window.location.href = '{{ route('cart.index') }}';
            }
        })
        .catch(error => {
            // Hide loading overlay
            document.getElementById('loading-overlay').classList.add('hidden');
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memproses pembayaran.');
            window.location.href = '{{ route('cart.index') }}';
        });
    });
</script>
@endsection

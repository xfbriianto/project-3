{{-- resources/views/keranjang/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Keranjang Belanja</h1>

    @if($cartItems->isEmpty())
        <p class="text-gray-500">Keranjang Anda kosong.</p>
    @else
        <table class="table-auto w-full mb-6">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Produk</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item->barang->name }}</td>
                        <td class="border px-4 py-2">Rp {{ number_format($item->barang->price, 0, ',', '.') }}</td>
                        <td class="border px-4 py-2">{{ $item->quantity }}</td>
                        <td class="border px-4 py-2">Rp {{ number_format($item->barang->price * $item->quantity, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-between items-center mb-6">
            <div>
                <p><strong>Subtotal:</strong> Rp {{ number_format($subtotal, 0, ',', '.') }}</p> 
            </div>
            <button id="pay-button" class="btn btn-primary px-4 py-2 text-white rounded-lg bg-blue-600 hover:bg-blue-700">
                Bayar Sekarang
            </button>
        </div>
    @endif
</div>

<!-- Tambahkan script Snap.js -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function () {
        fetch('{{ route('payment.create') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.snap_token) {
                snap.pay(data.snap_token);
            } else {
                alert(data.error || 'Terjadi kesalahan saat memproses pembayaran.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memproses pembayaran.');
        });
    });
</script>
@endsection
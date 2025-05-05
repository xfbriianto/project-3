@extends('layouts.app')

@section('title', 'Detail Order')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Detail Order #{{ $order->id }}</h1>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                @if($order->status == 'completed') bg-green-100 text-green-800
                @elseif($order->status == 'pending') bg-yellow-100 text-yellow-800
                @elseif($order->status == 'processing') bg-blue-100 text-blue-800
                @elseif($order->status == 'cancelled') bg-red-100 text-red-800
                @endif">
                {{ ucfirst($order->status) }}
            </span>
        </div>
        
        <!-- Customer & Order Info -->
        <div class="px-6 py-4 md:flex border-b border-gray-200">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <h2 class="text-lg font-semibold text-gray-700 mb-3">Informasi Pelanggan</h2>
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600">{{ $order->user->name ?? 'Pelanggan tidak ditemukan' }}</p>
                </div>
                @if($order->user->email)
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <p class="text-gray-600">{{ $order->user->email }}</p>
                </div>
                @endif
                @if($order->user->phone)
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <p class="text-gray-600">{{ $order->user->phone }}</p>
                </div>
                @endif
            </div>
            
            <div class="md:w-1/2">
                <h2 class="text-lg font-semibold text-gray-700 mb-3">Informasi Order</h2>
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600">{{ $order->created_at->format('d F Y, H:i') }}</p>
                </div>
                @if($order->payment_method)
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600">{{ $order->payment_method }}</p>
                </div>
                @endif
                @if($order->invoice_number)
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600">INV-{{ $order->invoice_number }}</p>
                </div>
                @endif
            </div>
        </div>
        
        <!-- Order Items -->
        <div class="px-6 py-4">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Produk</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($order->items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if(isset($item->barang->image) && $item->barang->image)
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-md object-cover" src="{{ asset('storage/'.$item->barang->image) }}" alt="{{ $item->barang->name ?? 'Product Image' }}">
                                    </div>
                                    @endif
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $item->barang->name ?? 'Produk tidak ditemukan' }}</div>
                                        @if(isset($item->barang->sku) && $item->barang->sku)
                                        <div class="text-sm text-gray-500">SKU: {{ $item->barang->sku }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rp {{ number_format($item->price, 0, ',', '.') }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $item->quantity }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Order Summary -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <div class="flex justify-end">
                <div class="w-full md:w-1/3">
                    <div class="flex justify-between py-2 text-gray-600">
                        <span>Subtotal</span>
                        <span>Rp {{ number_format($order->items->sum(function($item) { return $item->price * $item->quantity; }), 0, ',', '.') }}</span>
                    </div>
                    @if(isset($order->tax) && $order->tax > 0)
                    <div class="flex justify-between py-2 text-gray-600">
                        <span>Pajak</span>
                        <span>Rp {{ number_format($order->tax, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    @if(isset($order->shipping_cost) && $order->shipping_cost > 0)
                    <div class="flex justify-between py-2 text-gray-600">
                        <span>Biaya Pengiriman</span>
                        <span>Rp {{ number_format($order->shipping_cost, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    @if(isset($order->discount) && $order->discount > 0)
                    <div class="flex justify-between py-2 text-gray-600">
                        <span>Diskon</span>
                        <span>- Rp {{ number_format($order->discount, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    <div class="flex justify-between py-2 text-lg font-bold border-t border-gray-300 mt-2 pt-2">
                        <span>Total</span>
                        <span>Rp {{ number_format($order->total, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actions -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <div class="flex justify-between">
            <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 border border-blue-600 rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Kembali
                </a>
                <div class="flex space-x-2">
                    <a href="#" onclick="window.print()" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
                        </svg>
                        Cetak
                    </a>
                    @if($order->status == 'pending' || $order->status == 'processing')
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        {{ $order->status == 'pending' ? 'Proses Pesanan' : 'Selesaikan Pesanan' }}
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
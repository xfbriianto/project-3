{{-- filepath: resources/views/admin/laporan-detail.blade.php --}}
<div class="space-y-4">
    <!-- Info Utama -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">ID Transaksi</label>
            <p class="mt-1 text-sm text-gray-900">{{ $report->id }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Order ID</label>
            <p class="mt-1 text-sm text-gray-900">{{ $report->order_id }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Pelanggan</label>
            <p class="mt-1 text-sm text-gray-900">{{ optional($report->user)->name ?? '-' }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Email Pelanggan</label>
            <p class="mt-1 text-sm text-gray-900">{{ optional($report->user)->email ?? '-' }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Total</label>
            <p class="mt-1 text-sm text-gray-900 font-semibold">Rp {{ number_format($report->total, 0, ',', '.') }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <div class="mt-1">
                @if($report->status == 'completed')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                @elseif($report->status == 'pending')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                @elseif($report->status == 'cancelled')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Dibatalkan</span>
                @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">{{ ucfirst($report->status) }}</span>
                @endif
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Transaksi</label>
            <p class="mt-1 text-sm text-gray-900">{{ $report->transaction_date ? \Carbon\Carbon::parse($report->transaction_date)->format('d/m/Y H:i') : '-' }}</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Dibuat</label>
            <p class="mt-1 text-sm text-gray-900">{{ $report->created_at ? \Carbon\Carbon::parse($report->created_at)->format('d/m/Y H:i') : '-' }}</p>
        </div>
    </div>

    <!-- Item Pembelian -->
    @if($report->orderItems && $report->orderItems->count() > 0)
    <div class="mt-6">
        <h4 class="text-md font-medium text-gray-900 mb-3">Item Pembelian</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Produk</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Qty</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Subtotal</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($report->orderItems as $item)
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-900">
                            {{ optional($item->barang)->nama ?? 'Produk tidak ditemukan' }}
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-900">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-900">
                            {{ $item->quantity }}
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-900">
                            Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>
@extends('layouts.public')

@section('title', 'Paket Produk | Technocenter')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-gray-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <!-- Hero Section -->
                <div class="@container">
                    <div class="@[480px]:p-4">
                        <div
                            class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4"
                            style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80");'
                        >
                            <div class="flex flex-col gap-2 text-center">
                                <h1
                                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                                >
                                    Amankan Properti Anda dengan Paket CCTV Kami
                                </h1>
                                <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                    Pilih dari berbagai paket CCTV yang dirancang untuk memberikan keamanan komprehensif untuk rumah atau bisnis Anda. Nikmati ketenangan pikiran dengan fitur canggih seperti
                                    night vision, deteksi gerakan, dan akses remote.
                                </h2>
                            </div>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#d2e2f3] text-[#101419] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                                onclick="document.getElementById('paket-section').scrollIntoView({behavior: 'smooth'})"
                            >
                                <span class="truncate">Jelajahi Paket</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Paket Section -->
                <div id="paket-section">
                    <h2 class="text-[#101419] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Paket CCTV</h2>
                    
                    @forelse($pakets as $paket)
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-xl">
                            <div class="flex flex-[2_2_0px] flex-col gap-4">
                                <div class="flex flex-col gap-1">
                                    <p class="text-[#101419] text-base font-bold leading-tight">{{ $paket->name }}</p>
                                    <p class="text-[#58728d] text-sm font-normal leading-normal">
                                        @if($paket->description)
                                            {{ Str::limit($paket->description, 80) }}
                                        @else
                                            Paket keamanan lengkap dengan teknologi terdepan
                                        @endif
                                    </p>
                                    <p class="text-[#101419] text-lg font-bold mt-2">Rp {{ number_format($paket->price, 0, ',', '.') }}</p>
                                </div>
                                <div class="flex gap-2 flex-wrap">
                                    <a href="{{ route('paket.detail', $paket->id) }}"
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 flex-row-reverse bg-[#e9edf1] text-[#101419] text-sm font-medium leading-normal w-fit"
                                    >
                                        <span class="truncate">Lihat Detail</span>
                                    </a>
                                    <button
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 flex-row-reverse bg-[#e9edf1] text-[#101419] text-sm font-medium leading-normal w-fit"
                                        onclick="openConsultationModal('{{ $paket->name }}')"
                                    >
                                        <span class="truncate">Konsultasi</span>
                                    </button>
                                    <button
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 flex-row-reverse bg-[#e9edf1] text-[#101419] text-sm font-medium leading-normal w-fit"
                                        onclick="openOrderModal('{{ $paket->name }}', '{{ $paket->price }}')"
                                    >
                                        <span class="truncate">Pesan Sekarang</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                                style='background-image: url("https://images.unsplash.com/photo-1577086664693-894d8405334a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80");'
                            ></div>
                        </div>
                    </div>
                    @empty
                    <div class="p-4">
                        <div class="text-center py-12 bg-white rounded-xl shadow-sm">
                            <div class="mb-4">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m13-8l-4 4m0 0l-4-4m4 4V3" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Paket Tersedia</h3>
                            <p class="text-gray-500">Admin sedang malas.</p>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Call to Action Section -->
                <div class="p-4 mt-8">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl p-6 text-center text-white">
                        <h3 class="text-xl font-bold mb-2">Butuh Konsultasi Khusus?</h3>
                        <p class="mb-4 opacity-90">Tim ahli kami siap membantu Anda memilih paket yang tepat sesuai kebutuhan</p>
                        <button
                            class="bg-white text-blue-600 hover:bg-gray-100 font-medium py-2 px-6 rounded-lg transition-colors"
                            onclick="openConsultationModal('Konsultasi Umum')"
                        >
                            Hubungi Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Consultation Modal -->
<div id="consultationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl max-w-md w-full p-6">
        <h3 class="text-lg font-bold mb-4">Konsultasi Paket CCTV</h3>
        <p class="text-gray-600 mb-4">Kami akan menghubungi Anda untuk memberikan konsultasi mengenai paket <span id="consultationPackage" class="font-semibold"></span></p>
        <form>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi Pemasangan</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Alamat lengkap lokasi pemasangan"></textarea>
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="closeConsultationModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                    Batal
                </button>
                <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                    Kirim Permintaan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Order Modal -->
<div id="orderModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl max-w-md w-full p-6">
        <h3 class="text-lg font-bold mb-4">Pesan Paket CCTV</h3>
        <div class="mb-4 p-3 bg-blue-50 rounded-lg">
            <p class="text-sm text-gray-600">Paket: <span id="orderPackageName" class="font-semibold text-gray-900"></span></p>
            <p class="text-sm text-gray-600">Harga: <span id="orderPackagePrice" class="font-semibold text-gray-900"></span></p>
        </div>
        <form>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Pemasangan</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Alamat lengkap untuk pemasangan CCTV" required></textarea>
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="closeOrderModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                    Batal
                </button>
                <button type="submit" class="flex-1 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                    Pesan Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openConsultationModal(packageName) {
    document.getElementById('consultationPackage').textContent = packageName;
    document.getElementById('consultationModal').classList.remove('hidden');
}

function closeConsultationModal() {
    document.getElementById('consultationModal').classList.add('hidden');
}

function openOrderModal(packageName, packagePrice) {
    document.getElementById('orderPackageName').textContent = packageName;
    document.getElementById('orderPackagePrice').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(packagePrice);
    document.getElementById('orderModal').classList.remove('hidden');
}

function closeOrderModal() {
    document.getElementById('orderModal').classList.add('hidden');
}

// Close modals when clicking outside
document.getElementById('consultationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeConsultationModal();
    }
});

document.getElementById('orderModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeOrderModal();
    }
});
</script>
@endsection
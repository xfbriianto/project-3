@extends('layouts.public')

@section('title', 'Komponen CCTV')

@section('content')

<div class="px-4 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap gap-2 p-4">
              <a class="text-[#58728d] text-base font-medium leading-normal" href="#">Shop</a>
              <span class="text-[#58728d] text-base font-medium leading-normal">/</span>
              <span class="text-[#101419] text-base font-medium leading-normal">Components</span>
            </div>
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#101419] tracking-light text-[32px] font-bold leading-tight">Components</p>
                <p class="text-[#58728d] text-sm font-normal leading-normal">Explore our wide range of CCTV components to build or upgrade your security system.</p>
              </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 p-2">
              @forelse($komponens as $komponen)
                <div class="flex flex-col items-stretch bg-white rounded-lg shadow-sm p-3 border border-gray-100 hover:shadow-md transition-all duration-200">
                    <div class="w-24 h-24 bg-center bg-no-repeat bg-cover rounded-md mb-2"
                        @if($komponen->gambar)
                            style="background-image: url('{{ asset('storage/' . $komponen->gambar) }}');"
                        @else
                            style="background-color: #e7edf4;"
                        @endif
                ></div>
                    <div class="w-full">
                        <p class="text-[#101419] text-sm font-semibold leading-tight mb-1 text-center">{{ $komponen->nama }}</p>
                        <p class="text-[#58728d] text-xs font-normal leading-normal mb-1 text-center">Kategori: {{ $komponen->kategori }}</p>
                        <p class="text-[#3490f3] text-xs font-bold leading-normal mb-2 text-center">Rp {{ number_format($komponen->harga, 0, ',', '.') }}</p>
                        @if($komponen->deskripsi)
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">{{ Str::limit($komponen->deskripsi, 60) }}</p>
                        @endif
                        <div class="mt-3 grid grid-cols-2 gap-2">
                          <button type="button" onclick="openKomponenDetail({{ $komponen->id }})" class="inline-flex items-center justify-center px-3 py-2 text-xs font-medium rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">Detail</button>
                          <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="komponen_id" value="{{ $komponen->id }}">
                            <button type="submit" class="inline-flex items-center justify-center px-3 py-2 text-xs font-medium rounded-md bg-blue-600 text-white hover:bg-blue-700">Tambah</button>
                          </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 py-8">Belum ada komponen tersedia.</div>
            @endforelse
            </div>
          </div>
          
          <!-- Modal Detail Komponen -->
          <div id="komponen-detail-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4 overflow-hidden">
              <div class="px-4 py-3 border-b flex items-center justify-between">
                <h3 class="text-sm font-semibold text-gray-800">Detail Komponen</h3>
                <button onclick="closeKomponenDetail()" class="text-gray-500 hover:text-gray-700">&times;</button>
              </div>
              <div class="p-4" id="komponen-detail-content">
                <div class="text-sm text-gray-500">Memuat...</div>
              </div>
            </div>
          </div>
          
          <script>
          function openKomponenDetail(id){
            const modal = document.getElementById('komponen-detail-modal');
            const content = document.getElementById('komponen-detail-content');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            content.innerHTML = '<div class="text-sm text-gray-500">Memuat...</div>';
            fetch('/komponen/'+id)
              .then(r=>r.text())
              .then(html=>{ content.innerHTML = html; })
              .catch(()=>{ content.innerHTML = '<div class="text-sm text-red-600">Gagal memuat detail.</div>'; });
          }
          function closeKomponenDetail(){
            const modal = document.getElementById('komponen-detail-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
          }
          </script>
    @endsection
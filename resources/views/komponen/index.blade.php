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
                <div class="flex flex-col items-center bg-white rounded-lg shadow-sm p-2 border border-gray-100 hover:shadow-md transition-all duration-200">
                    <div class="w-24 h-24 bg-center bg-no-repeat bg-cover rounded-md mb-2"
                        @if($komponen->gambar)
                            style="background-image: url('{{ asset('storage/' . $komponen->gambar) }}');"
                        @else
                            style="background-color: #e7edf4;"
                        @endif
                ></div>
                    <div class="w-full text-center">
                        <p class="text-[#101419] text-sm font-semibold leading-tight mb-1">{{ $komponen->nama }}</p>
                        <p class="text-[#58728d] text-xs font-normal leading-normal mb-1">Kategori: {{ $komponen->kategori }}</p>
                        <p class="text-[#3490f3] text-xs font-bold leading-normal mb-1">Rp {{ number_format($komponen->harga, 0, ',', '.') }}</p>
                        @if($komponen->deskripsi)
                            <p class="text-xs text-gray-500 mt-1">{{ Str::limit($komponen->deskripsi, 40) }}</p>
                        @endif
              </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 py-8">Belum ada komponen tersedia.</div>
            @endforelse
            </div>
          </div>
    @endsection
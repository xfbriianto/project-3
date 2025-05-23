{{-- resources/views/produk/detail.blade.php --}}
@extends('layouts.public')

@section('title', $barang->name . ' - SecureView CCTV')

@section('content')
  <!-- Product Detail Section -->
  <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          
          <!-- Header Section -->
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
              <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight">{{ $barang->name }}</p>
            </div>
          </div>

          <!-- Product Image and Info Section -->
          <div class="p-4 @container">
            <div class="flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start gap-6">
              <!-- Product Image -->
              <div class="w-full @xl:w-1/2 bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                   @if($barang->image)
                     style='background-image: url("{{ asset('storage/' . $barang->image) }}");'
                   @else
                     style='background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect width='400' height='300' fill='%23e2e8f0'/%3E%3Cpath d='M150 120h100v60h-100zm40 20h20v20h-20z' fill='%2394a3b8'/%3E%3C/svg%3E");'
                   @endif
              ></div>
              
              <!-- Product Info Section -->
              <div class="flex w-full @xl:w-1/2 flex-col gap-4">
                <!-- Product Name -->
                <div>
                  <p class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">{{ $barang->name }}</p>
                  <p class="text-[#4e7097] text-base font-normal leading-normal mt-1">Kamera Surveillance Berkualitas Tinggi</p>
                </div>

                <!-- Price -->
                <div class="border-b border-gray-200 pb-4">
                  <p class="text-[#0e141b] text-2xl font-bold">Rp {{ number_format($barang->price, 0, ',', '.') }}</p>
                </div>

                <!-- Category and Stock -->
                <div class="flex flex-col gap-2 border-b border-gray-200 pb-4">
                  <div class="flex justify-between">
                    <span class="text-[#4e7097] text-sm font-medium">Kategori:</span>
                    <span class="text-[#0e141b] text-sm">{{ $barang->category }}</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="text-[#4e7097] text-sm font-medium">Stok:</span>
                    <span class="text-[#0e141b] text-sm">{{ $barang->stock ?? '—' }}</span>
                  </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-row gap-3">
                  @auth
                    {{-- Add to Cart Button for Logged In Users --}}
                    <form action="{{ route('cart.add') }}" method="POST" class="flex-1">
                      @csrf
                      <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                      <button type="submit"
                        class="w-full flex cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-[#1669c9] text-slate-50 text-sm font-semibold leading-normal tracking-[0.015em] hover:bg-[#1557a8] transition-colors">
                        <!-- Cart Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                          <path d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.5,172.29a24,24,0,0,0,5.12,11.64A28,28,0,1,0,96,208H168a28,28,0,1,0,26.11-18.73,24,24,0,0,0,5.64-11.7L206.13,67.6A8,8,0,0,0,230.14,58.87ZM180,204a12,12,0,1,1,12-12A12,12,0,0,1,180,204ZM100,204a12,12,0,1,1,12-12A12,12,0,0,1,100,204Z"/>
                        </svg>
                        <span class="truncate">Add to Cart</span>
                      </button>
                    </form>
                  @else
                    {{-- Add to Cart Button for Guests --}}
                    <button
                      onclick="alert('Kamu harus login terlebih dahulu untuk menambah ke keranjang.'); window.location='{{ route('login') }}';"
                      class="flex-1 flex cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-[#1669c9] text-slate-50 text-sm font-semibold leading-normal tracking-[0.015em] hover:bg-[#1557a8] transition-colors">
                      <!-- Cart Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.5,172.29a24,24,0,0,0,5.12,11.64A28,28,0,1,0,96,208H168a28,28,0,1,0,26.11-18.73,24,24,0,0,0,5.64-11.7L206.13,67.6A8,8,0,0,0,230.14,58.87ZM180,204a12,12,0,1,1,12-12A12,12,0,0,1,180,204ZM100,204a12,12,0,1,1,12-12A12,12,0,0,1,100,204Z"/>
                      </svg>
                      <span class="truncate">Add to Cart</span>
                    </button>
                  @endauth
                  
                  <!-- Add to Favorites Button -->
                  <button
                    class="flex-1 flex cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-[#e7edf3] text-[#0e141b] text-sm font-semibold leading-normal tracking-[0.015em] hover:bg-[#d0dbe7] transition-colors">
                    <!-- Heart Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"/>
                    </svg>
                    <span class="truncate">Add to Favorites</span>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Description -->
          <p class="text-[#0e141b] text-base font-normal leading-normal pb-3 pt-1 px-4">
            {!! nl2br(e($barang->description)) !!}
          </p>

          <!-- Reviews and Ratings Section -->
          <div class="flex flex-wrap gap-x-8 gap-y-6 p-4">
            <!-- Rating Display -->
            <div class="flex flex-col gap-2">
              <p class="text-[#0e141b] text-4xl font-black leading-tight tracking-[-0.033em]">5.0</p>
              <div class="flex gap-0.5">
                @for($i = 0; $i < 5; $i++)
                  <div class="text-[#1669c9]" data-icon="Star" data-size="18px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                    </svg>
                  </div>
                @endfor
              </div>
              <p class="text-[#0e141b] text-base font-normal leading-normal">{{ $barang->reviews_count ?? '0' }} reviews</p>
            </div>

            <!-- Rating Breakdown -->
            <div class="grid min-w-[200px] max-w-[400px] flex-1 grid-cols-[20px_1fr_40px] items-center gap-y-3">
              <p class="text-[#0e141b] text-sm font-normal leading-normal">5</p>
              <div class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#d0dbe7]">
                <div class="rounded-full bg-[#1669c9]" style="width: 0%;"></div>
              </div>
              <p class="text-[#4e7097] text-sm font-normal leading-normal text-right">0%</p>
              
              <p class="text-[#0e141b] text-sm font-normal leading-normal">4</p>
              <div class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#d0dbe7]">
                <div class="rounded-full bg-[#1669c9]" style="width: 0%;"></div>
              </div>
              <p class="text-[#4e7097] text-sm font-normal leading-normal text-right">0%</p>
              
              <p class="text-[#0e141b] text-sm font-normal leading-normal">3</p>
              <div class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#d0dbe7]">
                <div class="rounded-full bg-[#1669c9]" style="width: 0%;"></div>
              </div>
              <p class="text-[#4e7097] text-sm font-normal leading-normal text-right">0%</p>
              
              <p class="text-[#0e141b] text-sm font-normal leading-normal">2</p>
              <div class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#d0dbe7]">
                <div class="rounded-full bg-[#1669c9]" style="width: 0%;"></div>
              </div>
              <p class="text-[#4e7097] text-sm font-normal leading-normal text-right">0%</p>
              
              <p class="text-[#0e141b] text-sm font-normal leading-normal">1</p>
              <div class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#d0dbe7]">
                <div class="rounded-full bg-[#1669c9]" style="width: 0%;"></div>
              </div>
              <p class="text-[#4e7097] text-sm font-normal leading-normal text-right">0%</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
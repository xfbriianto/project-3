{{-- filepath: c:\Users\LENOVO\cctv-web\resources\views\produk\detail.blade.php --}}
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
                     style='background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 400 300\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23e2e8f0\'/%3E%3Cpath d=\'M150 120h100v60h-100zm40 20h20v20h-20z\' fill=\'%2394a3b8\'/%3E%3C/svg%3E");'
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
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
            <div class="flex flex-wrap gap-x-8 gap-y-6">
              <!-- Rating Display -->
              <div class="flex flex-col gap-3 items-center p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl min-w-[200px]">
                @php
                  $avgRating = $barang->ratings()->avg('rating');
                  $ratingsCount = $barang->ratings()->count();
                @endphp
                <p class="text-gray-900 text-5xl font-black leading-tight">
                  {{ $avgRating ? number_format($avgRating, 1) : '0.0' }}
                </p>
                <div class="flex gap-1">
                  @for($i = 1; $i <= 5; $i++)
                    <svg class="w-5 h-5 {{ $avgRating >= $i ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                  @endfor
                </div>
                <p class="text-gray-600 text-sm font-medium">{{ $ratingsCount }} reviews</p>
              </div>

              <!-- Rating Breakdown -->
              <div class="grid min-w-[200px] max-w-[400px] flex-1 grid-cols-[20px_1fr_50px] items-center gap-y-3">
                @for($star = 5; $star >= 1; $star--)
                  @php
                    $count = $barang->ratings()->where('rating', $star)->count();
                    $percent = $ratingsCount ? round(($count / $ratingsCount) * 100) : 0;
                  @endphp
                  <p class="text-gray-700 text-sm font-medium">{{ $star }}</p>
                  <div class="flex h-2.5 flex-1 overflow-hidden rounded-full bg-gray-200">
                    <div class="rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 transition-all duration-300" style="width: {{ $percent }}%;"></div>
                  </div>
                  <p class="text-gray-600 text-sm font-medium text-right">{{ $percent }}%</p>
                @endfor
              </div>
            </div>
          </div>

          <!-- Form Rating untuk User -->
          @auth
  <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
    <h4 class="text-lg font-semibold text-gray-900 mb-4">
      {{ $userRating ? '✏️ Edit Rating & Ulasan Anda' : '✍️ Beri Rating & Ulasan' }}
    </h4>
    <form method="POST" action="{{ route('rating.store') }}" id="ratingForm">
      @csrf
      <input type="hidden" name="barang_id" value="{{ $barang->id }}">
      
      <div class="mb-4">
        <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating:</label>
        <div class="flex gap-2">
          @for($i=1; $i<=5; $i++)
            <label class="cursor-pointer group">
              <input type="radio" name="rating" value="{{ $i }}" class="hidden peer" required {{ $userRating && $userRating->rating == $i ? 'checked' : '' }}>
              <svg class="w-10 h-10 text-gray-300 peer-checked:text-yellow-400 group-hover:text-yellow-300 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            </label>
          @endfor
        </div>
      </div>

      <div class="mb-4">
        <label for="review" class="block text-sm font-medium text-gray-700 mb-2">Ulasan (opsional):</label>
        <input type="text" name="review" id="review" placeholder="Tulis ulasan Anda..." 
          class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
          value="{{ $userRating ? $userRating->review : '' }}">
      </div>

      <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 shadow-sm hover:shadow">
        {{ $userRating ? 'Edit' : 'Kirim' }}
      </button>
    </form>
  </div>
@endauth

          <!-- Tampilkan Ulasan Pengguna -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <h4 class="text-lg font-semibold text-gray-900 mb-4">Ulasan Pengguna:</h4>
            @forelse($barang->ratings as $rating)
              <div class="border-b border-gray-100 last:border-0 py-4 first:pt-0">
                <div class="flex items-center gap-3 mb-2">
                  <div class="w-9 h-9 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                    {{ substr($rating->user->name ?? 'U', 0, 1) }}
                  </div>
                  <div>
                    <span class="font-semibold text-gray-900">{{ $rating->user->name ?? 'User' }}</span>
                    <div class="flex items-center gap-1">
                      @for($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 {{ $i <= $rating->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      @endfor
                      <span class="text-sm text-gray-600 ml-1">{{ $rating->rating }}/5</span>
                    </div>
                  </div>
                </div>
                @if($rating->review)
                  <div class="text-sm text-gray-700 ml-12">{{ $rating->review }}</div>
                @endif
              </div>
            @empty
              <div class="text-center py-8">
                <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <p class="text-gray-500 font-medium">Belum ada ulasan.</p>
              </div>
            @endforelse
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
document.getElementById('ratingForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const data = new FormData(form);
    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': data.get('_token'),
            'Accept': 'application/json'
        },
        body: data
    })
    .then(response => response.json())
    .then(res => {
        if(res.success) {
            alert(res.message);
            form.style.display = 'none'; // Hide form
            location.reload(); // Reload page to show updated rating & edit form
        } else {
            alert('Gagal menyimpan rating');
        }
    })
    .catch(() => alert('Gagal mengirim rating'));
});
</script>
@endsection
<div class="space-y-3">
  <div class="w-full h-40 bg-center bg-cover rounded-lg"
       @if($komponen->gambar)
       style="background-image:url('{{ asset('storage/'.$komponen->gambar) }}')"
       @else
       style="background:#e7edf4"
       @endif>
  </div>
  <div>
    <h4 class="text-sm font-semibold text-gray-900">{{ $komponen->nama }}</h4>
    <p class="text-xs text-gray-600">Kategori: {{ $komponen->kategori }}</p>
    <p class="text-sm font-bold text-blue-600">Rp {{ number_format($komponen->harga, 0, ',', '.') }}</p>
    @if($komponen->deskripsi)
      <p class="text-xs text-gray-700 mt-1">{{ $komponen->deskripsi }}</p>
    @endif
  </div>
  <form action="{{ route('cart.add') }}" method="POST" class="pt-2">
    @csrf
    <input type="hidden" name="komponen_id" value="{{ $komponen->id }}">
    <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white text-xs font-medium rounded-md hover:bg-blue-700">Tambah ke Keranjang</button>
  </form>
</div>


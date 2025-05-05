{{-- resources/views/admin/data_barang.blade.php --}}
@extends('layouts.app')

@section('title', 'Kelola Barang')

@push('styles')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@endpush

@section('content')
  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <!-- Header dan Tombol Tambah -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
      <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Manajemen Barang</h1>
      <button
        onclick="openAddModal()"
        class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-3 text-white text-sm font-semibold shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
      >
        <i class="fas fa-plus"></i> Tambah Barang
      </button>
    </div>

    <!-- Modal Tambah/Edit Barang -->
    <div
      id="itemModal"
      class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-4"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modalTitle"
    >
      <div class="relative w-full max-w-md rounded-lg bg-white p-6 shadow-lg">
        <button
          type="button"
          onclick="closeModal()"
          class="absolute right-4 top-4 text-gray-400 hover:text-gray-600 focus:outline-none"
          aria-label="Tutup Modal"
        >
          <i class="fas fa-times text-lg"></i>
        </button>
        <h2 id="modalTitle" class="mb-6 text-xl font-bold text-gray-900">Tambah Barang Baru</h2>

        <form id="itemForm" method="POST" enctype="multipart/form-data" class="space-y-5">
          @csrf
          <input type="hidden" name="_method" id="formMethod" value="POST">
          <input type="hidden" name="id" id="itemId">

          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input
              type="text"
              name="name"
              id="name"
              required
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
              placeholder="Masukkan nama barang"
            />
          </div>

          <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
            <select
              name="category"
              id="category"
              required
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
            >
              <option value="" disabled selected>Pilih Kategori</option>
              <option value="Elektronik">Elektronik</option>
              <option value="Perkakas">Perkakas</option>
              <option value="Material">Material</option>
            </select>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label for="stock" class="block text-sm font-medium text-gray-700">Stok</label>
              <input
                type="number"
                name="stock"
                id="stock"
                min="0"
                required
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Jumlah stok"
              />
            </div>

            <div>
              <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
              <input
                type="number"
                name="price"
                id="price"
                min="0"
                required
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                placeholder="Harga satuan"
              />
            </div>
          </div>

          <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea
              name="description"
              id="description"
              rows="3"
              class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
              placeholder="Deskripsi barang (opsional)"
            ></textarea>
          </div>

          <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
            <button
              type="button"
              onclick="closeModal()"
              class="rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-semibold text-gray-700 shadow-sm transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
            >
              Batal
            </button>
            <button
              type="submit"
              class="rounded-lg bg-blue-600 px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
            >Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Tabel Barang -->
    <div class="overflow-x-auto rounded-lg bg-white shadow">
      <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="whitespace-nowrap px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nama Barang</th>
            <th class="whitespace-nowrap px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Kategori</th>
            <th class="whitespace-nowrap px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Stok</th>
            <th class="whitespace-nowrap px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Harga</th>
            <th class="whitespace-nowrap px-6 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($barangs as $barang)
            <tr data-description="{{ $barang->description }}">
              <td class="px-6 py-4 text-gray-900 font-medium">{{ $barang->name }}</td>
              <td class="px-6 py-4 text-gray-700">{{ $barang->category }}</td>
              <td class="px-6 py-4 text-right font-semibold text-gray-900">{{ $barang->stock }}</td>
              <td class="px-6 py-4 text-right font-semibold text-gray-900">Rp {{ number_format($barang->price,0,',','.') }}</td>
              <td class="px-6 py-4 text-center space-x-2">
                <button onclick="editItem({{ $barang->id }})" class="p-2 rounded-md text-blue-600 hover:bg-blue-100 focus:ring-2 focus:ring-blue-500"><i class="fas fa-edit"></i></button>
                <form action="{{ route('admin.databarang.destroy',$barang) }}" method="POST" class="inline-block">
                  @csrf @method('DELETE')
                  <button type="submit" onclick="return confirm('Hapus barang ini?')" class="p-2 rounded-md text-red-600 hover:bg-red-100 focus:ring-2 focus:ring-red-500"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  function openAddModal() {
    const form = document.getElementById('itemForm');
    form.reset();
    form.action = '{{ route("admin.databarang.store") }}';
    document.getElementById('formMethod').value = 'POST';
    document.getElementById('modalTitle').textContent = 'Tambah Barang Baru';
    document.getElementById('itemModal').classList.remove('hidden');
  }

  function editItem(id) {
    const barangs = @json($barangs->keyBy('id'));
    const data = barangs[id];
    const form = document.getElementById('itemForm');
    form.reset();
    form.action = `/admin/databarang/${id}`;
    document.getElementById('formMethod').value = 'PUT';
    document.getElementById('modalTitle').textContent = 'Edit Barang';
    document.getElementById('itemId').value = id;
    form.elements.name.value = data.name;
    form.elements.category.value = data.category;
    form.elements.stock.value = data.stock;
    form.elements.price.value = data.price;
    form.elements.description.value = data.description;
    document.getElementById('itemModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('itemModal').classList.add('hidden');
  }
</script>
@endpush
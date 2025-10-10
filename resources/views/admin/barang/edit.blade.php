@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<div class="min-h-screen bg-slate-50 py-8 px-4">
  <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-6">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">Edit Barang</h1>
    <form action="{{ route('admin.databarang.update', $barang) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="block text-sm font-medium text-gray-700">Nama</label>
        <input name="name" value="{{ old('name', $barang->name) }}" required class="mt-1 w-full border rounded-lg p-2" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Kategori</label>
        <select name="category" required class="mt-1 w-full border rounded-lg p-2">
          @foreach(['Elektronik','Perkakas','Material','Aksesoris','CCTV Indoor','CCTV Outdoor','IP Camera','DVR/NVR'] as $cat)
            <option value="{{ $cat }}" {{ old('category', $barang->category)===$cat ? 'selected' : '' }}>{{ $cat }}</option>
          @endforeach
        </select>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Stok</label>
          <input type="number" name="stock" min="0" value="{{ old('stock', $barang->stock) }}" required class="mt-1 w-full border rounded-lg p-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Harga</label>
          <input type="number" name="price" min="0" value="{{ old('price', $barang->price) }}" required class="mt-1 w-full border rounded-lg p-2" />
        </div>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <textarea name="description" rows="3" class="mt-1 w-full border rounded-lg p-2">{{ old('description', $barang->description) }}</textarea>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Gambar</label>
        <input id="image" type="file" name="image" accept="image/*" class="mt-1 w-full border rounded-lg p-2" />
        <input type="hidden" name="current_image" value="{{ $barang->image }}" />
        @if($barang->image)
          <div class="mt-2">
            <img src="{{ asset('storage/'.$barang->image) }}" class="max-h-32 rounded border" />
          </div>
        @endif
        <div id="preview-wrapper" class="mt-2 hidden"><img id="preview" class="max-h-40 rounded border" /></div>
      </div>
      <div class="flex justify-end gap-2">
        <a href="{{ route('admin.databarang.index') }}" class="px-4 py-2 border rounded-lg">Batal</a>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Simpan</button>
      </div>
    </form>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function(){
  const input=document.getElementById('image');
  const wrap=document.getElementById('preview-wrapper');
  const img=document.getElementById('preview');
  let url=null; input?.addEventListener('change', e=>{ if(url){URL.revokeObjectURL(url);url=null;} const f=e.target.files?.[0]; if(!f){wrap.classList.add('hidden');return;} url=URL.createObjectURL(f); img.src=url; wrap.classList.remove('hidden'); });
});
</script>
@endsection



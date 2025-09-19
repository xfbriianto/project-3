@extends('layouts.app')

@section('title', 'Edit Komponen CCTV')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-xl">
    <h1 class="text-2xl font-bold mb-6">Edit Komponen CCTV</h1>
    <form action="{{ route('admin.komponen.update', $komponen->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Komponen</label>
            <input type="text" name="nama" class="w-full border rounded px-3 py-2" value="{{ old('nama', $komponen->nama) }}" required>
            @error('nama')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Harga</label>
            <input type="number" name="harga" class="w-full border rounded px-3 py-2" value="{{ old('harga', $komponen->harga) }}" required>
            @error('harga')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Kategori</label>
            <input type="text" name="kategori" class="w-full border rounded px-3 py-2" value="{{ old('kategori', $komponen->kategori) }}" required>
            @error('kategori')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar (opsional)</label>
            @if($komponen->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $komponen->gambar) }}" alt="{{ $komponen->nama }}" class="w-24 h-24 object-cover rounded">
                </div>
            @endif
            <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            @error('gambar')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Deskripsi (opsional)</label>
            <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="4">{{ old('deskripsi', $komponen->deskripsi) }}</textarea>
            @error('deskripsi')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-end">
            <a href="{{ route('admin.komponen.index') }}" class="mr-4 text-gray-600 hover:underline">Batal</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
@endsection 
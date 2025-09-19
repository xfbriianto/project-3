@extends('layouts.app')

@section('title', 'Kelola Komponen CCTV')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Daftar Komponen CCTV</h1>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-4">
        <a href="{{ route('admin.komponen.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">+ Tambah Komponen</a>
    </div>
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($komponens as $komponen)
                <tr>
                    <td class="px-6 py-4">
                        @if($komponen->gambar)
                            <img src="{{ asset('storage/' . $komponen->gambar) }}" alt="{{ $komponen->nama }}" class="w-16 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-semibold">{{ $komponen->nama }}</td>
                    <td class="px-6 py-4">{{ $komponen->kategori }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($komponen->harga, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.komponen.edit', $komponen->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                        <form action="{{ route('admin.komponen.destroy', $komponen->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus komponen ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada komponen.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 
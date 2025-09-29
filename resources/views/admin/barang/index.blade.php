{{-- resources/views/admin/barang/index.blade.php (moved from admin/databarang.blade.php) --}}
@extends('layouts.app')

@section('title', 'Kelola Barang')

@push('styles')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    @keyframes fade-in-down {
      from { opacity: 0; transform: translateY(-20px);} 
      to { opacity: 1; transform: translateY(0);} 
    }
    .animate-fade-in-down { animation: fade-in-down 0.3s ease-out;}
    .table-hover tr { transition: all 0.15s ease-in-out; }
    .table-hover tr:hover { background-color: #f8fafc; }
    .modal-transition { transition: all 0.2s ease; }
    .custom-file-input::-webkit-file-upload-button { visibility: hidden; width: 0; }
    .custom-file-input::before { content: 'Pilih File'; display: inline-block; background: #f3f4f6; border: 1px solid #d1d5db; border-radius: 0.375rem; padding: 6px 12px; outline: none; white-space: nowrap; cursor: pointer; font-size: 0.875rem; font-weight: 500; color: #4b5563; margin-right: 10px; }
    .custom-file-input:hover::before { background: #e5e7eb; }
  </style>
@endpush

@section('content')
  @include('admin.databarang')
@endsection

@push('scripts')
  @include('admin.databarang', ['scriptsOnly' => true])
@endpush



@extends('layouts.app')

@section('title', 'Layanan Pemasangan - Admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50/30">
  <div class="p-6">
    <div class="max-w-5xl mx-auto">
    <!-- Header Section -->
    <div class="mb-8">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">
            Layanan Pemasangan
          </h1>
          <p class="text-slate-600 mt-2">Kelola permintaan pemasangan dari pengguna</p>
        </div>
        <div class="flex items-center space-x-2 text-sm text-slate-500">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          <span>{{ $requests->total() ?? 0 }} Permintaan</span>
        </div>
      </div>
    </div>

    <!-- Main Content Card -->
    <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 overflow-hidden">
      <!-- Card Header with Stats -->
      <div class="px-8 py-6 bg-gradient-to-r from-white/80 to-slate-50/80 border-b border-slate-100">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 rounded-xl">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <div>
              <h2 class="text-lg font-semibold text-slate-800">Daftar Permintaan Pemasangan</h2>
              <p class="text-slate-600 text-sm">Pantau dan kelola status setiap permintaan</p>
            </div>
          </div>
          
          <!-- Quick Stats -->
          <div class="hidden md:grid grid-cols-3 gap-6 items-center">
            @php
              $stats = [
                'pending' => $requests->where('status', 'pending')->count(),
                'scheduled' => $requests->where('status', 'scheduled')->count(),
                'completed' => $requests->where('status', 'completed')->count(),
                'cancelled' => $requests->where('status', 'cancelled')->count(),
              ];
            @endphp
            <div class="text-center">
              <div class="text-2xl font-bold text-amber-600">{{ $stats['pending'] }}</div>
              <div class="text-xs text-slate-500 uppercase tracking-wider">Pending</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold text-blue-600">{{ $stats['scheduled'] }}</div>
              <div class="text-xs text-slate-500 uppercase tracking-wider">Scheduled</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold text-emerald-600">{{ $stats['completed'] }}</div>
              <div class="text-xs text-slate-500 uppercase tracking-wider">Completed</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Table Section -->
      <div class="overflow-hidden">
        <div class="overflow-x-auto">
          <table class="min-w-full">
            <thead>
              <tr class="bg-gradient-to-r from-slate-50 to-slate-100/50 border-b border-slate-200">
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">#</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                  <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>User</span>
                  </div>
                </th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                  <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <span>Produk</span>
                  </div>
                </th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                  <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Lokasi</span>
                  </div>
                </th>
                
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                  <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Tanggal</span>
                  </div>
                </th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">Status</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">Foto</th>
                <th class="px-6 py-4 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">Catatan</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              @forelse($requests as $req)
                <tr class="hover:bg-gradient-to-r hover:from-blue-50/30 hover:to-slate-50/30 transition-all duration-200 group">
                  <td class="px-6 py-4">
                    <div class="flex items-center">
                      <span class="inline-flex items-center justify-center w-8 h-8 bg-slate-100 group-hover:bg-blue-100 rounded-full text-sm font-medium text-slate-600 group-hover:text-blue-600 transition-colors duration-200">
                        {{ $req->id }}
                      </span>
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center space-x-3">
                      <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-medium">
                        {{ strtoupper(substr(optional($req->user)->name ?? 'U', 0, 1)) }}
                      </div>
                      <div>
                        <div class="font-medium text-slate-900">{{ optional($req->user)->name ?? '-' }}</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center space-x-2">
                      <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                      <span class="font-medium text-slate-900">{{ optional($req->barang)->name ?? '-' }}</span>
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="max-w-xs">
                      <div class="font-medium text-slate-900 truncate" title="{{ $req->address }}">{{ $req->address }}</div>
                      <div class="text-xs text-slate-500 truncate mt-1" title="{{ $req->formatted_address }}">{{ $req->formatted_address }}</div>
                    </div>
                  </td>
                  
                  <td class="px-6 py-4">
                    <div class="text-sm font-medium text-slate-900">
                      {{ $req->installation_date?->format('d M Y') ?? '-' }}
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <form action="{{ route('admin.installations.update-status', $req) }}" method="POST">
                      @csrf
                      @method('PATCH')
                      <div class="relative inline-block">
                        <select name="status" onchange="this.form.submit();" class="status-chip appearance-none border rounded-lg px-3 py-2 pr-8 text-xs font-semibold transition-colors duration-200">
                          <option value="pending" {{ $req->status==='pending' ? 'selected' : '' }}>Pending</option>
                          <option value="scheduled" {{ $req->status==='scheduled' ? 'selected' : '' }}>Scheduled</option>
                          <option value="completed" {{ $req->status==='completed' ? 'selected' : '' }}>Completed</option>
                          <option value="cancelled" {{ $req->status==='cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                          <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                          </svg>
                        </div>
                      </div>
                    </form>
                  </td>
                  <td class="px-6 py-4">
                    @if($req->location_photo_path)
                      <a href="{{ asset('storage/'.$req->location_photo_path) }}" target="_blank" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 transition-colors duration-200">
                        <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Lihat Foto
                      </a>
                    @else
                      <span class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-500 bg-slate-100 rounded-lg">
                        <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Tidak ada
                      </span>
                    @endif
                  </td>
                  <td class="px-6 py-4">
                    @if($req->note)
                      <div class="max-w-xs">
                        <p class="text-sm text-slate-700 truncate" title="{{ $req->note }}">{{ $req->note }}</p>
                      </div>
                    @else
                      <span class="text-slate-400 text-sm">-</span>
                    @endif
                  </td>
                  
                </tr>
              @empty
                <tr>
                  <td colspan="9" class="px-6 py-16">
                    <div class="text-center">
                      <div class="mx-auto w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                      </div>
                      <h3 class="text-lg font-medium text-slate-900 mb-2">Belum ada permintaan pemasangan</h3>
                      <p class="text-slate-500">Data akan muncul ketika ada permintaan pemasangan baru dari pengguna.</p>
                    </div>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>

      <!-- Pagination Footer -->
      @if($requests->hasPages())
        <div class="px-8 py-6 bg-gradient-to-r from-slate-50/50 to-white/50 border-t border-slate-100">
          <div class="flex items-center justify-between">
            <div class="text-sm text-slate-600">
              Menampilkan {{ $requests->firstItem() ?? 0 }} - {{ $requests->lastItem() ?? 0 }} dari {{ $requests->total() ?? 0 }} permintaan
            </div>
            <div class="custom-pagination">
              {{ $requests->links() }}
            </div>
          </div>
        </div>
      @endif
    </div>
    </div>
  </div>
</div>

<style>
.custom-pagination .pagination {
  @apply flex items-center space-x-1;
}

.custom-pagination .page-link {
  @apply px-3 py-2 text-sm font-medium text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 hover:text-slate-900 transition-colors duration-200;
}

.custom-pagination .page-item.active .page-link {
  @apply bg-blue-600 text-white border-blue-600 hover:bg-blue-700;
}

.custom-pagination .page-item.disabled .page-link {
  @apply text-slate-400 cursor-not-allowed hover:bg-white hover:text-slate-400;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
  function applyStatusColor(select) {
    const base = 'status-chip '; // keep
    select.className = base; // reset
    const val = select.value;
    const map = {
      pending: 'bg-amber-100 text-amber-800 border-amber-200',
      scheduled: 'bg-blue-100 text-blue-800 border-blue-200',
      completed: 'bg-emerald-100 text-emerald-800 border-emerald-200',
      cancelled: 'bg-red-100 text-red-800 border-red-200'
    };
    select.className = base + (map[val] || 'bg-slate-100 text-slate-800 border-slate-200');
  }

  document.querySelectorAll('select.status-chip').forEach(function(sel) {
    applyStatusColor(sel);
    sel.addEventListener('change', function() { applyStatusColor(sel); });
  });
});
</script>
@endsection
<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
  <!-- Header Ringkasan Operasional -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard Operasional</h1>

  <!-- Ringkasan Operasional Bisnis -->
  <div class="row">
    <!-- Card Penjualan -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Penjualan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card Jadwal Teknisi -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jadwal Teknisi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card Stok Produk -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Stok Produk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalStok }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-boxes fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card Keluhan Pelanggan -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Keluhan Pelanggan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Tabel Ringkasan Penjualan Terbaru -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ringkasan Penjualan Terbaru</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Produk</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
            </tr>
          </thead>
             <tbody>
        @forelse($penjualanTerbaru as $order)
          @foreach($order->items as $item)
            <tr>
              <td>{{ $loop->parent->iteration }}{{ $loop->count > 1 ? '.' . $loop->iteration : '' }}</td>
              <td>{{ $order->created_at->format('Y-m-d') }}</td>
              <td>{{ $item->barang->name ?? '-' }}</td>
              <td>{{ $item->quantity }}</td>
              <td>Rp {{ number_format($item->quantity * $item->price, 0, ',', '.') }}</td>
            </tr>
          @endforeach
        @empty
          <tr>
            <td colspan="5" class="text-center text-gray-500">Belum ada penjualan.</td>
          </tr>
        @endforelse
      </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Charts Section -->
  <div class="row">
    <!-- Area & Bar Charts -->
    <div class="col-xl-8 col-lg-7 mb-4">
      <!-- Area Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>

      <!-- Bar Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Penjualan</h6>
        </div>
        <div class="card-body">
          <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
          </div>
        </div>
      </div>
    </div>


@endsection

@push('scripts')
  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Area Chart Example
      var ctxArea = document.getElementById('myAreaChart').getContext('2d');
      new Chart(ctxArea, {
        type: 'line',
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          datasets: [{
            label: "Penjualan",
            data: [0, 10000, 5000, 15000, 10000, 20000, 15000],
            fill: true,
            tension: 0.4
          }]
        }
      });

      @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Area Chart Example (Penjualan Bulanan)
      var ctxArea = document.getElementById('myAreaChart').getContext('2d');
      new Chart(ctxArea, {
        type: 'line',
        data: {
          labels: {!! json_encode($labels) !!},
          datasets: [{
            label: "Penjualan",
            data: {!! json_encode($data) !!},
            fill: true,
            tension: 0.4,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2
          }]
        }
      });

      // Bar Chart Example (Penjualan Bulanan)
      var ctxBar = document.getElementById('myBarChart').getContext('2d');
      new Chart(ctxBar, {
        type: 'bar',
        data: {
          labels: {!! json_encode($labels) !!},
          datasets: [{
            label: "Penjualan",
            data: {!! json_encode($data) !!},
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 2
          }]
        }
      });
    });
  </script>
@endpush
      // Donut Chart Example
      var ctxPie = document.getElementById('myPieChart').getContext('2d');
      new Chart(ctxPie, {
        type: 'doughnut',
        data: {
          labels: ["CCTV", "Sensor", "Akses Control"],
          datasets: [{
            data: [55, 30, 15]
          }]
        }
      });
    });
  </script>
@endpush

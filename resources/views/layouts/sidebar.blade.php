<!-- resources/views/layouts/sidebar.blade.php -->
<ul class="navbar-nav bg-blue-900 sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard') }}">
    <div class="sidebar-brand-icon">
      <img src="{{asset('images/logo_TC.png') }}" alt="Logo" style="height: 40px; width: 40px;">
    </div>
    <div class="sidebar-brand-text mx-3">TECHNO CENTER</div>
</a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Menu Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('dashboard') }}">
    <i class="fas fa-home fa-lg"></i>
      <span>Dashboard</span></a>
  </li>
 <li class="nav-item">
    <a class="nav-link" href="{{route('admin.databarang') }}">
    <i class="fas fa-boxes fa-lg"></i>
      <span>Manajemen Produk</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.paket.index') }}">
    <i class="fas fa-box fa-lg"></i>
      <span>Manajemen Paket</span></a>
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.laporan-penjualan') }}">
    <i class="fas fa-file-invoice-dollar fa-lg"></i>
      <span>Laporan Penjualan</span></a>
  </li> 
</ul>

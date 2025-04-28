<!-- resources/views/layouts/sidebar.blade.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin Panel</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Menu Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Database</span></a>
  <!-- Tambahkan menu lainnya sesuai template -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Laporan Penjualan</span></a>
</ul>
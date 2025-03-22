<!-- resources/views/layouts/sidebar.blade.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('assets/images/logo_TC.png') }}" alt="Logo" style="height: 40px; width: 40px;">
    </div>
    <div class="sidebar-brand-text mx-3">TECH VIEW</div>
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
    <a class="nav-link" href="{{ route('admin.databarang') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kelola Barang</span></a>
  </li>
</ul>

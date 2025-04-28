<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-- Tombol Kembali -->
  <button 
    class="btn btn-link d-md-none rounded-circle mr-3" 
    onclick="window.history.back()"
    title="Kembali"
  >
    <i class="fa fa-arrow-left"></i>
  </button>

  <!-- (biarkan toggle sidebar jika masih dipakai) -->
  <button id="sidebarToggleTop" class="btn btn-link d-none d-md-inline rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto">
    @guest
      <!-- jika belum login, tampilkan tombol Login -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fas fa-sign-in-alt fa-fw mr-2 text-gray-400"></i>
          Login
        </a>
      </li>
    @else
      <!-- Nama user sebagai link ke profile/dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-user-cog fa-fw mr-2 text-gray-400"></i>
          {{ Auth::user()->role == 'super-admin' ? 'Super Admin' : Auth::user()->name }}
        </a>
      </li>

      <!-- Logout langsung -->
      <li class="nav-item">
        <a 
          class="nav-link" 
          href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          title="Logout"
        >
          <i class="fas fa-sign-out-alt fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
        <form 
          id="logout-form" 
          action="{{ route('logout') }}" 
          method="POST" 
          class="d-none"
        >
          @csrf
        </form>
      </li>
    @endguest
  </ul>
</nav>

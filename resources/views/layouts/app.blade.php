<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard Admin')</title>
  
  <!-- Link CSS template (gunakan asset helper) -->
  <link rel="stylesheet" href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
  
  @stack('styles')
</head>
<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        @include('layouts.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- End Page Content -->
      </div>
      <!-- End Main Content -->

      <!-- Footer -->
      @include('layouts.footer')
      <!-- End Footer -->
    </div>
    <!-- End Content Wrapper -->
  </div>
  <!-- End Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Link JS template -->
  <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  
  
  @stack('scripts')
</body>
</html>

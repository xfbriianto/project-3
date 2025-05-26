<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard Admin')</title>
  
  <!-- Modern Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
  />
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  
  <!-- FontAwesome for fallback icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
  <!-- Custom Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'inter': ['Inter', 'Noto Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>
  
  @stack('styles')
</head>
<body class="font-inter bg-slate-50">
  
  <!-- Main Wrapper -->
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-80 flex-shrink-0">
      @include('layouts.sidebar')
    </aside>
    <!-- End of Sidebar -->

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
      <header class="bg-white shadow-sm border-b border-slate-200">
        @include('layouts.topbar')
      </header>
      <!-- End of Topbar -->

      <!-- Main Content -->
      <main class="flex-1 p-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
          @yield('content')
        </div>
      </main>
      <!-- End Main Content -->

      <!-- Footer -->
      <footer class="bg-white border-t border-slate-200 py-4">
        @include('layouts.footer')
      </footer>
      <!-- End Footer -->
    </div>
    <!-- End Main Content Area -->
  </div>
  <!-- End Main Wrapper -->

  <!-- Scroll to Top Button-->
  <button class="fixed bottom-6 right-6 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-200 opacity-0 invisible" id="scrollToTop">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
      <path d="m213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path>
    </svg>
  </button>
  
  <!-- Modern JavaScript -->
  <script>
    // Scroll to top functionality
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.remove('opacity-0', 'invisible');
        scrollToTopBtn.classList.add('opacity-100', 'visible');
      } else {
        scrollToTopBtn.classList.add('opacity-0', 'invisible');
        scrollToTopBtn.classList.remove('opacity-100', 'visible');
      }
    });
    
    scrollToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Mobile menu toggle (if needed)
    function toggleSidebar() {
      const sidebar = document.querySelector('aside');
      sidebar.classList.toggle('-translate-x-full');
      sidebar.classList.toggle('translate-x-0');
    }
  </script>
  
  @stack('scripts')
</body>
</html>
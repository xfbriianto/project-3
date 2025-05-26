<!-- resources/views/layouts/topbar.blade.php -->
<div class="flex items-center justify-between px-6 py-4">
  <!-- Search Bar / Page Title -->
  <div class="flex items-center flex-1">
    <h1 class="text-xl font-semibold text-gray-800">
      @yield('page-title', 'Dashboard')
    </h1>
  </div>
  
  <!-- Right Side - User Menu -->
  <div class="flex items-center space-x-4">
    <!-- Notifications -->
    <button class="relative p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-full transition-colors duration-200">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
        <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path>
      </svg>
      <!-- Notification badge -->
      <span class="absolute -top-1 -right-1 h-3 w-3 bg-red-500 rounded-full text-xs flex items-center justify-center text-white"></span>
    </button>
    
    <!-- User Dropdown -->
    <div class="relative" x-data="{ open: false }">
      <button @click="open = !open" class="flex items-center space-x-3 p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
          <span class="text-white text-sm font-medium">
            {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
          </span>
        </div>
        <div class="hidden md:block text-left">
          <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'Admin' }}</p>
          <p class="text-xs text-gray-500">Administrator</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-gray-400" viewBox="0 0 256 256">
          <path d="m213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
        </svg>
      </button>
      
      <!-- Dropdown Menu -->
      <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50">
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-3" viewBox="0 0 256 256">
            <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
          </svg>
          Profile
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-3" viewBox="0 0 256 256">
            <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.6,107.6,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3.12-3.12L186.05,39.46a8,8,0,0,0-3.93-6,107.6,107.6,0,0,0-26.25-10.88,8,8,0,0,0-7.06,1.48L130.16,40Q128,40,125.84,40L107.2,25.05a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.45a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.56-3.12,3.12L39.46,69.95a8,8,0,0,0-6,3.93,107.6,107.6,0,0,0-10.88,26.25,8,8,0,0,0,1.48,7.06L40,125.84Q40,128,40,130.16L25.05,148.8a8,8,0,0,0-1.48,7.06,107.6,107.6,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.56,1.56,3.12,3.12L69.95,216.54a8,8,0,0,0,3.93,6,107.6,107.6,0,0,0,26.25,10.88,8,8,0,0,0,7.06-1.48L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.6,107.6,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6L188.68,191.73q1.56-1.56,3.12-3.12L216.54,186.05a8,8,0,0,0,6-3.93,107.6,107.6,0,0,0,10.88-26.25,8,8,0,0,0-1.48-7.06ZM128,192a64,64,0,1,1,64-64A64.07,64.07,0,0,1,128,192Z"></path>
          </svg>
          Settings
        </a>
        <hr class="my-2">
        <form method="POST" action="{{ route('logout') }}" class="block">
          @csrf
          <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-3" viewBox="0 0 256 256">
              <path d="M112,216a8,8,0,0,1-8,8H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h56a8,8,0,0,1,0,16H48V208h56A8,8,0,0,1,112,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L196.69,120H104a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,221.66,122.34Z"></path>
            </svg>
            Logout
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Alpine.js for dropdown functionality -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
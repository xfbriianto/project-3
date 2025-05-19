{{-- resources/views/service/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Service | Technocenter')

@section('content')
  <!-- Top Section -->
 <body class="bg-white p-6 sm:p-10">
  <!-- Top Section -->
  <section class="rounded-xl overflow-hidden flex flex-col sm:flex-row max-w-[1200px] mx-auto">
   <div class="flex flex-col justify-center px-6 py-10 sm:px-14 sm:py-16 flex-1 bg-gradient-to-r from-[#E6F0FF] to-[#7CA6FF]">
    <h1 class="text-[#1E2E42] font-semibold text-[26px] sm:text-[32px] leading-[1.2] max-w-[320px] sm:max-w-[400px]">
     Stay home &amp; get your secure intensive
    </h1>
    <p class="text-[#5B6B7B] text-[14px] mt-2 mb-4 max-w-[320px] sm:max-w-[400px]">
     Start You'r Daily Security with
     <span class="text-[#3CBF8E]">
      ViewTech
     </span>
     <br/>
     <span class="text-[#3CBF8E]">
      by TechnoCenter
     </span>
    </p>
    <form class="flex max-w-[320px] sm:max-w-[400px]">
     <label class="sr-only" for="input">
      Input
     </label>
     <div class="flex items-center bg-white rounded-l-full px-4 py-3 text-[12px] text-[#7B7B7B] w-full">
      <i class="fas fa-paper-plane mr-2 text-[#B7B7B7]">
      </i>
      <input class="outline-none w-full bg-transparent placeholder:text-[#7B7B7B]" id="input" placeholder="kemanan anda adalah prioritas kami" type="text"/>
     </div>
     <button class="bg-[#1E5EFF] text-white rounded-r-full px-6 py-3 text-[14px] font-semibold hover:bg-[#154ecc] transition" type="submit">
      check katalog
     </button>
    </form>
   </div>
   <div class="flex-1">
    <img alt="Two white security cameras mounted on a pole with a bright blue sky and some green tree branches" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/b279a80a-a3a2-4d84-0555-50dd5ba4f70d.jpg" width="600"/>
   </div>
  </section>
  <!-- Bottom Cards Section -->
  <section class="max-w-[1200px] mx-auto mt-16 grid grid-cols-1 sm:grid-cols-3 gap-6">
  <article class="bg-[#F0E8D6] rounded-lg p-6 flex items-center justify-between h-72">
    <div class="max-w-[160px]">
      <h2 class="text-[#1E2E42] font-semibold text-[16px] leading-tight mb-4">
        Everyday Fresh &amp; Clean with Our Products
      </h2>
      <button class="bg-[#E53E2F] text-white text-[12px] px-3 py-1 rounded-sm font-semibold hover:bg-[#b83227] transition">
        Shop Now →
      </button>
    </div>
    <img
      src="https://storage.googleapis.com/a1aa/image/ef6ea38d-5087-4467-fb81-a1553c3095e7.jpg"
      alt="Onions"
      class="w-[140px] h-[140px] object-contain"
    />
  </article>

  <article class="bg-[#F3E6E7] rounded-lg p-6 flex items-center justify-between h-72">
    <div class="max-w-[160px]">
      <h2 class="text-[#1E2E42] font-semibold text-[16px] leading-tight mb-4">
        Make your Breakfast Healthy and Easy
      </h2>
      <button class="bg-[#E53E2F] text-white text-[12px] px-3 py-1 rounded-sm font-semibold hover:bg-[#b83227] transition">
        Shop Now →
      </button>
    </div>
    <img
      src="https://storage.googleapis.com/a1aa/image/943b70e7-1634-42a3-027d-9c7bb8967580.jpg"
      alt="Strawberry Juice"
      class="w-[140px] h-[140px] object-contain"
    />
  </article>

  <article class="bg-[#E3E7F0] rounded-lg p-6 flex items-center justify-between h-72">
    <div class="max-w-[160px]">
      <h2 class="text-[#1E2E42] font-semibold text-[16px] leading-tight mb-4">
        The best Organic Products Online
      </h2>
      <button class="bg-[#E53E2F] text-white text-[12px] px-3 py-1 rounded-sm font-semibold hover:bg-[#b83227] transition">
        Shop Now →
      </button>
    </div>
    <img
      src="https://storage.googleapis.com/a1aa/image/dd77d01e-dc4b-4e5c-463f-fbdbad081ba6.jpg"
      alt="Organic Vegetables"
      class="w-[140px] h-[140px] object-contain"
    />
  </article>
</section>

 <!-- Produk Section -->
  <section class="max-w-7xl mx-auto px-4 py-12">
  <!-- Section Title and Categories -->
  <div class="flex flex-col md:flex-row justify-between items-center mb-8">
    <h2 class="text-2xl font-semibold text-gray-700">Popular CCTV Products</h2>
    <div class="flex flex-wrap gap-4 mt-4 md:mt-0">
      <button class="text-green-500 font-medium">All</button>
      <button class="text-gray-500 hover:text-green-500">Indoor Cameras</button>
      <button class="text-gray-500 hover:text-green-500">Outdoor Cameras</button>
      <button class="text-gray-500 hover:text-green-500">DVR Systems</button>
      <button class="text-gray-500 hover:text-green-500">IP Cameras</button>
      <button class="text-gray-500 hover:text-green-500">Accessories</button>
      <button class="text-gray-500 hover:text-green-500">Packages</button>
    </div>
  </div>
  
  <!-- Products Grid - First Row -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
    <!-- Product Card 1 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">Hot</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Dome Security Camera" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Indoor Cameras</div>
      <h3 class="text-sm font-medium mb-2">HD Dome Security Camera 1080p Indoor</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★★</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Hikvision</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$28.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$32.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-blue-500 text-white text-xs px-3 py-1 rounded-full">Sale</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Bullet Camera" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Outdoor Cameras</div>
      <h3 class="text-sm font-medium mb-2">Weatherproof Bullet Camera 4MP</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★☆☆</div>
        <span class="text-xs text-gray-400 ml-2">(3.5)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Dahua</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$52.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$55.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 3 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-green-500 text-white text-xs px-3 py-1 rounded-full">New</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="PTZ Camera" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">IP Cameras</div>
      <h3 class="text-sm font-medium mb-2">PTZ IP Camera 5MP with 30x Zoom</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Axis</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$148.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$152.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 4 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="DVR System" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">DVR Systems</div>
      <h3 class="text-sm font-medium mb-2">8-Channel DVR System with 1TB HDD</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Swann</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$117.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$129.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 5 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-orange-500 text-white text-xs px-3 py-1 rounded-full">-14%</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Security Monitor" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Accessories</div>
      <h3 class="text-sm font-medium mb-2">10" LCD Security Monitor with HDMI</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By ViewTech</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$73.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$85.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>
  </div>
  
  <!-- Products Grid - Second Row -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
    <!-- Product Card 6 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Wireless Camera" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Indoor Cameras</div>
      <h3 class="text-sm font-medium mb-2">Wireless IP Camera with Two-Way Audio</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Reolink</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$54.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$65.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 7 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="CCTV Cable" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Accessories</div>
      <h3 class="text-sm font-medium mb-2">100ft BNC Video Power Cable</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By CableMatters</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$32.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$35.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 8 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-blue-500 text-white text-xs px-3 py-1 rounded-full">Sale</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Security NVR" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">DVR Systems</div>
      <h3 class="text-sm font-medium mb-2">16-Channel NVR with 4TB Storage</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Amcrest</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$235.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$257.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 9 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <span class="absolute top-4 left-4 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">Hot</span>
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="Doorbell Camera" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Outdoor Cameras</div>
      <h3 class="text-sm font-medium mb-2">Smart Video Doorbell with Motion Detection</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★☆</div>
        <span class="text-xs text-gray-400 ml-2">(4.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Ring</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$123.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$135.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>

    <!-- Product Card 10 -->
    <div class="bg-white rounded-lg shadow-sm p-4 relative">
      <div class="mb-4 flex justify-center">
        <img src="/api/placeholder/220/220" alt="CCTV Package" class="h-48 object-contain"/>
      </div>
      <div class="text-xs text-gray-500 mb-1">Packages</div>
      <h3 class="text-sm font-medium mb-2">4-Camera Home Security System</h3>
      <div class="flex items-center mb-2">
        <div class="flex text-yellow-400">★★★★★</div>
        <span class="text-xs text-gray-400 ml-2">(5.0)</span>
      </div>
      <div class="text-xs text-gray-500 mb-2">By Lorex</div>
      <div class="flex justify-between items-center">
        <div>
          <span class="text-green-500 font-medium">$322.85</span>
          <span class="text-xs text-gray-400 line-through ml-2">$349.8</span>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
          Add
        </button>
      </div>
    </div>
  </div>
</section>

@endsection

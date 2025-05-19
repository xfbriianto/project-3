<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Keranjang Belanja CCTV
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  @vite('resources/css/app.css')
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-gray-50 min-h-screen flex flex-col">
  <header class="bg-white shadow-md">
   <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="flex items-center space-x-3">
     <img alt="Logo CCTV Shop, a stylized camera icon in blue and gray" class="w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/0daa9f34-3a35-4662-27e6-60606cae89e4.jpg" width="40"/>
     <h1 class="text-2xl font-semibold text-gray-800">
      CCTV Shop
     </h1>
    </div>
        <nav class="hidden md:flex space-x-6 text-gray-700 font-medium">
         <a class="hover:text-blue-600 transition" href="{{ route('index') }}">
          Beranda
         </a>
         <a class="hover:text-blue-600 transition" href="#">
          Produk
         </a>
         <a class="hover:text-blue-600 transition" href="#">
          Keranjang
         </a>
    </nav>
    <div class="md:hidden">
     <button class="text-gray-700 focus:outline-none" id="menu-btn">
      <i class="fas fa-bars fa-lg">
      </i>
     </button>
    </div>
   </div>
   <nav class="hidden bg-white border-t border-gray-200 md:hidden" id="mobile-menu">
    <a class="block px-4 py-3 text-gray-700 font-medium hover:bg-gray-100" href="#">
     Beranda
    </a>
    <a class="block px-4 py-3 text-gray-700 font-medium hover:bg-gray-100" href="#">
     Produk
    </a>
    <a class="block px-4 py-3 text-gray-700 font-medium hover:bg-gray-100" href="#">
     Kontak
    </a>
   </nav>
  </header>
  <main class="flex-grow container mx-auto px-4 py-8">
   <h2 class="text-3xl font-semibold text-gray-800 mb-6">
    Keranjang Belanja
   </h2>
   <div class="overflow-x-auto">
    <table class="min-w-full bg-white rounded-lg shadow-md">
     <thead>
      <tr class="bg-blue-600 text-white text-left">
       <th class="py-3 px-4 rounded-tl-lg">
        Produk
       </th>
       <th class="py-3 px-4">
        Harga
       </th>
       <th class="py-3 px-4">
        Jumlah
       </th>
       <th class="py-3 px-4">
        Subtotal
       </th>
       <th class="py-3 px-4 rounded-tr-lg">
        Aksi
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Dome Camera model with black casing and infrared LEDs" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/7b20d062-1a7f-4191-3e29-10f4427c6789.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Dome Camera HD
         </p>
         <p class="text-sm text-gray-500">
          Resolusi 1080p, night vision
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 450.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Dome Camera HD" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Dome Camera HD" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="2"/>
         <button aria-label="Tambah jumlah produk CCTV Dome Camera HD" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 900.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Dome Camera HD dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Bullet Camera with white casing and weatherproof design" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/90603cd4-669d-4d9c-95e6-9ba040dde686.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Bullet Camera 4MP
         </p>
         <p class="text-sm text-gray-500">
          Waterproof, night vision
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 650.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Bullet Camera 4MP" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Bullet Camera 4MP" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Bullet Camera 4MP" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 650.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Bullet Camera 4MP dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV PTZ Camera with black body and motorized zoom lens" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/d0c1b793-8ea9-4c9d-911a-66d10342abf0.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV PTZ Camera 5MP
         </p>
         <p class="text-sm text-gray-500">
          Motorized zoom, 360° rotation
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.200.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV PTZ Camera 5MP" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV PTZ Camera 5MP" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV PTZ Camera 5MP" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.200.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV PTZ Camera 5MP dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Wireless Camera with compact white design and antenna" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/2f5002e5-5799-49c7-9e28-372cd247d0c8.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Wireless Camera 1080p
         </p>
         <p class="text-sm text-gray-500">
          WiFi, two-way audio
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 750.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Wireless Camera 1080p" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Wireless Camera 1080p" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="3"/>
         <button aria-label="Tambah jumlah produk CCTV Wireless Camera 1080p" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 2.250.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Wireless Camera 1080p dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Hidden Camera disguised as a smoke detector in white" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/3e5f5f44-6b5d-496c-14ca-e8aa33694411.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Hidden Camera Mini
         </p>
         <p class="text-sm text-gray-500">
          Disguised as smoke detector
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 500.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Hidden Camera Mini" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Hidden Camera Mini" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Hidden Camera Mini" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 500.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Hidden Camera Mini dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Outdoor Camera with black weatherproof casing and LED lights" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/c464d4d1-5b21-42b2-97d7-d43ca1ac66ef.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Outdoor Camera 4K
         </p>
         <p class="text-sm text-gray-500">
          Weatherproof, night vision
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.100.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Outdoor Camera 4K" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Outdoor Camera 4K" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="2"/>
         <button aria-label="Tambah jumlah produk CCTV Outdoor Camera 4K" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 2.200.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Outdoor Camera 4K dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Fisheye Camera with white circular design and wide angle lens" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/7f33e5ce-0dce-4e68-d365-3ac361e96228.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Fisheye Camera 360°
         </p>
         <p class="text-sm text-gray-500">
          Wide angle, panoramic view
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.350.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Fisheye Camera 360°" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Fisheye Camera 360°" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Fisheye Camera 360°" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.350.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Fisheye Camera 360° dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV PTZ Camera with white casing and remote control" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/51bcd087-9b3d-4714-2f16-fa37a9a3488b.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV PTZ Camera 1080p
         </p>
         <p class="text-sm text-gray-500">
          Remote control, night vision
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.000.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV PTZ Camera 1080p" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV PTZ Camera 1080p" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV PTZ Camera 1080p" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.000.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV PTZ Camera 1080p dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with integrated microphone and speaker in black" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/f09cfda3-de4f-4c8a-2cae-8f3bd8392ec7.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Camera with Audio
         </p>
         <p class="text-sm text-gray-500">
          Two-way audio, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 800.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Camera with Audio" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Camera with Audio" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="2"/>
         <button aria-label="Tambah jumlah produk CCTV Camera with Audio" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.600.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Camera with Audio dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with night vision and motion detection in white" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/e3cd5717-3f94-4545-3951-31f78d18ad49.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Camera Night Vision
         </p>
         <p class="text-sm text-gray-500">
          Motion detection, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 700.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Camera Night Vision" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Camera Night Vision" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Camera Night Vision" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 700.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Camera Night Vision dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with cloud storage and mobile app support in black" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/a073b226-2f1a-4ba3-0fe3-37356df674af.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Camera Cloud Storage
         </p>
         <p class="text-sm text-gray-500">
          Mobile app, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 850.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Camera Cloud Storage" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Camera Cloud Storage" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Camera Cloud Storage" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 850.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Camera Cloud Storage dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with infrared LEDs and vandal-proof casing in black" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/a41efa6a-f2a7-4f94-6ed6-2c1b1080edf5.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Vandal-Proof Camera
         </p>
         <p class="text-sm text-gray-500">
          Infrared, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 900.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Vandal-Proof Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Vandal-Proof Camera" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Vandal-Proof Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 900.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Vandal-Proof Camera dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with pan and tilt function in white casing" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/11455266-7d29-43f1-f427-1006b32ca29c.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Pan &amp; Tilt Camera
         </p>
         <p class="text-sm text-gray-500">
          Remote control, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 950.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Pan &amp; Tilt Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Pan &amp; Tilt Camera" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Pan &amp; Tilt Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 950.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Pan &amp; Tilt Camera dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with 4K resolution and night vision in black casing" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/0858eaab-7e47-47fe-ac60-db3571fc53fe.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV 4K Ultra HD Camera
         </p>
         <p class="text-sm text-gray-500">
          Night vision, 4K resolution
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.500.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV 4K Ultra HD Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV 4K Ultra HD Camera" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV 4K Ultra HD Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.500.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV 4K Ultra HD Camera dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
       <td class="py-4 px-4 flex items-center space-x-4">
        <img alt="CCTV Camera with smart AI detection and white casing" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/68189911-8bee-4636-7a76-d50c7630293b.jpg" width="80"/>
        <div>
         <p class="font-semibold text-gray-800">
          CCTV Smart AI Camera
         </p>
         <p class="text-sm text-gray-500">
          AI detection, 1080p
         </p>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-700 font-semibold">
        Rp 1.250.000
       </td>
       <td class="py-4 px-4">
        <div class="flex items-center space-x-2">
         <button aria-label="Kurangi jumlah produk CCTV Smart AI Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-minus">
          </i>
         </button>
         <input aria-label="Jumlah produk CCTV Smart AI Camera" class="w-12 text-center border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" min="1" type="number" value="1"/>
         <button aria-label="Tambah jumlah produk CCTV Smart AI Camera" class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300 text-gray-700">
          <i class="fas fa-plus">
          </i>
         </button>
        </div>
       </td>
       <td class="py-4 px-4 text-gray-900 font-semibold">
        Rp 1.250.000
       </td>
       <td class="py-4 px-4">
        <button aria-label="Hapus produk CCTV Smart AI Camera dari keranjang" class="text-red-600 hover:text-red-800 focus:outline-none">
         <i class="fas fa-trash-alt fa-lg">
         </i>
        </button>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
   <div class="mt-8 max-w-md ml-auto bg-white p-6 rounded-lg shadow-md border border-gray-200">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">
     Ringkasan Pesanan
    </h3>
    <div class="flex justify-between text-gray-700 mb-2">
     <span>
      Subtotal
     </span>
     <span>
      Rp 13.850.000
     </span>
    </div>
    <div class="flex justify-between text-gray-700 mb-2">
     <span>
      Biaya Pengiriman
     </span>
     <span>
      Rp 50.000
     </span>
    </div>
    <div class="border-t border-gray-300 my-3">
    </div>
    <div class="flex justify-between text-lg font-semibold text-gray-900 mb-6">
     <span>
      Total
     </span>
     <span>
      Rp 13.900.000
     </span>
    </div>
    <button aria-label="Lanjut ke pembayaran" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition focus:outline-none focus:ring-4 focus:ring-blue-300">
     Lanjut ke Pembayaran
    </button>
   </div>
  </main>
  <footer class="bg-white border-t border-gray-200 py-6 mt-12">
   <div class="container mx-auto px-4 text-center text-gray-600 text-sm">
    © 2024 CCTV Shop. Semua hak cipta dilindungi.
   </div>
  </footer>
  <script>
   const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
 </body>
</html>

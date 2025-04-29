<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-[Poppins]">
    
<header class="bg-blue-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-8 flex items-center">
        <h1 class="text-3xl font-bold text-gray-100 mb-0 mr-10">View Tech</h1>
        <nav class="flex-1">
            <ul class="flex space-x-6 justify-end">
                <li>
                    <a href="#" class="px-4 py-2 rounded transition duration-200 text-white hover:bg-blue-700 hover:text-yellow-300">Home</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 rounded transition duration-200 text-white hover:bg-blue-700 hover:text-yellow-300">Service</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 rounded transition duration-200 text-white hover:bg-blue-700 hover:text-yellow-300">Product</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 rounded transition duration-200 text-white hover:bg-blue-700 hover:text-yellow-300">Contact</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="px-4 py-2 rounded transition duration-200 text-white hover:bg-blue-700 hover:text-yellow-300">Login</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

    <main class="mt-8">
        <div class="max-w-7xl mx-auto px-4">
            <section class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-semibold text-gray-800">Tentang Kami</h2>
                <p class="mt-2 text-gray-600">Kami adalah tim yang berdedikasi untuk membangun aplikasi web yang inovatif dan responsif menggunakan Laravel dan Tailwind CSS.</p>
            </section>

            <section class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-xl font-bold">Layanan 1</h3>
                    <p class="mt-2 text-gray-600">Deskripsi layanan 1 yang kami tawarkan.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-xl font-bold">Layanan 2</h3>
                    <p class="mt-2 text-gray-600">Deskripsi layanan 2 yang kami tawarkan.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-xl font-bold">Layanan 3</h3>
                    <p class="mt-2 text-gray-600">Deskripsi layanan 3 yang kami tawarkan.</p>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-white shadow mt-8">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center">
            <p class="text-gray-600">© 2025 Proyek Laravel Saya. Semua hak dilindungi.</p>
        </div>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Forgot Password</title>

  <!-- Bootstrap 5 (CDN) -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
  />

  <!-- Tailwind CSS (CDN) -->
  <link 
    href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.7/dist/tailwind.min.css" 
    rel="stylesheet"
  />

  <style>
    /* Ganti URL di bawah dengan path gambar background Anda */
    .bg-forgot {
      background-image: url('/assets/images/gambar.jpg');
      background-size: cover;
      background-position: center;
      background-color: rgba(0, 0, 0, 0.4);
      background-blend-mode: multiply;
    }
  </style>
</head>
<body class="bg-forgot min-h-screen flex items-center justify-center">

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white rounded-lg shadow-lg p-5" style="max-width: 400px; width: 100%;">
      
      <!-- Judul Halaman -->
      <h2 class="text-center mb-4 font-bold text-2xl">Forgot Password ?</h2>

      <!-- Deskripsi -->
      <p class="text-center text-gray-600 mb-4">Please enter your email address</p>

      <!-- ALERT ERROR (jika ada) -->
      <!-- @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif -->

      <!-- FORM LUPA PASSWORD -->
      <form action="{{ route('forgot.password.post') }}" method="POST">
        @csrf

        <!-- Form Email -->
        <div class="mb-3">
          <label for="email" class="form-label text-gray-700">Email address</label>
          <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email"
            placeholder="Enter your email"
            required
          />
        </div>

        <!-- Tombol Recover Password -->
        <div class="mb-3">
          <button 
            class="btn btn-primary w-100 py-2 text-lg font-bold"
            type="submit"
          >
            Recover Password
          </button>
        </div>
      </form>

      <!-- Link Kembali ke Login -->
      <div class="text-center">
        <span class="text-gray-600">Remember Your Account?</span>
        <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">
          Log In
        </a>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS (CDN) -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>
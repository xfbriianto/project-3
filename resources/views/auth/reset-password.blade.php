<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reset Password</title>

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
    /* Ganti URL berikut dengan gambar background Anda */
    .bg-reset {
      background-image: url('https://via.placeholder.com/1600x900');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      /* Overlay warna kebiruan */
      background-color: rgba(0, 59, 131, 0.7);
      background-blend-mode: multiply;
    }
  </style>
</head>
<body class="bg-reset min-h-screen flex items-center justify-center">
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white rounded-lg shadow-lg p-5" style="max-width: 400px; width: 100%;">
      
      <!-- Judul Halaman -->
      <h2 class="text-center mb-3 font-bold text-2xl">Enter New Password ?</h2>
      <p class="text-center text-gray-600 mb-4">
        Enter a new password below to change your password
      </p>

      <!-- ALERT ERROR (jika ada) -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- ALERT SUCCESS (opsional) -->
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <!-- FORM RESET PASSWORD -->
      <form action="{{ route('reset.password.post') }}" method="POST">
        @csrf

        <!-- Input Password -->
        <div class="mb-3">
          <label for="password" class="form-label text-gray-700">Password</label>
          <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password"
            placeholder="Enter your new password"
            required
          />
        </div>

        <!-- Input Confirm Password -->
        <div class="mb-4">
          <label for="password_confirmation" class="form-label text-gray-700">Confirm Password</label>
          <input 
            type="password" 
            class="form-control" 
            id="password_confirmation" 
            name="password_confirmation"
            placeholder="Enter your password again"
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

    </div> <!-- End Card -->
  </div> <!-- End Container -->

  <!-- Bootstrap JS (CDN) -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>

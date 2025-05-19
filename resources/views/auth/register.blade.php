<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - CCTV Web</title>

  <!-- Bootstrap CSS (CDN) -->
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
    .bg-login {
      background-image: url('https://via.placeholder.com/1600x900');
      background-size: cover;
      background-position: center;
      background-color: rgba(0, 0, 0, 0.4);
      background-blend-mode: multiply;
    }
  </style>
</head>
<body class="bg-login min-h-screen flex items-center justify-center">
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white rounded-lg shadow-lg p-5" style="max-width: 400px; width: 100%;">
      
      <!-- Judul Halaman -->
      <h2 class="text-center mb-4 font-bold text-2xl">Create an account</h2>

     

      <!-- FORM REGISTER -->
      <form action="{{ route('register.post') }}" method="POST">
        @csrf
        
        <!-- Form Nama Lengkap -->
        <div class="mb-3">
          <label for="name" class="form-label text-gray-700">Nama lengkap</label>
          <input 
            type="text" 
            class="form-control" 
            id="name"
            name="name" 
            placeholder="example"
            required
          />
        </div>

        <!-- Form Email -->
        <div class="mb-3">
          <label for="email" class="form-label text-gray-700">Email</label>
          <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email"
            placeholder="example@gmail.com"
            required
          />
        </div>

        <!-- Form Password + Forgot? -->
        <div class="mb-3">
          <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label text-gray-700">Password</label>
            <a href="#" class="text-blue-600 text-sm hover:underline">Forgot?</a>
          </div>
          <input 
            type="password" 
            class="form-control" 
            id="password"
            name="password" 
            placeholder="Enter your password"
            required
          />
        </div>

        <!-- Form Confirm Password -->
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

        <!-- Tombol Create account -->
        <div class="mb-3">
          <button 
            class="btn btn-primary w-100 py-2 text-lg font-bold"
            type="submit"
          >
            Create account
          </button>
        </div>
      </form>
      <!-- END FORM REGISTER -->

      <!-- Sudah punya akun? Log in -->
      <div class="text-center">
        <span class="text-gray-600">Already Have An Account?</span>
        <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">
          Log In
        </a>
      </div>

    </div> <!-- End Card -->
  </div> <!-- End Container -->

  <!-- Bootstrap JS (CDN) -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>
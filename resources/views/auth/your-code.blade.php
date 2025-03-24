<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Get Your Code</title>

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
    /* Background + Overlay (sesuaikan dengan gambar Anda) */
    .bg-code {
      background-image: url('https://via.placeholder.com/1600x900');
      background-size: cover;
      background-position: center;
      /* Overlay kebiruan */
      background-color: rgba(0, 59, 131, 0.7);
      background-blend-mode: multiply;
    }

    /* Styling khusus untuk 4 kotak input OTP */
    .otp-input {
      width: 60px;
      height: 60px;
      font-size: 24px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-right: 10px;
      outline: none;
      transition: border-color 0.2s;
    }

    .otp-input:focus {
      border-color: #0d6efd; /* Biru bootstrap */
      box-shadow: 0 0 0 2px rgba(13,110,253,0.25); /* Glow */
    }
  </style>
</head>
<body class="bg-code min-h-screen flex items-center justify-center">
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white rounded-lg shadow-lg p-5" style="max-width: 400px; width: 100%;">
      <!-- Judul Halaman -->
      <h2 class="text-center mb-3 font-bold text-2xl">Welcome back</h2>
      <h4 class="text-center mb-4 text-xl">Get Your Code</h4>

      <!-- Deskripsi -->
      <p class="text-center text-gray-600 mb-4">
        Please enter the 4-digit code that send to your email address
      </p>

      <!-- FORM GET CODE -->
      <form action="#" method="POST" class="mb-3">
        <!-- @csrf (Jika di Laravel) -->

        <!-- Bagian Input OTP (4 digit) -->
        <div class="d-flex justify-content-center mb-4">
          <input 
            type="text" 
            maxlength="1" 
            class="otp-input" 
            name="otp1" 
            required
          />
          <input 
            type="text" 
            maxlength="1" 
            class="otp-input" 
            name="otp2" 
            required
          />
          <input 
            type="text" 
            maxlength="1" 
            class="otp-input" 
            name="otp3" 
            required
          />
          <input 
            type="text" 
            maxlength="1" 
            class="otp-input" 
            name="otp4" 
            required
          />
        </div>

        <!-- Tombol Verify -->
        <div class="mb-3">
          <button 
            class="btn btn-primary w-100 py-2 text-lg font-bold"
            type="submit"
          >
            Verify
          </button>
        </div>
      </form>

      <!-- Tombol Generate Again -->
      <div class="mb-3">
        <button 
          class="btn btn-outline-secondary w-100 py-2 text-lg font-bold"
          type="button"
        >
          Generate Again
        </button>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS (CDN) -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>

  <!-- (Opsional) Script untuk memindahkan fokus antar input OTP -->
  <script>
    const otpInputs = document.querySelectorAll('.otp-input');
    otpInputs.forEach((input, index) => {
      input.addEventListener('input', () => {
        if (input.value.length === 1 && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });
      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && index > 0) {
          otpInputs[index - 1].focus();
        }
      });
    });
  </script>
</body>
</html>

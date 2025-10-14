<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password Braille</title>

  <!-- Font Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  @vite('resources/css/app.css')

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .input-error {
      border-color: #dc2626;
    }
    .error-text {
      color: #dc2626;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: none;
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- NAVBAR -->
  <nav class="bg-[#F1EFEC] w-full fixed top-0 left-0 z-50 shadow-sm py-5 flex justify-center items-center">
    <h1 class="text-2xl font-semibold text-[#05284C]">Braille Logo</h1>
  </nav>

  <!-- HERO / FORGOT PASSWORD SECTION -->
  <section class="flex flex-col items-center justify-center w-full flex-grow pt-[100px] pb-[150px] bg-[#05284C]">
    <div class="bg-[#F1EFEC] rounded-[2rem] shadow-xl w-[95%] max-w-[70rem] px-16 py-12 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-3">Forgot Password?</h2>
      <p class="text-gray-700 mb-6 text-base md:text-lg">Please enter your email address to reset your password.</p>

      <form id="forgotForm" class="space-y-5 text-left">
        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-800 mb-1 font-medium">Email</label>
          <div class="relative">
            <input type="email" id="email" name="email" placeholder="Enter your email..."
              class="w-full border border-gray-300 rounded-xl py-2 px-4 pr-10 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
            <!-- Icon Amplop Email -->
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-2.5 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <p id="emailError" class="error-text">Email wajib diisi</p>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-black text-white rounded-xl py-2 mt-3 hover:bg-gray-800 transition">
          Reset Password
        </button>
      </form>
    </div>
  </section>

  <script>
    const form = document.querySelector('#forgotForm');
    const email = document.querySelector('#email');
    const emailError = document.querySelector('#emailError');

    form.addEventListener('submit', (e) => {
      e.preventDefault(); // cegah submit default
      let valid = true;

      // Reset error
      emailError.style.display = 'none';
      email.classList.remove('input-error');

      if (!email.value) {
        emailError.style.display = 'block';
        email.classList.add('input-error');
        valid = false;
      }

      // Jika valid, redirect ke halaman verifikasi kode
      if (valid) {
        window.location.href = '/verifikasicode';
      }
    });
  </script>

</body>
</html>

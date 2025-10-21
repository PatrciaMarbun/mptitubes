<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Braille</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
<style>
body { font-family: 'Inter', sans-serif; }
.input-error { border-color: #dc2626; }
.error-text { color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: none; }
</style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

<nav class="bg-[#F1EFEC] w-full fixed top-0 left-0 z-50 shadow-sm py-5 flex justify-center items-center">
<img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
</nav>

<section id="register" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
<div class="bg-[#F1EFEC] rounded-[2rem] shadow-xl w-[90%] max-w-[60rem] p-10 text-center">
<h2 class="text-3xl font-bold mb-2">Register</h2>
<form id="registerForm" class="space-y-5 text-left">
@csrf
<div>
<label for="username" class="block text-gray-800 mb-1">Enter your name</label>
<input type="text" id="username" name="username" placeholder="Enter your name..." class="w-full border border-gray-300 rounded-xl py-2 px-4 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<p id="usernameError" class="error-text">Nama wajib diisi</p>
</div>
<div>
<label for="email" class="block text-gray-800 mb-1">Enter your email</label>
<input type="email" id="email" name="email" placeholder="Enter your email..." class="w-full border border-gray-300 rounded-xl py-2 px-4 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<p id="emailError" class="error-text">Email wajib diisi</p>
</div>
<div>
<label for="phone" class="block text-gray-800 mb-1">Enter your username</label>
<input type="text" id="phone" name="phone" placeholder="Enter your username..." class="w-full border border-gray-300 rounded-xl py-2 px-4 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<p id="phoneError" class="error-text">Username wajib diisi</p>
</div>
<div>
<label for="password" class="block text-gray-800 mb-1">Create a password</label>
<div class="relative">
<input type="password" id="password" name="password" placeholder="Create a password..." class="w-full border border-gray-300 rounded-xl py-2 px-4 pr-10 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-2.5 h-5 w-5 text-gray-500 cursor-pointer transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.38 1.224-.983 2.377-1.775 3.398A10.041 10.041 0 0112 19c-4.477 0-8.268-2.943-9.542-7z" />
</svg>
</div>
<p id="passwordError" class="error-text">Password wajib diisi</p>
</div>
<div>
<label for="confirm_password" class="block text-gray-800 mb-1">Confirm password</label>
<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password..." class="w-full border border-gray-300 rounded-xl py-2 px-4 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<p id="confirmPasswordError" class="error-text">Konfirmasi password wajib diisi</p>
</div>
<div class="flex items-center gap-2 mt-2">
<input type="checkbox" id="terms" name="terms" class="h-4 w-4 border-gray-300 rounded">
<label for="terms" class="text-gray-800 text-sm">I accept all terms & conditions</label>
<p id="termsError" class="error-text">Harus menyetujui terms & conditions</p>
</div>
<button type="submit" class="w-full bg-black text-white rounded-xl py-2 mt-3 hover:bg-gray-800 transition">Register</button>
</form>
<p class="text-sm text-gray-700 mt-6">Already have an account? <a href="/login" class="text-blue-600 font-medium hover:underline">Login</a></p>
</div>
</section>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const form = document.querySelector('#registerForm');

    togglePassword.addEventListener('click', () => {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      togglePassword.classList.toggle('text-blue-500');
    });

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      let valid = true;

      // Reset semua error
      ['username', 'email', 'phone', 'password', 'confirm_password', 'terms'].forEach(id => {
        const input = document.getElementById(id);
        const error = document.getElementById(id+'Error');
        if(input) input.classList.remove('input-error');
        if(error) error.style.display = 'none';
      });

      // Validasi field
      if(!document.getElementById('username').value) {
        document.getElementById('usernameError').style.display = 'block';
        document.getElementById('username').classList.add('input-error');
        valid = false;
      }
      if(!document.getElementById('email').value) {
        document.getElementById('emailError').style.display = 'block';
        document.getElementById('email').classList.add('input-error');
        valid = false;
      }
      if(!document.getElementById('phone').value) {
        document.getElementById('phoneError').style.display = 'block';
        document.getElementById('phone').classList.add('input-error');
        valid = false;
      }
      if(!document.getElementById('password').value) {
        document.getElementById('passwordError').style.display = 'block';
        document.getElementById('password').classList.add('input-error');
        valid = false;
      }
      if(!document.getElementById('confirm_password').value) {
        document.getElementById('confirmPasswordError').style.display = 'block';
        document.getElementById('confirm_password').classList.add('input-error');
        valid = false;
      }
      if(!document.getElementById('terms').checked) {
        document.getElementById('termsError').style.display = 'block';
        valid = false;
      }

      // Redirect jika valid
      if(valid){
        window.location.href = '/login';
      }
    });
  </script>

</body>
</html>

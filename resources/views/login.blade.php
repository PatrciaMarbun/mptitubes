<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Braille</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
<style>
body { font-family: 'Inter', sans-serif; }
.input-error { border-color: #dc2626; }
.error-text { color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; }
</style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

<nav class="bg-[#F1EFEC] w-full fixed top-0 left-0 z-50 shadow-sm py-4 flex justify-center items-center">
<img src="images/logo.png" alt="Braille Logo" class="h-10 md:h-12">
</nav>

<section id="login" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
<div class="bg-[#F1EFEC] rounded-[2rem] shadow-xl w-[95%] max-w-[70rem] px-16 py-12 text-center">
<h2 class="text-3xl md:text-4xl font-bold mb-3">Login</h2>
<p class="text-gray-700 mb-6 text-base md:text-lg">Please login to your account</p>

<form id="loginForm" class="space-y-5 text-left">
<div>
<label for="email" class="block text-gray-800 mb-1 font-medium">Email</label>
<div class="relative">
<input type="email" id="email" name="email" placeholder="Enter your email" class="w-full border border-gray-300 rounded-xl py-2 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
</div>
</div>

<div>
<label for="password" class="block text-gray-800 mb-1 font-medium">Password</label>
<div class="relative">
<input type="password" id="password" name="password" placeholder="Enter your password" class="w-full border border-gray-300 rounded-xl py-2 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
<svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-2.5 h-5 w-5 text-gray-500 cursor-pointer transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.38 1.224-.983 2.377-1.775 3.398A10.041 10.041 0 0112 19c-4.477 0-8.268-2.943-9.542-7z" />
</svg>
</div>
</div>

<div class="flex items-center justify-between text-sm">
<label class="flex items-center gap-2">
<input type="checkbox" class="h-4 w-4 border-gray-300 rounded"> Remember me
</label>
<a href="/login/forgotpassword" class="text-blue-600 hover:underline">Forgot password?</a>
</div>

<button type="submit" class="w-full bg-black text-white rounded-xl py-2 mt-3 hover:bg-gray-800 transition">Login</button>
</form>

<p class="text-sm text-gray-700 mt-6 text-center">
don’t have an account? <a href="/register" class="text-blue-600 font-medium hover:underline">register</a>
</p>
</div>
</section>

<script>
const form = document.querySelector('#loginForm');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const togglePassword = document.querySelector('#togglePassword');

togglePassword.addEventListener('click', () => {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    togglePassword.classList.toggle('text-blue-500');
});

form.addEventListener('submit', (e) => {
    e.preventDefault();
    let valid = true;
    document.querySelectorAll('.error-text').forEach(el => el.remove());
    email.classList.remove('input-error');
    password.classList.remove('input-error');
    if (!email.value) {
        const error = document.createElement('p');
        error.textContent = 'Email wajib diisi';
        error.classList.add('error-text');
        email.classList.add('input-error');
        email.parentNode.appendChild(error);
        valid = false;
    }
    if (!password.value) {
        const error = document.createElement('p');
        error.textContent = 'Password wajib diisi';
        error.classList.add('error-text');
        password.classList.add('input-error');
        password.parentNode.appendChild(error);
        valid = false;
    }
    if (valid) {
        window.location.href = '/home';
    }
});
</script>

</body>
</html>

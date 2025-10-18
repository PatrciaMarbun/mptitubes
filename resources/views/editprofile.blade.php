<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>

  <!-- Font Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .input-error { border-color: red; }
    .error-text {
      color: red;
      font-size: 0.8rem;
      display: none; /* sembunyikan default */
      margin-top: 0.25rem;
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- Navbar Desktop -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 justify-between items-center fixed top-0 left-0 z-50">
    <h1 class="text-xl font-semibold text-[#05284C]">Braille Logo</h1>
    <div class="flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
      </a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi
      </a>
      <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="play" class="w-5 h-5"></i>Audiobook
      </a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="edit" class="w-5 h-5"></i>Artikel
      </a>
      <a href="/profile" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]">
        <i data-lucide="user" class="w-5 h-5"></i>Profile
      </a>
    </div>
  </nav>

  <!-- Navbar Mobile -->
  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <h1 class="text-lg font-semibold text-[#05284C]">Braille Logo</h1>
    <a href="/profile" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
      <i data-lucide="user" class="w-5 h-5"></i>
    </a>
  </nav>

  <!-- Main Profile Section -->
  <main class="flex flex-1 justify-center items-center pt-[120px] pb-10 px-4">
    <div class="bg-[#F1EFEC] rounded-[30px] w-full max-w-4xl p-10 flex flex-col items-center shadow-lg transition-all duration-300">
      <div class="bg-white rounded-full p-4 mb-3 shadow">
        <i data-lucide="user" class="w-8 h-8 text-black"></i>
      </div>
      <div class="flex items-center gap-2 mb-8">
        <p class="text-xl font-semibold text-black">Edit Your Profile</p>
      </div>
      <form id="profileForm" class="w-full flex flex-col space-y-4">
        <div>
          <label class="block text-black text-sm font-medium mb-1">Username</label>
          <input type="text" id="username" placeholder="Masukkan username..." 
            class="w-full bg-white rounded-lg py-2.5 px-3 text-black text-sm font-medium placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <p class="error-text">Username wajib diisi</p>
        </div>
        <div>
          <label class="block text-black text-sm font-medium mb-1">Email</label>
          <input type="text" id="email" placeholder="Masukkan email..." 
            class="w-full bg-white rounded-lg py-2.5 px-3 text-black text-sm font-medium placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <p class="error-text">Email wajib diisi</p>
        </div>

        <div>
          <label class="block text-black text-sm font-medium mb-1">Phone Number</label>
          <input type="text" id="phone" placeholder="Masukkan nomor telepon..." 
            class="w-full bg-white rounded-lg py-2.5 px-3 text-black text-sm font-medium placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <p class="error-text">Nomor telepon wajib diisi</p>
        </div>

        <div>
          <label class="block text-black text-sm font-medium mb-1">Password</label>
          <input type="password" id="password" placeholder="Masukkan password..." 
            class="w-full bg-white rounded-lg py-2.5 px-3 text-black text-sm font-medium placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <p class="error-text">Password wajib diisi</p>
        </div>

        <button type="submit" class="w-full bg-black rounded-lg py-2.5 px-3 text-white text-center font-medium cursor-pointer hover:bg-gray-800 transition">
          Update
        </button>

      </form>

    </div>
  </main>

  <!-- Bottom Navigation Bar (Mobile Only) -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]">
      <i data-lucide="arrow-left-right" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Terjemahkan</span>
    </a>
    <a href="/komunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]">
      <i data-lucide="book-text" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Komunitas</span>
    </a>
    <a href="/resmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]">
      <i data-lucide="book-open" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Buku Resmi</span>
    </a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]">
      <i data-lucide="play" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Audiobook</span>
    </a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]">
      <i data-lucide="edit" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Artikel</span>
    </a>
  </div>

  <!-- Script Icon + Validasi -->
  <script>
  lucide.createIcons();

  const form = document.getElementById('profileForm');

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    let valid = true;

    const fields = ['username','email','phone','password'];

    fields.forEach(id => {
      const input = document.getElementById(id);
      const error = input.nextElementSibling;

      if (!input.value.trim()) {
        error.style.display = 'block'; // tampilkan error
        input.classList.add('input-error');
        valid = false;
      } else {
        error.style.display = 'none'; // sembunyikan jika diisi
        input.classList.remove('input-error');
      }
    });

    if(valid){
      window.location.href = '/profile'; // arahkan setelah valid
    }
  });
</script>


</body>
</html>

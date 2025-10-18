<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Baca</title>

  <!-- Font Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- Navbar Desktop -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 justify-between items-center fixed top-0 left-0 z-50">
    <h1 class="text-xl font-semibold text-[#05284C]">Braille Logo</h1>
    <div class="flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2  hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
      </a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi
      </a>
      <a href="/audiobook" class="flex items-center gap-2  hover:text-[#05284C]">
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
 {{-- Hero Section --}}
<section id="hero-bukuresmi" class="flex justify-center items-start px-6 md:px-10 pt-[100px]">
  <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg">

    {{-- Teks + Search di atas grid --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 md:mb-0">Riwayat Baca</h2>
      
      {{-- Search bar --}}
      <div class="flex items-center bg-white rounded-full px-3 py-1 shadow-sm w-full md:w-64">
        <i data-lucide="search" class="w-5 h-5 text-gray-400 mr-2"></i>
        <input type="text" placeholder="Cari buku..." class="w-full text-sm text-gray-700 outline-none bg-transparent">
      </div>
    </div>

    {{-- Grid kartu --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach(range(1,3) as $item)
      <div class="bg-white rounded-2xl shadow p-4 flex flex-col">

        {{-- Header kotak --}}
        <div class="flex justify-between items-start mb-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-semibold">A</div>
            <div>
              <p class="text-sm font-semibold text-gray-700">Header</p>
              <p class="text-xs text-gray-500">Subhead</p>
            </div>
          </div>
          <div>
            <i data-lucide="more-vertical" class="w-5 h-5 text-gray-400"></i>
          </div>
        </div>

        {{-- Ilustrasi kotak --}}
        <div class="flex justify-center items-center h-32 bg-gray-100 rounded mb-4">
          <div class="w-12 h-12 bg-gray-300"></div>
          <div class="w-8 h-8 bg-gray-400 ml-2"></div>
          <div class="w-6 h-6 bg-gray-500 ml-2"></div>
        </div>

        <h3 class="font-semibold text-lg mb-1">Title</h3>
        <p class="text-sm text-gray-500 mb-2">Subtitle</p>
        <p class="text-sm text-gray-700 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

        <div class="mt-4 flex justify-end gap-2">
          <button class="border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">Secondary</button>
          <button class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm">Primary</button>
        </div>

      </div>
      @endforeach
    </div>
  </div>
</section>

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

  <script>
    lucide.createIcons();

    // Toggle menu mobile
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>

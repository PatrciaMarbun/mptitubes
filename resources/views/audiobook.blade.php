<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Komunitas</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .desktop-dropdown, .mobile-dropdown {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: #F1EFEC;
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 8px 0;
      min-width: 150px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      display: none;
      z-index: 1000;
    }
    .desktop-dropdown a, .mobile-dropdown a {
      display: block;
      padding: 8px 16px;
      text-decoration: none;
      color: #05284C;
      font-size: 14px;
    }
    .desktop-dropdown a:hover, .mobile-dropdown a:hover { background-color: #D4C9BE; color: #05284C; }
    .desktop-dropdown a.logout, .mobile-dropdown a.logout { color: #FF0000; }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- Navbar Desktop -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 fixed top-0 left-0 z-50">
    <div class="flex items-center w-full max-w-7xl mx-auto px-16 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <div class="flex flex-1 justify-evenly items-center whitespace-nowrap">
        <a href="/bukukomunitas" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
        </a>
        <a href="/bukuresmi" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi
        </a>
        <a href="/audiobook" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full  hover:text-[#05284C]">
          <i data-lucide="play" class="w-5 h-5"></i>Audiobook
        </a>
        <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="edit" class="w-5 h-5"></i>Artikel
        </a>
        <a href="/bagikankarya" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="share-2" class="w-5 h-5"></i>Bagikan Karya
        </a>
      </div>
      <div class="relative">
        <a href="javascript:void(0)" id="desktopMenuBtn" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </a>
        <div id="desktopMenuDropdown" class="desktop-dropdown">
          <a href="#" class="flex flex-col items-center justify-center px-4 py-4 border-b border-gray-300 hover:bg-gray-100">
            <i data-lucide="user" class="w-5 h-5 text-gray-800"></i>
            <span class="text-gray-800 font-semibold mt-1">Nama Pengguna</span>
          </a>
          <a href="/riwayatbaca">Riwayat Baca</a>
          <a href="/riwayatunduh">Riwayat Unduh</a>
          <a href="/karyasaya">Karya Saya</a>
          <a href="/editprofile">Edit Profile</a>
          <a href="/login" class="logout">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar Mobile -->
  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <a href="/" class="flex items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Braille Logo" class="h-8 w-auto">
    </a>
    <div class="relative">
      <button id="mobileMenuBtn" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
        <i data-lucide="menu" class="w-5 h-5"></i>
      </button>
      <div id="mobileMenuDropdown" class="mobile-dropdown">
        <a href="#" class="flex flex-col items-center justify-center px-4 py-3 border-b border-gray-200 hover:bg-gray-100">
          <i data-lucide="user" class="w-5 h-5 text-gray-800"></i>
          <span class="text-gray-800 font-semibold mt-1">Nama Pengguna</span>
        </a>
        <a href="/riwayatbaca">Riwayat Baca</a>
        <a href="/riwayatunduh">Riwayat Unduh</a>
        <a href="/karyasaya">Karya Saya</a>
        <a href="/editprofile">Edit Profile</a>
        <a href="/login" class="logout">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Section Audiobook -->
  <section id="audiobook" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 md:mb-0">Audiobook</h2>
        <div class="flex items-center bg-white rounded-full px-3 py-1 shadow-sm w-full md:w-64">
          <i data-lucide="search" class="w-5 h-5 text-gray-400 mr-2"></i>
          <input type="text" placeholder="Cari buku..." class="w-full text-sm text-gray-700 outline-none bg-transparent">
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <!-- Card A -->
  <div class="bg-white rounded-2xl shadow p-4 flex flex-col hover:shadow-lg transition cursor-pointer">
    <a href="/audiobook/detail" class="block">
      <div class="flex justify-between items-start mb-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-semibold">A</div>
          <div>
            <p class="text-sm font-semibold text-gray-700">Header</p>
            <p class="text-xs text-gray-500">Subhead</p>
          </div>
        </div>
        <i data-lucide="more-vertical" class="w-5 h-5 text-gray-400"></i>
      </div>
      <div class="flex justify-center items-center h-32 bg-gray-100 rounded mb-4">
        <div class="w-12 h-12 bg-gray-300"></div>
        <div class="w-8 h-8 bg-gray-400 ml-2"></div>
        <div class="w-6 h-6 bg-gray-500 ml-2"></div>
      </div>
      <h3 class="font-semibold text-lg mb-1">Title A</h3>
      <p class="text-sm text-gray-500 mb-2">Subtitle A</p>
      <p class="text-sm text-gray-700 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    </a>
    <div class="mt-4 flex justify-end gap-2">
      <button class="border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">Secondary</button>
      <a href="#" class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm hover:bg-purple-700 transition">Primary</a>
    </div>
  </div>

  <!-- Card B -->
  <div class="bg-white rounded-2xl shadow p-4 flex flex-col hover:shadow-lg transition cursor-pointer">
    <a href="/audiobook/detail" class="block">
      <div class="flex justify-between items-start mb-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-semibold">B</div>
          <div>
            <p class="text-sm font-semibold text-gray-700">Header</p>
            <p class="text-xs text-gray-500">Subhead</p>
          </div>
        </div>
        <i data-lucide="more-vertical" class="w-5 h-5 text-gray-400"></i>
      </div>
      <div class="flex justify-center items-center h-32 bg-gray-100 rounded mb-4">
        <div class="w-12 h-12 bg-gray-300"></div>
        <div class="w-8 h-8 bg-gray-400 ml-2"></div>
        <div class="w-6 h-6 bg-gray-500 ml-2"></div>
      </div>
      <h3 class="font-semibold text-lg mb-1">Title B</h3>
      <p class="text-sm text-gray-500 mb-2">Subtitle B</p>
      <p class="text-sm text-gray-700 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    </a>
    <div class="mt-4 flex justify-end gap-2">
      <button class="border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">Secondary</button>
      <a href="#" class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm hover:bg-purple-700 transition">Primary</a>
    </div>
  </div>

  <!-- Card C -->
  <div class="bg-white rounded-2xl shadow p-4 flex flex-col hover:shadow-lg transition cursor-pointer">
    <a href="/audiobook/detail" class="block">
      <div class="flex justify-between items-start mb-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-semibold">C</div>
          <div>
            <p class="text-sm font-semibold text-gray-700">Header</p>
            <p class="text-xs text-gray-500">Subhead</p>
          </div>
        </div>
        <i data-lucide="more-vertical" class="w-5 h-5 text-gray-400"></i>
      </div>
      <div class="flex justify-center items-center h-32 bg-gray-100 rounded mb-4">
        <div class="w-12 h-12 bg-gray-300"></div>
        <div class="w-8 h-8 bg-gray-400 ml-2"></div>
        <div class="w-6 h-6 bg-gray-500 ml-2"></div>
      </div>
      <h3 class="font-semibold text-lg mb-1">Title C</h3>
      <p class="text-sm text-gray-500 mb-2">Subtitle C</p>
      <p class="text-sm text-gray-700 flex-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    </a>
    <div class="mt-4 flex justify-end gap-2">
      <button class="border border-gray-300 rounded-full px-3 py-1 text-sm text-gray-700">Secondary</button>
      <a href="#" class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm hover:bg-purple-700 transition">Primary</a>
    </div>
  </div>
</div>
  </section>

  <!-- Bottom Navbar Mobile -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span>
    </a>
    <a href="/bukukomunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Komunitas</span>
    </a>
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span>
    </a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md bg-[#D4C9BE]">
      <i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span>
    </a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span>
    </a>
    <a href="/bagikankarya" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md">
      <i data-lucide="share-2" class="w-6 h-6"></i><span class="text-xs mt-1">Bagikan Karya</span>
    </a>
  </div>

  <script>
    lucide.createIcons();

    const desktopBtn = document.getElementById('desktopMenuBtn');
    const desktopDropdown = document.getElementById('desktopMenuDropdown');
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileDropdown = document.getElementById('mobileMenuDropdown');

    desktopBtn.addEventListener('click', () => {
      desktopDropdown.style.display = desktopDropdown.style.display === 'block' ? 'none' : 'block';
    });

    mobileBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
      if (!desktopBtn.contains(e.target) && !desktopDropdown.contains(e.target)) {
        desktopDropdown.style.display = 'none';
      }
      if (!mobileBtn.contains(e.target) && !mobileDropdown.contains(e.target)) {
        mobileDropdown.style.display = 'none';
      }
    });
  </script>
</body>
</html>

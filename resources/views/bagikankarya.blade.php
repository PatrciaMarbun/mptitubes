<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bagikan Karya</title>
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
    .relative { position: relative; }
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
        <a href="/bukuresmi" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]">
          <i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi
        </a>
        <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]">
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
        <button id="desktopMenuBtn" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </button>
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

  <!-- Konten Bagikan Karya -->
  <section id="bagikankarya" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-5xl p-16 text-center shadow-lg">
      <h2 class="text-4xl font-extrabold text-[#000] mb-6">Bagikan Karya</h2>
      <p class="text-2xl text-[#000] font-medium mb-10">“Karya kecilmu bisa jadi inspirasi besar bagi orang lain.”</p>
      <div class="flex justify-center gap-6">
        <a href="/bagikankarya/tuliskarya" class="bg-black text-white px-8 py-3 rounded-xl text-lg hover:bg-[#333]">Tulis Karya</a>
        <a href="/bagikankarya/uploadkarya" class="bg-black text-white px-8 py-3 rounded-xl text-lg hover:bg-[#333]">Upload Karya</a>
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
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md ">
      <i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span>
    </a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span>
    </a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span>
    </a>
    <a href="/bagikankarya" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md bg-[#D4C9BE]">
      <i data-lucide="share-2" class="w-6 h-6"></i><span class="text-xs mt-1">Bagikan Karya</span>
    </a>
  </div>

  <!-- Script Lucide & Dropdown -->
  <script>
    lucide.createIcons();

    const desktopBtn = document.getElementById('desktopMenuBtn');
    const desktopDropdown = document.getElementById('desktopMenuDropdown');
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileDropdown = document.getElementById('mobileMenuDropdown');

    // Desktop Dropdown
    desktopBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      desktopDropdown.style.display = desktopDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Mobile Dropdown
    mobileBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Close dropdown if click outside
    document.addEventListener('click', () => {
      desktopDropdown.style.display = 'none';
      mobileDropdown.style.display = 'none';
    });
  </script>

</body>
</html>

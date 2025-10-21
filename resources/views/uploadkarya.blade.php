<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Karya</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }

    /* Dropdown Desktop & Mobile */
    .dropdown {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: #F1EFEC;
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 0;
      min-width: 180px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      display: none;
      z-index: 1000;
    }
    .dropdown a {
      display: block;
      padding: 8px 16px;
      text-decoration: none;
      color: #05284C;
      font-size: 14px;
    }
    .dropdown a:hover { background-color: #D4C9BE; color: #05284C; }
    .dropdown a.logout { color: #FF0000 !important; }

    input, textarea {
      background-color: #FFFFFF;
      color: #000;
      border: 1px solid #ccc;
      border-radius: 10px;
      transition: border-color 0.2s ease-in-out;
    }
    input:focus, textarea:focus {
      outline: none;
      border-color: #05284C;
      box-shadow: 0 0 0 2px rgba(5, 40, 76, 0.2);
    }
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
        <a href="/bukukomunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
        <a href="/bukuresmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
        <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
        <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
        <a href="/bagikankarya" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="share-2" class="w-5 h-5"></i>Bagikan Karya</a>
      </div>
      <div class="relative">
        <a href="javascript:void(0)" id="desktopMenuBtn" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </a>
        <div id="desktopDropdown" class="dropdown">
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
    <a href="/" class="flex items-center gap-2">
      <img src="{{ asset('images/logo.png') }}" alt="Braille Logo" class="h-9 w-auto">
    </a>
    <div class="relative">
      <button id="mobileMenuBtn" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
        <i data-lucide="menu" class="w-5 h-5"></i>
      </button>
      <div id="mobileDropdown" class="dropdown">
        <a href="#" class="flex flex-col items-center justify-center px-4 py-4 border-b border-gray-200 hover:bg-gray-100">
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

  <!-- Konten Upload Karya -->
  <section id="tuliskarya" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-14 shadow-lg flex flex-col">
      <div class="mb-10">
        <h2 class="text-4xl font-extrabold text-[#000]">Bagikan Karya</h2>
        <p class="text-2xl font-semibold text-[#000] mt-1">Tulis Karya</p>
      </div>

      <form class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col gap-5">
          <div>
            <label class="block text-gray-700 text-sm mb-2">Nama penulis</label>
            <input type="text" class="w-full p-3" />
          </div>
          <div>
            <label class="block text-gray-700 text-sm mb-2">Judul buku</label>
            <input type="text" class="w-full p-3" />
          </div>
          <div>
            <label class="block text-gray-700 text-sm mb-2">Tema buku</label>
            <input type="text" class="w-full p-3" />
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div>
            <label class="block text-gray-700 text-sm mb-2">Sinopsis</label>
            <textarea rows="5" class="w-full p-3 resize-none"></textarea>
          </div>
          <div>
            <label class="block text-gray-700 text-sm mb-2">Masukkan file</label>
            <div class="relative">
              <input type="file" class="w-full p-3 pl-10 border border-gray-300 rounded-lg bg-white text-gray-800 cursor-pointer" />
              <i data-lucide="upload" class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>
            </div>
          </div>
        </div>
      </form>

      <div class="flex justify-end mt-10">
        <a href="#" class="flex items-center gap-2 text-gray-800 font-semibold hover:text-[#05284C] transition">Upload <i data-lucide="arrow-right" class="w-5 h-5"></i></a>
      </div>
    </div>
  </section>

  <!-- Bottom Navbar Mobile -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span></a>
    <a href="/bukukomunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Komunitas</span></a>
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span></a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span></a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span></a>
    <a href="/bagikankarya" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md" style="background-color: #D4C9BE;"><i data-lucide="share-2" class="w-6 h-6"></i><span class="text-xs mt-1">Bagikan Karya</span></a>

  <script>
    lucide.createIcons();

    // Desktop dropdown
    const desktopBtn = document.getElementById('desktopMenuBtn');
    const desktopDropdown = document.getElementById('desktopDropdown');
    desktopBtn.addEventListener('click', e => {
      e.stopPropagation();
      desktopDropdown.style.display = desktopDropdown.style.display === 'block' ? 'none' : 'block';
    });
    window.addEventListener('click', e => {
      if (!desktopBtn.contains(e.target) && !desktopDropdown.contains(e.target)) desktopDropdown.style.display = 'none';
    });

    // Mobile dropdown
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileDropdown = document.getElementById('mobileDropdown');
    if (mobileBtn) {
      mobileBtn.addEventListener('click', e => {
        e.stopPropagation();
        mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
      });
    }
    window.addEventListener('click', e => {
      if (mobileDropdown && !mobileBtn.contains(e.target) && !mobileDropdown.contains(e.target)) mobileDropdown.style.display = 'none';
    });
  </script>
</body>
</html>

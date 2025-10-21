<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Komunitas Detail</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .desktop-dropdown, .mobile-dropdown {
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
    .desktop-dropdown a:hover, .mobile-dropdown a:hover {
      background-color: #D4C9BE;
    }
    .desktop-dropdown a.logout, .mobile-dropdown a.logout {
      color: #FF0000;
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- NAVBAR DESKTOP -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 fixed top-0 left-0 z-50">
    <div class="flex items-center w-full max-w-7xl mx-auto px-16 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <div class="flex flex-1 justify-evenly items-center whitespace-nowrap">
        <a href="/bukukomunitas" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
        </a>
        <a href="/bukuresmi" class="flex items-center gap-2  bg-[#D4C9BE] px-5 py-2 rounded-full  hover:text-[#05284C]">
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
        <div id="desktopMenuDropdown" class="desktop-dropdown absolute top-full right-0 mt-2 rounded-lg shadow-lg">
          <a href="#" class="flex flex-col items-center justify-center px-4 py-4 border-b border-gray-300">
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

  <!-- NAVBAR MOBILE -->
  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <a href="/" class="flex items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Braille Logo" class="h-8 w-auto">
    </a>
    <div class="relative">
      <button id="mobileMenuBtn" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
        <i data-lucide="menu" class="w-5 h-5"></i>
      </button>
      <div id="mobileMenuDropdown" class="mobile-dropdown absolute top-full right-0 mt-2 rounded-lg shadow-lg">
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

  <!-- SECTION BUKU -->
  <section id="bukuresmidetail" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg">
      <div class="flex flex-col md:flex-row items-center justify-between gap-10">
        <div class="flex-1 text-[#05284C] space-y-4">
          <h2 class="text-4xl font-extrabold">Buku Komunitas</h2>
          <h3 class="text-2xl font-semibold">SI BOKE</h3>
          <div class="flex gap-3 mt-4">
            <button class="border border-[#05284C] text-[#05284C] px-6 py-2 rounded-lg font-medium hover:bg-[#05284C] hover:text-white transition">Download Link</button>
          </div>
          <div class="text-sm mt-6 leading-relaxed">
            <p><span class="font-semibold">Penulis :</span> Wenny Oktavia</p>
            <p><span class="font-semibold">Jenjang :</span> SD</p>
            <p><span class="font-semibold">Jumlah :</span> 28 halaman</p>
            <p><span class="font-semibold">Bahasa :</span> Indonesia</p>
            <p><span class="font-semibold">Format :</span> Buku Komik</p>
          </div>
          <div class="mt-6">
            <p class="font-semibold">Sinopsis :</p>
            <p class="text-sm leading-relaxed">
              “Aku memang bokek. Kalian boleh saja panggil aku si Boke. Tapi, aku akan jadi orang sukses nantinya jika aku rajin berusaha dan berdoa!”<br>
              Setuju dengan perkataan si Boke? Baca komik ini untuk mengenal si Boke lebih lanjut!
            </p>
          </div>
        </div>
        <div class="flex-1 flex justify-center">
          <img src="{{ asset('images/siboke.png') }}" alt="Buku Si Boke" class="rounded-xl shadow-md w-[280px] md:w-[340px]">
        </div>
      </div>
    </div>
  </section>

  <!-- BOTTOM NAV MOBILE -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span></a>
    <a href="/bukukomunitas" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md"><i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Komunitas</span></a>
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md" style="background-color: #D4C9BE;"><i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span></a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span></a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span></a>
    <a href="/bagikankarya" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md"><i data-lucide="share-2" class="w-6 h-6"></i><span class="text-xs mt-1">Bagikan Karya</span></a>
  </div>

  <script>
    lucide.createIcons();

    const desktopMenuBtn = document.getElementById('desktopMenuBtn');
    const desktopMenuDropdown = document.getElementById('desktopMenuDropdown');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuDropdown = document.getElementById('mobileMenuDropdown');

    // Toggle desktop dropdown
    desktopMenuBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      desktopMenuDropdown.style.display = desktopMenuDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Toggle mobile dropdown
    mobileMenuBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      mobileMenuDropdown.style.display = mobileMenuDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Klik di luar menutup dropdown
    window.addEventListener('click', () => {
      desktopMenuDropdown.style.display = 'none';
      mobileMenuDropdown.style.display = 'none';
    });
  </script>

</body>
</html>

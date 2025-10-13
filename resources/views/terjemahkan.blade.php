<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terjemahkan Ke Braille</title>

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

  <!-- Navbar -->
  <nav class="bg-[#F1EFEC] w-full shadow-sm py-5 px-10 flex justify-between items-center fixed top-0 left-0 z-50">
    <h1 class="text-xl font-semibold text-[#05284C]">Braille Logo</h1>
    
    <!-- Menu Desktop -->
    <div class="hidden md:flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan</a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
      <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
      <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
    </div>

    <!-- Tombol Mobile -->
    <button id="mobileNavBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
      <i data-lucide="menu"></i>
    </button>
  </nav>

  <!-- Menu Mobile -->
  <div id="mobileNavMenu" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px]">
    <a href="/terjemahkan" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan</a>
    <a href="/komunitas" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas</a>
    <a href="/resmi" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi</a>
    <a href="/audiobook" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="play" class="w-4 h-4"></i>Audiobook</a>
    <a href="/artikel" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="edit" class="w-4 h-4"></i>Artikel</a>
    <a href="/profile" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i>Profile</a>
  </div>

  <!-- Hero / Main Content -->
  <main class="flex-1 flex justify-center items-center px-5 mt-[120px] mb-10">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-8 md:p-12 shadow-lg text-center">
      
      <h2 class="text-3xl md:text-4xl font-bold text-[#1c1b1a] mb-6">Terjemahkan Ke Braille</h2>

      <!-- Input -->
      <textarea
        class="w-full h-40 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 p-4 text-base text-gray-800 placeholder-gray-500 resize-none mb-6 bg-white"
        placeholder="Ketik atau tempel teks di sini...."
      ></textarea>

      <!-- Pilihan -->
      <div class="flex justify-between items-center mb-6 text-gray-800 font-medium text-lg px-4">
        <span>Tambahkan tanda baca</span>
        <span>Ukuran titik</span>
      </div>

      <!-- Tombol Konversi -->
      <a href="/konversiterjemahkan" 
         class="bg-black text-white text-lg font-semibold px-8 py-3 rounded-xl hover:bg-[#1c1b1a] transition inline-block"
      >
        Konversi ke Braille
      </a>

    </div>
  </main>

  <script>
    lucide.createIcons();

    // Toggle menu mobile
    const mobileNavBtn = document.getElementById("mobileNavBtn");
    const mobileNavMenu = document.getElementById("mobileNavMenu");
    mobileNavBtn.addEventListener("click", () => {
      mobileNavMenu.classList.toggle("hidden");
    });
  </script>

</body>
</html>

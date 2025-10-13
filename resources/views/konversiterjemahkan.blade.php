<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Braille</title>

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

  <!-- Navbar (Fixed) -->
  <nav class="bg-[#F1EFEC] w-full shadow-sm py-5 px-10 flex justify-between items-center fixed top-0 left-0 z-50">
    <!-- Logo -->
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

    <!-- Tombol Menu Mobile -->
    <button id="KonversiTerjemahkanBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
      <i data-lucide="menu"></i>
    </button>
  </nav>

  <!-- Menu Mobile -->
  <div id="KonversiTerjemahkanMobile" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px]">
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="play" class="w-4 h-4"></i>Audiobook</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="edit" class="w-4 h-4"></i>Artikel</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i>Profile</a>
  </div>

 <!-- Main Content -->
  <main class="flex-1 flex justify-center items-center mt-[120px] mb-10">
    <div class="bg-[#F1EFEC] rounded-3xl p-10 w-full max-w-lg flex flex-col gap-6">
      
      <h2 class="text-center text-xl font-semibold">Preview Braille</h2>

      <!-- Braille Preview Image -->
<div class="flex justify-center mb-6">
  <img src="/images/brailly.png" alt="Braille Preview" class="w-60 h-60 rounded-lg shadow-md">
</div>


      <!-- Buttons -->
      <div class="flex justify-center gap-4">
        <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800">Unduh .brf</button>
        <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800">Unduh mirrored image</button>
      </div>

    </div>
  </main>
   
  <script>
    lucide.createIcons();

    // Toggle menu mobile
    const mobileBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    mobileBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</body>
</html>

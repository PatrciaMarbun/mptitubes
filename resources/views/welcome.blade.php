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
  <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
    <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
  </a>
  <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
  <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
  <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
  <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
  <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
</div>

    <!-- Tombol Menu Mobile -->
    <button id="menuBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
      <i data-lucide="menu"></i>
    </button>
  </nav>

  <!-- Menu Mobile -->
  <div id="mobileMenu" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px]">
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="play" class="w-4 h-4"></i>Audiobook</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="edit" class="w-4 h-4"></i>Artikel</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i>Profile</a>
  </div>

  <!-- Konten utama -->
  <div class="pt-[40px]"> <!-- sebelumnya 100px, dikurangi biar hero lebih naik -->

    <!-- Section Braille -->
<section class="bg-[#05284C] px-6 md:px-16 py-16 flex justify-center items-center">
  <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-10 md:p-16 shadow-lg">
    <h2 class="text-3xl font-semibold text-[#000000] mb-10 text-left">Braille</h2>

    <!-- Baris pertama -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 mb-6">
  @foreach (['Terjemahkan', 'Buku Komunitas', 'Buku Resmi'] as $item)
    <div class="bg-transparent rounded-2xl border border-black p-5 flex flex-col justify-center hover:shadow-md transition h-40">
      <h3 class="text-base font-semibold text-[#000000] mb-2">{{ $item }}</h3>
      <div class="flex items-center gap-2">
        <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
        <div>
          <p class="font-medium text-gray-800 text-xs">Title</p>
          <p class="text-gray-500 text-[11px]">Description</p>
        </div>
      </div>
    </div>
  @endforeach
</div>


<!-- Baris kedua (dua kotak lebih panjang) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
  @foreach (['Audiobook', 'Artikel'] as $item)
    <div class="bg-transparent rounded-2xl border border-black p-6 flex flex-col justify-center hover:shadow-md transition h-40">
      <h3 class="text-base font-semibold text-[#000000] mb-2">{{ $item }}</h3>
      <div class="flex items-center gap-2">
        <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
        <div>
          <p class="font-medium text-gray-800 text-xs">Title</p>
          <p class="text-gray-500 text-[11px]">Description</p>
        </div>
      </div>
    </div>
  @endforeach
</div>


  <script>
    lucide.createIcons();
    document.getElementById('menuBtn').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });
  </script>
</body>
</html>

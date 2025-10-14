<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Braille</title>

  <!-- Font Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
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
    <div class="hidden md:flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
      <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
      <a href="/profile" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
      <i data-lucide="menu"></i>
    </button>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px]">
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="play" class="w-4 h-4"></i>Audiobook</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="edit" class="w-4 h-4"></i>Artikel</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i>Profile</a>
  </div>

  <!-- Main Profile Section -->
  <main class="flex flex-1 justify-center items-center pt-[120px] pb-10 px-4">
    <div class="bg-[#F1EFEC] rounded-[30px] w-full max-w-4xl p-10 flex flex-col items-center shadow-lg transition-all duration-300">
      
      <!-- Profile Icon -->
      <div class="bg-white rounded-full p-4 mb-3 shadow">
        <i data-lucide="user" class="w-8 h-8 text-black"></i>
      </div>

      <!-- Name & Settings Icon -->
      <div class="flex items-center gap-3 mb-8">
        <p class="text-xl font-semibold text-black">Nama</p>
        <!-- Setting Icon -->
        <a href="/editprofile" class="cursor-pointer">
          <i data-lucide="settings" class="w-6 h-6 text-black hover:text-gray-600"></i>
        </a>
      </div>

      <!-- Menu Buttons -->
      <div class="w-full flex flex-col space-y-4">
        <a href="/register" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Daftar</a>
        <a href="/login" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Login</a>
        <a href="/library" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Library</a>
        <a href="/riwayatbaca" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Riwayat Baca</a>
        <a href="/riwayatunduh" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Riwayat Unduh</a>
        <a href="/editprofile" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Edit Profile</a>
        <a href="/login" class="w-full block bg-white rounded-lg py-3 text-red-500 font-medium text-center hover:bg-gray-100 transition">LogOut</a>



    </div>
  </main>

  <!-- Lucide Icons Script -->
  <script>
    lucide.createIcons();
  </script>

</body>
</html>

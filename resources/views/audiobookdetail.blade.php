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
    <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan</a>
    <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
    <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
    <a href="/audiobook" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
    <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
    <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
  </div>

  <!-- Tombol Menu Mobile -->
  <button id="AudiobookBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
    <i data-lucide="menu"></i>
  </button>
</nav>


  {{-- Menu Mobile --}}
  <div id="AudiobookMobile" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px] rounded-b-3xl">
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan
    </a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas
    </a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi
    </a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="play" class="w-4 h-4"></i>Audiobook
    </a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="edit" class="w-4 h-4"></i>Artikel
    </a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2">
      <i data-lucide="user" class="w-4 h-4"></i>Profile
    </a>
  </div>

  <!-- Hero Section -->
  <section id="hero-komunitas" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg">

      <div class="flex flex-col md:flex-row items-center justify-between gap-10">
        <!-- Kiri -->
        <div class="flex-1 text-[#05284C] space-y-4">
          <h2 class="text-4xl font-extrabold">Buku Komunitas</h2>

          <div>
            <h3 class="text-2xl font-semibold">SI BOKE</h3>
          </div>

          <div class="flex gap-3 mt-4">
            <!-- Tombol Baca -->
            <a href="/audiobookdengar" class="bg-[#D4C9BE] text-[#05284C] px-6 py-2 rounded-lg font-medium hover:bg-[#c7bcb0] transition">Baca</a>
            <button class="border border-[#05284C] text-[#05284C] px-6 py-2 rounded-lg font-medium hover:bg-[#05284C] hover:text-white transition">Download</button>
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

        <!-- Kanan -->
        <div class="flex-1 flex justify-center">
          <img src="{{ asset('images/siboke.png') }}" alt="Buku Si Boke" class="rounded-xl shadow-md w-[280px] md:w-[340px]">
        </div>
      </div>

    </div>
  </section>

  <script>
    lucide.createIcons();
    document.getElementById('KomunitasBtn').addEventListener('click', function() {
      const menu = document.getElementById('KomunitasMobile');
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>

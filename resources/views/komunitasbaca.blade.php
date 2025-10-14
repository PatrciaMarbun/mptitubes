<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Komunitas - Detail</title>

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
    <h1 class="text-xl font-semibold text-[#05284C]">Braille Logo</h1>

    <!-- Menu Desktop -->
    <div class="hidden md:flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan</a>
      <a href="/komunitas" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
      <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
      <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
    </div>

    <!-- Tombol Menu Mobile -->
    <button id="KomunitasBtn" class="md:hidden border border-gray-400 p-2 rounded-md hover:bg-gray-100">
      <i data-lucide="menu"></i>
    </button>
  </nav>

  <!-- Menu Mobile -->
  <div id="KomunitasMobile" class="hidden flex flex-col bg-[#F1EFEC] p-4 space-y-3 md:hidden mt-[80px] rounded-b-3xl">
    <a href="/terjemahkan" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="arrow-left-right" class="w-4 h-4"></i>Terjemahkan</a>
    <a href="/komunitas" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-text" class="w-4 h-4"></i>Buku Komunitas</a>
    <a href="/resmi" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="book-open" class="w-4 h-4"></i>Buku Resmi</a>
    <a href="/audiobook" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="play" class="w-4 h-4"></i>Audiobook</a>
    <a href="/artikel" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="edit" class="w-4 h-4"></i>Artikel</a>
    <a href="#" class="hover:text-[#05284C] flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i>Profile</a>
  </div>

  <!-- Detail Section -->
  <section id="detail-komunitas" class="flex justify-center items-start px-6 md:px-10 pt-[100px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg flex flex-col md:flex-row gap-10">

      <!-- Kiri: Deskripsi Buku -->
      <div class="flex-1">
        <h2 class="text-3xl font-bold text-[#05284C] mb-6">Buku Komunitas</h2>

        <h3 class="text-xl font-semibold text-gray-800">Title</h3>
        <p class="text-gray-600 mb-4">Theme</p>

        <p class="text-gray-700 mb-4 leading-relaxed">
          Aku memang bokek. Kalian boleh saja panggil aku si Boke. Tapi, aku akan jadi orang sukses nantinya jika aku rajin berusaha dan berdoa! Setuju dengan perkataan si Boke? Baca komik ini untuk mengenal si Boke lebih lanjut!
        </p>
        <p class="text-gray-700 mb-4 leading-relaxed">
          Aku memang bokek. Kalian boleh saja panggil aku si Boke. Tapi, aku akan jadi orang sukses nantinya jika aku rajin berusaha dan berdoa! Setuju dengan perkataan si Boke? Baca komik ini untuk mengenal si Boke lebih lanjut!
        </p>
        <p class="text-gray-700 leading-relaxed">
          Aku memang bokek. Kalian boleh saja panggil aku si Boke. Tapi, aku akan jadi orang sukses nantinya jika aku rajin berusaha dan berdoa! Setuju dengan perkataan si Boke? Baca komik ini untuk mengenal si Boke lebih lanjut!
        </p>
      </div>

      <!-- Kanan: Gambar Buku -->
      <div class="flex justify-center md:justify-end items-start">
        <img src="{{ asset('images/siboke.png') }}" alt="Buku Komunitas" class="rounded-xl w-72 md:w-80 shadow-lg">
      </div>
    </div>
  </section>

  <script>
    lucide.createIcons();

    // Toggle menu mobile
    document.getElementById('KomunitasBtn').addEventListener('click', function() {
      const menu = document.getElementById('KomunitasMobile');
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>

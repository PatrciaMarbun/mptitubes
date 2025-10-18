<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Resmi Detail</title>
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

  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 justify-between items-center fixed top-0 left-0 z-50">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
    <div class="flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
      </a>
      <a href="/resmi" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]">
        <i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi
      </a>
      <a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="play" class="w-5 h-5"></i>Audiobook
      </a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="edit" class="w-5 h-5"></i>Artikel
      </a>
      <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="user" class="w-5 h-5"></i>Profile
      </a>
    </div>
  </nav>

  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-9 w-auto">
    <a href="/profile" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
      <i data-lucide="user" class="w-5 h-5"></i>
    </a>
  </nav>

  <section id="hero-komunitas" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg">
      <div class="flex flex-col md:flex-row items-center justify-between gap-10">
        <div class="flex-1 text-[#05284C] space-y-4">
          <h2 class="text-4xl font-extrabold">Buku Komunitas</h2>

          <div>
            <h3 class="text-2xl font-semibold">SI BOKE</h3>
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
            <span class="text-blue-600 underline cursor-pointer hover:text-blue-800 mt-2 inline-block transition">Link</span>
          </div>
        </div>
        <div class="flex-1 flex justify-center">
          <img src="{{ asset('images/siboke.png') }}" alt="Buku Si Boke" class="rounded-xl shadow-md w-[280px] md:w-[340px]">
        </div>
      </div>

    </div>
  </section>

  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="arrow-left-right" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Terjemahkan</span>
    </a>
    <a href="/komunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-text" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Komunitas</span>
    </a>
    <a href="/resmi" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md" style="background-color: #D4C9BE;">
      <i data-lucide="book-open" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Buku Resmi</span>
    </a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="play" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Audiobook</span>
    </a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="edit" class="w-6 h-6"></i>
      <span class="text-xs mt-1">Artikel</span>
    </a>
  </div>

  <script>
    lucide.createIcons();
    document.getElementById('KomunitasBtn').addEventListener('click', function() {
      const menu = document.getElementById('KomunitasMobile');
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>

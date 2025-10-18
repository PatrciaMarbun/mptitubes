<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Audiobook Dengar</title>
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
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
    <div class="flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan</a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
      <a href="/audiobook" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
      <a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
      <a href="/profile" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
    </div>
  </nav>

  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
    <a href="/profile" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center"><i data-lucide="user" class="w-5 h-5"></i></a>
  </nav>

  <section id="detail-komunitas" class="flex justify-center items-start px-6 md:px-10 pt-[100px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-7xl p-8 md:p-16 shadow-lg flex flex-col md:flex-row gap-10">
      <div class="flex-1">
        <h2 class="text-3xl font-bold text-[#05284C] mb-6">Audiobook</h2>
        <h3 class="text-xl font-semibold text-gray-800">Title</h3>
        <p class="text-gray-500 mb-4">Theme</p>
        <div class="flex items-center gap-3 mb-6">
          <button class="bg-white p-3 rounded-full shadow hover:bg-gray-100 transition"><i data-lucide="play" class="w-6 h-6 text-[#05284C]"></i></button>
          <div class="w-full h-[2px] bg-gray-300 relative">
            <div class="absolute left-0 top-0 h-[2px] bg-[#05284C] w-1/3 transition-all duration-500"></div>
          </div>
        </div>
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
      <div class="flex-1 flex justify-center">
        <img src="{{ asset('images/siboke.png') }}" alt="Buku Si Boke" class="rounded-xl shadow-md w-[280px] md:w-[340px]">
      </div>
    </div>
  </section>

  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span></a>
    <a href="/komunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Komunitas</span></a>
    <a href="/resmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span></a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md" style="background-color: #D4C9BE;"><i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span></a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md"><i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span></a>
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

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>welcome</title>
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

  <!-- NAVBAR DESKTOP -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 items-center fixed top-0 left-0 z-50">
    <div class="flex-1"></div>
    <a href="/" class="flex items-center justify-center flex-1">
      <img src="{{ asset('images/logo.png') }}" alt="Braille Logo" class="h-10 w-auto">
    </a>
    <div class="flex-1 flex justify-end relative">
      <button id="menuButton" class="p-2 rounded-md hover:bg-gray-200 transition">
        <i data-lucide="menu" class="w-6 h-6 text-[#05284C]"></i>
      </button>

      <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-[#F1EFEC] border border-gray-300 rounded-lg shadow-lg">
  <a href="/login" class="block px-4 py-2 text-sm text-[#05284C] hover:bg-gray-200">Login</a>
  <a href="/register" class="block px-4 py-2 text-sm text-[#05284C] hover:bg-gray-200">Register</a>
</div>
    </div>
  </nav>

  <!-- NAVBAR MOBILE -->
  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <a href="/" class="flex items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Braille Logo" class="h-9 w-auto">
    </a>
    <button id="mobileMenuButton" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
      <i data-lucide="menu" class="w-5 h-5"></i>
    </button>

    <div id="mobileDropdown" class="hidden absolute right-4 top-14 w-40 bg-white border border-gray-200 rounded-lg shadow-lg">
      <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login</a>
      <a href="/register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Register</a>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <div class="pt-28 md:pt-32 px-6 md:px-16 pb-24">
    <section class="bg-[#05284C] flex justify-center items-center">
      <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-10 md:p-16 shadow-lg">
        <h2 class="text-3xl font-semibold text-black mb-10">Braille</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 mb-6">
          <a href="/terjemahkan" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-5 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Terjemahkan</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>

          <a href="/bukukomunitas" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-5 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Buku Komunitas</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>

          <a href="/bukuresmi" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-5 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Buku Resmi</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
          <a href="/audiobook" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-6 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Audiobook</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>

          <a href="/artikel" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-6 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Artikel</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>

          <a href="/bagikankarya" class="block">
            <div class="bg-transparent rounded-2xl border border-black p-6 flex flex-col justify-center hover:shadow-md transition h-40 cursor-pointer">
              <h3 class="text-base font-semibold text-black mb-2">Bagikan Karya</h3>
              <div class="flex items-center gap-2">
                <img src="{{ asset('images/avatar.png') }}" alt="icon" class="w-9 h-9 rounded-full">
                <div>
                  <p class="font-medium text-gray-800 text-xs">Title</p>
                  <p class="text-gray-500 text-[11px]">Description</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </div>

  <!-- BOTTOM NAV MOBILE -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span>
    </a>
    <a href="/bukukomunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Komunitas</span>
    </a>
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span>
    </a>
    <a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span>
    </a>
    <a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span>
    </a>
    <a href="/bagikankarya" class="flex flex-col items-center text-gray-800 px-4 py-2 rounded-md">
      <i data-lucide="share-2" class="w-6 h-6"></i><span class="text-xs mt-1">Bagikan Karya</span>
    </a>
  </div>

  <script>
    lucide.createIcons();

    const menuButton = document.getElementById('menuButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const mobileButton = document.getElementById('mobileMenuButton');
    const mobileDropdown = document.getElementById('mobileDropdown');

    menuButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    mobileButton.addEventListener('click', () => {
      mobileDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
      if (!mobileButton.contains(e.target) && !mobileDropdown.contains(e.target)) {
        mobileDropdown.classList.add('hidden');
      }
    });
  </script>

</body>
</html>

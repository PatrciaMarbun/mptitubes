<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terjemahkan ke Braille</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
    }
    .braille-output {
      white-space: pre-wrap;
      word-wrap: break-word;
      overflow-wrap: break-word;
      overflow-y: auto;
      max-height: 400px;
      line-height: 1.8;
      font-size: 1.2rem;
      background-color: #F9F9F9;
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 1rem;
    }
    .tts-icon {
      cursor: pointer;
      color: #05284C;
      vertical-align: middle;
    }
    .tts-icon:hover { color: #D4C9BE; }
    .desktop-dropdown, .mobile-dropdown {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: #F1EFEC;
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 8px 0;
      min-width: 200px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      display: none;
      z-index: 1000;
    }
    .desktop-dropdown a, .mobile-dropdown a {
      display: block;
      padding: 10px 16px;
      text-decoration: none;
      color: #05284C;
      font-size: 14px;
    }
    .desktop-dropdown a:hover, .mobile-dropdown a:hover {
      background-color: #D4C9BE;
      color: #05284C;
    }
    .desktop-dropdown a.logout, .mobile-dropdown a.logout {
      color: #FF0000 !important;
    }
    input, textarea {
      background-color: #FFFFFF;
      color: #000;
      border: 1px solid #ccc;
      border-radius: 10px;
      transition: border-color 0.2s ease-in-out;
    }
    input:focus, textarea:focus {
      outline: none;
      border-color: #05284C;
      box-shadow: 0 0 0 2px rgba(5, 40, 76, 0.2);
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- Navbar Desktop -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 fixed top-0 left-0 z-50">
    <div class="flex items-center w-full max-w-7xl mx-auto px-16 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <div class="flex flex-1 justify-evenly items-center whitespace-nowrap">
        <a href="/bukukomunitas" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
        </a>
        <a href="/bukuresmi" class="flex items-center gap-2 hover:text-[#05284C]">
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
        <a href="javascript:void(0)" id="desktopMenuBtn" class="flex items-center gap-2 hover:text-[#05284C]">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </a>
        <div id="desktopMenuDropdown" class="desktop-dropdown">
          <a href="#" class="flex flex-col items-center justify-center px-4 py-4 border-b border-gray-300 hover:bg-gray-100">
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

  <!-- Navbar Mobile -->
  <nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
    <div class="relative">
      <button id="mobileMenuBtn" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
        <i data-lucide="menu" class="w-5 h-5"></i>
      </button>
      <div id="mobileMenuDropdown" class="mobile-dropdown">
        <a href="#" class="flex flex-col items-center justify-center px-4 py-4 border-b border-gray-200 hover:bg-gray-100">
          <i data-lucide="user" class="w-5 h-5 text-gray-800"></i>
          <span class="text-gray-800 font-semibold mt-1">Nama Pengguna</span>
        </a>
        <a href="/riwayatbaca" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100">Riwayat Baca</a>
        <a href="/riwayatunduh" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100">Riwayat Unduh</a>
        <a href="/karyasaya" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100">Karya Saya</a>
        <a href="/editprofile" class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100">Edit Profile</a>
        <a href="/login" class="logout flex items-center gap-2 px-4 py-3 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Terjemahkan Section -->
  <section id="terjemahkan" class="flex justify-center items-start px-6 md:px-10 pt-[120px] pb-20">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-8 md:p-12 shadow-lg">
      <h2 class="text-3xl md:text-4xl font-bold text-[#1c1b1a] mb-8 text-center">Terjemahkan ke Braille</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-col">
          <label for="inputText" class="text-lg font-semibold mb-2">Masukkan Teks</label>
          <textarea id="inputText" rows="10" class="w-full p-4 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" placeholder="Ketik teks di sini..."></textarea>
        </div>
        <div class="flex flex-col">
          <label for="brailleOutput" class="text-lg font-semibold mb-2">Hasil Braille</label>
          <div id="brailleOutput" class="braille-output min-h-[250px]"></div>
        </div>
      </div>
      <footer class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button id="downloadBrf" class="w-full sm:w-auto bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105 disabled:bg-gray-400 disabled:cursor-not-allowed disabled:transform-none" disabled>Unduh .brf</button>
        <button id="downloadImage" class="w-full sm:w-auto bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105 disabled:bg-gray-400 disabled:cursor-not-allowed disabled:transform-none" disabled>Unduh Gambar Cermin (A4)</button>
      </footer>
    </div>
  </section>

  
  <!-- Bottom Navbar Mobile -->
  <div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
    <a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md bg-[#D4C9BE]">
      <i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span>
    </a>
    <a href="/bukukomunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md">
      <i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Komunitas</span>
    </a>
    <a href="/bukuresmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C] px-4 py-2 rounded-md ">
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

  <canvas id="brailleCanvas" style="display: none;"></canvas>
  <a id="downloadLink" style="display: none;"></a>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const inputText = document.getElementById('inputText');
      const brailleOutput = document.getElementById('brailleOutput');
      const downloadBrfBtn = document.getElementById('downloadBrf');
      const downloadImageBtn = document.getElementById('downloadImage');
      const canvas = document.getElementById('brailleCanvas');
      const link = document.getElementById('downloadLink');
      const desktopMenuBtn = document.getElementById('desktopMenuBtn');
      const desktopMenuDropdown = document.getElementById('desktopMenuDropdown');
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const mobileMenuDropdown = document.getElementById('mobileMenuDropdown');

      // Toggle dropdown desktop
      desktopMenuBtn.addEventListener('click', () => {
        desktopMenuDropdown.style.display = desktopMenuDropdown.style.display === 'block' ? 'none' : 'block';
      });

      // Toggle dropdown mobile
      mobileMenuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        mobileMenuDropdown.style.display = mobileMenuDropdown.style.display === 'block' ? 'none' : 'block';
      });

      // Close dropdowns on outside click
      document.addEventListener('click', e => {
        if (!desktopMenuBtn.contains(e.target) && !desktopMenuDropdown.contains(e.target)) {
          desktopMenuDropdown.style.display = 'none';
        }
        if (!mobileMenuBtn.contains(e.target) && !mobileMenuDropdown.contains(e.target)) {
          mobileMenuDropdown.style.display = 'none';
        }
      });

      // Braille mapping
      const brailleMap = {'a':'⠁','b':'⠃','c':'⠉','d':'⠙','e':'⠑','f':'⠋','g':'⠛','h':'⠓','i':'⠊','j':'⠚','k':'⠅','l':'⠇','m':'⠍','n':'⠝','o':'⠕','p':'⠏','q':'⠟','r':'⠗','s':'⠎','t':'⠞','u':'⠥','v':'⠧','w':'⠺','x':'⠭','y':'⠽','z':'⠵','1':'⠁','2':'⠃','3':'⠉','4':'⠙','5':'⠑','6':'⠋','7':'⠛','8':'⠓','9':'⠊','0':'⠚',' ':'⠀','.':'⠲',',':'⠂','?':'⠦','!':'⠖','-':'⠤',"'":'⠄',':':'⠒',';':'⠆','/':'⠌'};
      const numberSign = '⠼';
      const capitalSign = '⠠';

      function translateToBraille(text) {
        let result = '';
        let isNumber = false;
        for (let char of text) {
          const lower = char.toLowerCase();
          if (/[0-9]/.test(char)) {
            if (!isNumber) { result += numberSign; isNumber = true; }
            result += brailleMap[char];
          } else {
            if (isNumber) isNumber = false;
            if (/[A-Z]/.test(char)) result += capitalSign + (brailleMap[lower] || '⠀');
            else result += brailleMap[lower] || '⠀';
          }
        }
        return result;
      }

      inputText.addEventListener('input', () => {
        const translated = translateToBraille(inputText.value);
        brailleOutput.textContent = translated;
        const hasText = inputText.value.trim().length > 0;
        downloadBrfBtn.disabled = !hasText;
        downloadImageBtn.disabled = !hasText;
      });

      downloadBrfBtn.addEventListener('click', () => {
        const blob = new Blob([brailleOutput.textContent], { type: 'text/plain;charset=utf-8' });
        const url = URL.createObjectURL(blob);
        link.href = url;
        link.download = 'hasil_braille.brf';
        link.click();
        URL.revokeObjectURL(url);
      });

      downloadImageBtn.addEventListener('click', () => {
        const text = brailleOutput.textContent;
        const canvasWidth = 2480;
        const canvasHeight = 3508;
        canvas.width = canvasWidth;
        canvas.height = canvasHeight;

        const ctx = canvas.getContext('2d');
        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(0, 0, canvasWidth, canvasHeight);
        ctx.save();
        ctx.translate(canvasWidth, 0);
        ctx.scale(-1, 1);
        ctx.fillStyle = "#000000";
        ctx.font = "150px Arial";
        ctx.textBaseline = "top";

        let x = 100, y = 100;
        const maxWidth = canvasWidth - 200;
        const lineHeight = 225;
        let currentLine = "";

        for (let i = 0; i < text.length; i++) {
          currentLine += text[i];
          if (ctx.measureText(currentLine).width > maxWidth || text[i] === "\n") {
            ctx.fillText(currentLine.trim(), x, y);
            y += lineHeight;
            currentLine = "";
            if (y + lineHeight > canvasHeight - 100) break;
          }
        }
        if (currentLine.trim() !== "") ctx.fillText(currentLine.trim(), x, y);

        ctx.restore();
        link.href = canvas.toDataURL("image/png");
        link.download = 'hasil_braille_cermin.png';
        link.click();
      });

      lucide.createIcons();
    });
  </script>
</body>
</html>

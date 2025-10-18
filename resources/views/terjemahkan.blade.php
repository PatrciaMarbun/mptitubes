<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terjemahkan ke Braille</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .braille-output {
      font-size: 1.5rem;
      line-height: 2.2rem;
      word-break: break-all;
      overflow-wrap: break-word;
      white-space: pre-wrap;
    }
  </style>
</head>

<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- NAVBAR -->
  <nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 justify-between items-center fixed top-0 left-0 z-50">
    <a href="/" class="flex items-center gap-3">
      <img src="images/logo.png" alt="Braille Logo" class="h-10 w-auto">
    </a>
    <div class="flex items-center gap-12 text-gray-800">
      <a href="/terjemahkan" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]">
        <i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan
      </a>
      <a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]">
        <i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas
      </a>
      <a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]">
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

  <!-- MAIN CONTENT -->
  <main class="flex-1 flex justify-center items-center px-5 mt-[120px] mb-20 md:mb-10">
    <div class="bg-[#F1EFEC] rounded-[40px] w-full max-w-6xl p-8 md:p-12 shadow-lg">
      
      <h2 class="text-3xl md:text-4xl font-bold text-[#1c1b1a] mb-8 text-center">Terjemahkan ke Braille</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-col">
          <label for="inputText" class="text-lg font-semibold mb-2">Masukkan Teks</label>
          <textarea id="inputText" rows="10" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" placeholder="Ketik teks di sini..."></textarea>
        </div>

        <div class="flex flex-col">
          <label for="brailleOutput" class="text-lg font-semibold mb-2">Hasil Output</label>
          <div id="brailleOutput" class="w-full h-full p-4 border border-gray-200 bg-gray-50 rounded-lg braille-output min-h-[250px]"></div>
        </div>
      </div>

      <!-- Tombol Unduh -->
      <footer class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button id="downloadBrf" class="w-full sm:w-auto bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105 disabled:bg-gray-400 disabled:cursor-not-allowed disabled:transform-none" disabled>
          Unduh .brf
        </button>
        <button id="downloadImage" class="w-full sm:w-auto bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105 disabled:bg-gray-400 disabled:cursor-not-allowed disabled:transform-none" disabled>
          Unduh Gambar Cermin (A4)
        </button>
      </footer>
    </div>
  </main>

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

      const brailleMap = {
        'a': '⠁', 'b': '⠃', 'c': '⠉', 'd': '⠙', 'e': '⠑',
        'f': '⠋', 'g': '⠛', 'h': '⠓', 'i': '⠊', 'j': '⠚',
        'k': '⠅', 'l': '⠇', 'm': '⠍', 'n': '⠝', 'o': '⠕',
        'p': '⠏', 'q': '⠟', 'r': '⠗', 's': '⠎', 't': '⠞',
        'u': '⠥', 'v': '⠧', 'w': '⠺', 'x': '⠭', 'y': '⠽', 'z': '⠵',
        '1': '⠁', '2': '⠃', '3': '⠉', '4': '⠙', '5': '⠑',
        '6': '⠋', '7': '⠛', '8': '⠓', '9': '⠊', '0': '⠚',
        ' ': '⠀', '.': '⠲', ',': '⠂', '?': '⠦', '!': '⠖',
        '-': '⠤', "'": '⠄', ':': '⠒', ';': '⠆', '/': '⠌'
      };
      const numberSign = '⠼';
      const capitalSign = '⠠';

      function translateToBraille(text) {
        let result = '';
        let isNumber = false;
        for (let char of text) {
          const lower = char.toLowerCase();
          if (/[0-9]/.test(char)) {
            if (!isNumber) {
              result += numberSign;
              isNumber = true;
            }
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
        const translated = brailleOutput.textContent;
        const blob = new Blob([translated], { type: 'text/plain;charset=utf-8' });
        const url = URL.createObjectURL(blob);
        link.href = url;
        link.download = 'hasil_braille.brf';
        link.click();
        URL.revokeObjectURL(url);
      });

      downloadImageBtn.addEventListener('click', () => {
        const translated = brailleOutput.textContent;
        const lines = translated.split('\n');

        canvas.width = 2480; // A4 lebar (px, 300dpi)
        canvas.height = 3508; // A4 tinggi (px, 300dpi)
        const ctx = canvas.getContext('2d');

        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.save();
        ctx.translate(canvas.width, 0);
        ctx.scale(-1, 1); // Cermin horizontal

        ctx.fillStyle = "#000000";
        ctx.font = "40px Arial";
        ctx.textBaseline = "top";

        let x = 100;
        let y = 100;
        const lineHeight = 60;
        const maxWidth = canvas.width - 200;

        for (let line of lines) {
          const words = line.split(' ');
          let currentLine = '';
          for (let word of words) {
            const testLine = currentLine + word + ' ';
            const metrics = ctx.measureText(testLine);
            if (metrics.width > maxWidth) {
              ctx.fillText(currentLine, x, y);
              y += lineHeight;
              currentLine = word + ' ';
            } else {
              currentLine = testLine;
            }
          }
          ctx.fillText(currentLine, x, y);
          y += lineHeight;
        }

        ctx.restore();

        const imgURL = canvas.toDataURL("image/png");
        link.href = imgURL;
        link.download = 'hasil_braille_cermin.png';
        link.click();
      });

      lucide.createIcons();
    });
  </script>
</body>
</html>

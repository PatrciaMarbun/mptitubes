<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
<script src="https://unpkg.com/lucide@latest"></script>
<style>
body { font-family: 'Inter', sans-serif; }
</style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

<nav class="hidden md:flex bg-[#F1EFEC] w-full shadow-sm py-5 px-10 justify-between items-center fixed top-0 left-0 z-50">
<img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
<div class="flex items-center gap-12 text-gray-800">
<a href="/terjemahkan" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-5 h-5"></i>Terjemahkan</a>
<a href="/komunitas" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-text" class="w-5 h-5"></i>Buku Komunitas</a>
<a href="/resmi" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="book-open" class="w-5 h-5"></i>Buku Resmi</a>
<a href="/audiobook" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="play" class="w-5 h-5"></i>Audiobook</a>
<a href="/artikel" class="flex items-center gap-2 hover:text-[#05284C]"><i data-lucide="edit" class="w-5 h-5"></i>Artikel</a>
<a href="/profile" class="flex items-center gap-2 bg-[#D4C9BE] px-5 py-2 rounded-full hover:text-[#05284C]"><i data-lucide="user" class="w-5 h-5"></i>Profile</a>
</div>
</nav>

<nav class="md:hidden fixed top-0 left-0 w-full bg-[#F1EFEC] shadow-md z-50 flex justify-between items-center py-4 px-6">
<img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
<a href="/profile" class="border border-gray-400 p-2 rounded-md hover:bg-gray-100 inline-flex items-center justify-center">
<i data-lucide="user" class="w-5 h-5"></i>
</a>
</nav>

<main class="flex flex-1 justify-center items-center pt-[120px] pb-20 px-4">
<div class="bg-[#F1EFEC] rounded-[30px] w-full max-w-4xl p-10 flex flex-col items-center shadow-lg transition-all duration-300">
<div class="bg-white rounded-full p-4 mb-3 shadow">
<i data-lucide="user" class="w-8 h-8 text-black"></i>
</div>
<div class="flex items-center gap-3 mb-8">
<p class="text-xl font-semibold text-black">Nama</p>
<a href="/editprofile" class="cursor-pointer"><i data-lucide="pen-line" class="w-6 h-6 text-black hover:text-gray-600"></i></a>
</div>
<div class="w-full flex flex-col space-y-4">
<a href="/register" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Daftar</a>
<a href="/login" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Login</a>
<a href="/library" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Library</a>
<a href="/riwayatbaca" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Riwayat Baca</a>
<a href="/riwayatunduh" class="w-full bg-white rounded-lg py-3 text-black font-medium hover:bg-gray-100 transition text-center block">Riwayat Unduh</a>
<a href="/login" class="w-full block bg-white rounded-lg py-3 text-red-500 font-medium text-center hover:bg-gray-100 transition">LogOut</a>
</div>
</div>
</main>

<div class="md:hidden fixed bottom-0 left-0 w-full bg-[#F1EFEC] border-t border-gray-300 flex justify-around py-2 shadow-lg z-50">
<a href="/terjemahkan" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]"><i data-lucide="arrow-left-right" class="w-6 h-6"></i><span class="text-xs mt-1">Terjemahkan</span></a>
<a href="/komunitas" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]"><i data-lucide="book-text" class="w-6 h-6"></i><span class="text-xs mt-1">Komunitas</span></a>
<a href="/resmi" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]"><i data-lucide="book-open" class="w-6 h-6"></i><span class="text-xs mt-1">Buku Resmi</span></a>
<a href="/audiobook" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]"><i data-lucide="play" class="w-6 h-6"></i><span class="text-xs mt-1">Audiobook</span></a>
<a href="/artikel" class="flex flex-col items-center text-gray-800 hover:text-[#05284C]"><i data-lucide="edit" class="w-6 h-6"></i><span class="text-xs mt-1">Artikel</span></a>
</div>

<script>
lucide.createIcons();
</script>

</body>
</html>

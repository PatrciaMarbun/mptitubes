<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code Confirmed Braille</title>

  <!-- Font Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  @vite('resources/css/app.css')

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-[#05284C] min-h-screen flex flex-col">

  <!-- NAVBAR -->
  <nav class="bg-[#F1EFEC] w-full fixed top-0 left-0 z-50 shadow-sm py-5 flex justify-center items-center">
    <h1 class="text-2xl font-semibold text-[#05284C]">Braille Logo</h1>
  </nav>

  <!-- HERO / CODE CONFIRMED SECTION -->
  <section class="flex flex-col items-center justify-center w-full flex-grow pt-[100px] pb-[150px] bg-[#05284C]">
    <div class="bg-[#F1EFEC] rounded-[2rem] shadow-xl w-[90%] max-w-[40rem] p-10 text-center">
      <!-- Success Icon -->
      <div class="flex justify-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>

      <h2 class="text-3xl font-bold mb-2 text-green-600">Code Confirmed!</h2>
      
      <p class="text-gray-700 mb-2">
        Your password has been successfully reset.
      </p>
      <p class="text-gray-700 mb-8">
       click confirm to set a new password
      </p>

      <!-- Continue Button -->
      <a href="/resetpassword" class="block w-full text-center bg-black text-white rounded-xl py-2 hover:bg-gray-800 transition">
        Confirm
      </a>
    </div>
  </section>

</body>
</html>

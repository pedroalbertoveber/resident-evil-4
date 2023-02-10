<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- TAILWIND CONFIG -->
  @vite('resources/css/app.css')
  
  <title>RE 4 - {{ $title }}</title>
</head>
<body class="bg-black">
  <header class="flex justify-center items-center py-2 w-full h-44 sm:h-32 border-b-gray-500 border-b-2">
    <img src="/img/resident-evil-4-logo.png" alt="Resident Evil 4" class="w-72 sm:w-52">
  </header>
  <main class="min-h-[700px] px-8 py-12 max-w-[600px] mx-auto">

    @if($errors->any())
    <div class="bg-black w-full max-w-[1400px] mb-4 mx-auto p-2 border-red-500 border-2 rounded-lg">
      <ul>
        @foreach ($errors->all() as $error)
          <li class="text-lg text-red-500"><i class="bi bi-exclamation-circle mr-2"></i> {{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endisset

    {{ $slot }}
  </main>
  <footer class="font-upper h-28 flex items-center justify-center text-gray-200 text-xl border-t-2 border-t-gray-500">
    Capcom - &copy; 2023
  </footer>
</body>
</html>
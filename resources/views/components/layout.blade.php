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
<body class="bg-black text-gray-200">
    <header class="w-full border-b-2 border-gray-500 flex justify-center flex-col relative items-center p-4">
      <div class="flex flex-col items-center sm:flex-row sm:justify-between w-full max-w-[1200px] mx-auto">
        <figure class="w-full sm:w-1/2 flex justify-center sm:justify-start">
          <img src="/img/resident-evil-4-logo.png" alt="Resident Evil 4 Logo" class="w-60 sm:w-40">
        </figure>
        <form class="w-full sm:w-1/2 flex justify-end" action="{{ route('users.logout') }}" method="POST">
          @csrf
          
          <button class="link-default">
            <i class="bi bi-box-arrow-in-left"></i>
            LogOut
          </button>
        </form>
      </div>
    </header>
    <nav class="w-full p-4 border-b-2 border-gray-500">
      <ul class="flex flex-wrap justify-around max-w-[1200px] mx-auto">
        <li><a href="{{ route('home') }}" class="link-default">Home</a></li>
        <li><a href="{{ route('characters.index') }}" class="link-default">Characters</a></li>
        <li><a href="#" class="link-default">Treasures</a></li>
        <li><a href="{{ route('areas.index') }}" class="link-default">Areas</a></li>
        <li><a href="#" class="link-default">Guns</a></li>
      </ul>
    </nav>
    @if($errors->any())
    <div class="bg-black w-full max-w-[1200px] my-4 mx-auto p-2 border-red-500 border-2 rounded-lg">
      <ul>
        @foreach ($errors->all() as $error)
          <li class="text-lg text-red-500"><i class="bi bi-exclamation-circle mr-2"></i> {{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endisset
    <main class="min-h-[700px] px-8 sm:px-4 py-12 max-w-[1200px] mx-auto">
    {{ $slot }}
  </main>
  <footer class="font-upper h-28 flex items-center justify-center text-gray-200 text-xl border-t-2 border-t-gray-500">
    Capcom - &copy; 2023
  </footer>
</body>
</html>
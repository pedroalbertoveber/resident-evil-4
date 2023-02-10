<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- TAILWIND CONFIG -->
  @vite('resources/css/app.css')
  
  <title>RE 4 - {{ $title }}</title>
</head>

<body>
  {{ $slot }}
</body>
</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  {{-- AOS LIBRARY --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- GOOGLEFONTS --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
{{-- BUNDELING ASSETS --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  
  <x-navbar></x-navbar>
  <header class="homepage">
    <div class="min-vh-100">
      {{$slot}}
    </div>
  </header>
  
  <x-footer></x-footer>
  
  {{-- AOS LIBRARY'S SCRIPT --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  {{-- FONTAWSOME'S SCRIPT --}}
  <script src="https://kit.fontawesome.com/130c6b2c4b.js" crossorigin="anonymous"></script>
</body>
</html>
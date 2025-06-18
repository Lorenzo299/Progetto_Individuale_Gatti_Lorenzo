<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  
  <header class="homepage">
    <x-navbar></x-navbar>
  <div class="min-vh-100">
    {{$slot}}
  </div>
  </header>
  
  <x-footer></x-footer>
</body>
</html>
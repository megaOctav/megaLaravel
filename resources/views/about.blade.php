<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-black shadow">
    <div class="container mx-auto p-4 flex justify-center items-center">
    <h1 class="text-3xl text-stone-500 font-bold">
    About me!
    </div>
    </header>
    </h1>

    <div class="flex justify-center my-4">
    <a href="{{ route('home') }}" class="text-black text-lg font-bold hover:text-red-600">
        Home
    </a>
</div>
</body>
</html>
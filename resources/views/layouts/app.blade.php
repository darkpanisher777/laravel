<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="/"class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <img class="object-cover w-16 h-16 rounded-full" src="{{ asset('assets/image/icon .png') }}">

      <span class="ml-3 text-xl">JADE.inc</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="/clients">Clients</a>
      <a class="mr-5 hover:text-gray-900"href="/about">About</a>
      <a class="mr-5 hover:text-gray-900"href="/contact">Contact</a>
    </nav>
    
  </div>
</header>
<main class="max-w-6xl mx-auto">
   {{$slot}}  
</main>
    </body>
</html>

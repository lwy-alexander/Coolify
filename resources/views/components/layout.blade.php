@props(['title' => 'Untitled'])

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('img/Favicon.png') }}" type="image/png" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  </head>
  <body class="h-full">
    <div class="min-h-full">
      <main>
        <div class="mx-auto max-w-7xl px-6 py-6 sm:px-6 lg:px-8">
          {{ $slot }}
        </div>
      </main>
      <footer class="text-center py-4 mx-auto">
        <p class="text-sm text-gray-500">&copy; {{ date('Y') }} PT. Sentra Layanan Prima — All rights reserved.</p>
      </footer>
    </div>
  </body>
</html>

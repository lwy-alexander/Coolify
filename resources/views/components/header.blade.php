@props(['header' => 'Untitled'])

<header
  class="relative after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10"
>
  <div class="max-w-7xl mx-6 py-6 sm:mx-6 lg:mx-8 border-b-2 border-gray-300">
    <h1 class="text-3xl font-bold tracking-tight text-black">{{ $header }}</h1>
  </div>
</header>

@props([
  'posts',
])

<div>
  <h2 class="text-base/7 font-semibold text-gray-900">List Makanan</h2>
  <p class="mt-1 text-sm/6 text-gray-600">Jangan lupa makanan yang disimpan, ya!</p>
  <ul role="list" class="divide-y divide-gray-100">
    @foreach ($posts as $post)
      <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
          <div class="min-w-0 flex-auto">
            <p class="text-sm/6 font-semibold text-gray-900">{{ $post->foodName }}</p>
            <div class="bg-cyellow rounded-3xl w-16">
              <p class="mt-1 truncate text-xs/5 text-gray-700 text-center">
                {{ 14 + ((int) now()->diffInDays($post->dateIn)) . ' days' }}
              </p>
            </div>
            <form
              action="{{ route('posts.destroy', $post->id) }}"
              method="POST"
              onsubmit="return confirm('Ingin hapus makanan ini?');"
              class="mt-2"
            >
              @csrf
              @method('DELETE')
              <button
                type="submit"
                class="border-2 border-red-500/90 px-2 py-0.5 bg-red-500/90 text-white text-sm rounded-lg hover:bg-white hover:text-red-500/90"
              >
                Delete
              </button>
            </form>
          </div>
        </div>
        <div class="flex flex-col items-end justify-center">
          <p class="text-sm/6 text-gray-900">{{ 'In: ' . \Carbon\Carbon::parse($post->dateIn)->format('d M Y') }}</p>
          <br />
          <p class="text-sm/6 text-gray-900">
            {{ 'Out: ' .\Carbon\Carbon::parse($post->dateIn)->addDays(14)->format('d M Y') }}
          </p>
          <br />
        </div>
      </li>
    @endforeach
  </ul>
</div>

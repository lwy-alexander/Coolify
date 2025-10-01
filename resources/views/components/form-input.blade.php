<form action="{{ route('posts.store') }}" method="POST">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="grid grid-cols-1 gap-x-6 gap-y-3.5">
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-gray-900">Nama</label>
          <div class="mt-2">
            <p
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 px-3 text-sm/6"
            >
              {{ $user->name }}
            </p>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="room" class="block text-sm/6 font-medium text-gray-900">Nomor Kamar</label>
          <div class="mt-2">
            <p
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 px-3 text-sm/6"
            >
              {{ $user->room }}
            </p>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="phone" class="block text-sm/6 font-medium text-gray-900">Nomor HP</label>
          <div class="mt-2">
            <p
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 px-3 text-sm/6"
            >
              +62 {{ $user->phone }}
            </p>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="dateIn" class="block text-sm/6 font-medium text-gray-900">Tanggal Masuk</label>
          <div class="mt-2">
            <div
              class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-cblue"
            >
              <input
                id="dateIn"
                type="date"
                name="dateIn"
                value="{{ now()->format('Y-m-d') }}"
                min="{{ now()->subDays(14)->format('Y-m-d') }}"
                max="{{ now()->format('Y-m-d') }}"
                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none text-sm/6"
              />
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="foodName" class="block text-sm/6 font-medium text-gray-900">Nama Makanan</label>
          <div class="mt-2">
            <div
              class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-cblue"
            >
              <input
                id="foodName"
                type="text"
                name="foodName"
                placeholder="Telur Ayam Negeri"
                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none text-sm/6"
              />
            </div>
          </div>
        </div>
        <div class="mt-5 w-full sm:col-span-4">
          <button
            type="submit"
            class="flex w-full justify-center rounded-md bg-cblue px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs border-2 hover:bg-white hover:text-cblue hover:border-cblue focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</form>

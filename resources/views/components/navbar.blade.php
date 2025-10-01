@props([
  'notifications',
])

<nav class="bg-[#eee]">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://pt-slp.co.id/assets/img/SLP-Trans.png" alt="SLP" class="h-9 sm:h-11" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a
              href="{{ route('home') }}"
              aria-current="page"
              class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-cblue/75 hover:text-white"
            >
              Home
            </a>
            <a
              href="{{ route('about') }}"
              class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-cblue/75 hover:text-white"
            >
              About
            </a>
            <form
              method="POST"
              action="{{ route('logout') }}"
              class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-red-700/75 hover:text-white"
            >
              @csrf
              <button type="submit">Logout</button>
            </form>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="flex items-center">
          <button
            command="show-modal"
            commandfor="drawer"
            type="button"
            class="relative rounded-full p-1 text-black hover:text-cblue focus:outline-2 focus:outline-offset-2 focus:outline-cblue"
          >
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              data-slot="icon"
              aria-hidden="true"
              class="size-6"
            >
              <path
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <div class="flex items-center">
          <button
            command="show-modal"
            commandfor="drawer"
            type="button"
            class="relative rounded-full p-1 text-black hover:text-cblue focus:outline-2 focus:outline-offset-2 focus:outline-cblue"
          >
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              data-slot="icon"
              aria-hidden="true"
              class="size-6"
            >
              <path
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>

        <el-dropdown class="relative ml-3 flex items-center text-black hover:text-cblue">
          <button
            class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cblue"
          >
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              data-slot="icon"
              aria-hidden="true"
              class="size-6 in-aria-expanded:hidden"
            >
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              data-slot="icon"
              aria-hidden="true"
              class="size-6 not-in-aria-expanded:hidden"
            >
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>

          <el-menu
            anchor="bottom end"
            popover
            class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in"
          >
            <a
              href="{{ route('home') }}"
              class="block px-4 py-2 text-sm text-gray-700 focus:bg-cblue/75 focus:text-white focus:outline-hidden"
            >
              Home
            </a>
            <a
              href="{{ route('about') }}"
              class="block px-4 py-2 text-sm text-gray-700 focus:bg-cblue/75 focus:text-white focus:outline-hidden"
            >
              About
            </a>
            <form
              method="POST"
              action="{{ route('logout') }}"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700/75 hover:text-white focus:outline-hidden cursor-pointer"
            >
              @csrf
              <button type="submit">Logout</button>
            </form>
          </el-menu>
        </el-dropdown>
      </div>
    </div>
  </div>
  <el-dialog>
    <dialog
      id="drawer"
      aria-labelledby="drawer-title"
      class="fixed inset-0 size-auto max-h-none max-w-none overflow-hidden bg-transparent not-open:hidden backdrop:bg-transparent"
    >
      <el-dialog-backdrop
        class="absolute inset-0 bg-gray-500/75 transition-opacity duration-500 ease-in-out data-closed:opacity-0"
      ></el-dialog-backdrop>

      <div tabindex="0" class="absolute inset-0 pl-10 focus:outline-none sm:pl-16">
        <el-dialog-panel
          class="group/dialog-panel relative ml-auto block size-full max-w-md transform transition duration-500 ease-in-out data-closed:translate-x-full sm:duration-700"
        >
          <!-- Close button, show/hide based on slide-over state. -->
          <div
            class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 duration-500 ease-in-out group-data-closed/dialog-panel:opacity-0 sm:-ml-10 sm:pr-4"
          >
            <button
              type="button"
              command="close"
              commandfor="drawer"
              class="relative rounded-md text-gray-300 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
              <span class="absolute -inset-2.5"></span>
              <span class="sr-only">Close panel</span>
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                data-slot="icon"
                aria-hidden="true"
                class="size-6"
              >
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="relative flex h-full flex-col overflow-y-auto bg-white py-6 shadow-xl">
            <div class="px-4 sm:px-6">
              <h2 id="drawer-title" class="text-base font-semibold text-gray-900">Notifications</h2>
            </div>
            <div class="relative mt-6 flex-1 px-4 sm:px-6">
              @forelse ($notifications as $notif)
                <div class="flex items-start gap-3 py-4">
                  <div class="flex-1">
                    <p class="text-sm">
                      <span class="font-semibold">{{ $notif->post->foodName }}</span>
                      – {{ $notif->message }}
                    </p>
                    <p class="text-xs text-gray-500">
                      {{ $notif->notify_at->diffForHumans() }}
                    </p>
                  </div>
                </div>
              @empty
                <p class="text-sm text-gray-500">No notifications yet</p>
              @endforelse
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</nav>

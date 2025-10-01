@if (session('error'))
  <script>
    alert('{{ session('error') }}');
  </script>
@endif

<x-layout>
  <x-slot name="title">Login</x-slot>
  <div class="flex flex-col justify-center align-middle sm:flex-row gap-10">
    <div class="flex justify-center align-middle sm:w-4xl">
      <img src="{{ asset('img/rumah_talenta_bca.jpg') }}" alt="RTB" class="w-full h-auto rounded-4xl object-contain" />
    </div>
    <div class="h-full">
      <div>
        <h1 class="font-semibold text-3xl">
          Welcome Back
          <span class="text-3xl">&#128075;</span>
        </h1>
        <p class="mt-2">
          Today is a new day. It's your day. You shape it. Sign in to start managing your refrigerator.
        </p>
      </div>

      <div class="flex min-h-full flex-col justify-center">
        <div class="mt-3 sm:mx-auto sm:w-full">
          <form action="{{ route('login.post') }}" method="POST" class="space-y-3">
            @csrf

            <div>
              <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
              <div class="mt-2">
                <input
                  id="email"
                  type="email"
                  name="email"
                  required
                  autocomplete="email"
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-cblue sm:text-sm/6"
                  placeholder="Enter your email"
                />
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input
                  id="password"
                  type="password"
                  name="password"
                  required
                  autocomplete="current-password"
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-cblue sm:text-sm/6"
                  placeholder="Enter your password"
                />
              </div>
              <div class="text-sm mt-2 flex justify-end">
                <button
                  command="show-modal"
                  commandfor="dialog"
                  type="button"
                  class="font-semibold text-cblue hover:text-cblue hover:underline"
                >
                  Forgot password?
                </button>
              </div>
            </div>

            <div>
              <button
                type="submit"
                class="flex w-full justify-center rounded-md bg-cblue px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs border-2 hover:bg-white hover:text-cblue hover:border-cblue focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
              >
                Sign in
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <el-dialog>
    <dialog
      id="dialog"
      aria-labelledby="dialog-title"
      class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent"
    >
      <el-dialog-backdrop
        class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"
      ></el-dialog-backdrop>

      <div
        tabindex="0"
        class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0"
      >
        <el-dialog-panel
          class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95"
        >
          <form action="#" method="POST" class="space-y-3">
            @csrf

            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div
                  class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10"
                >
                  <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    data-slot="icon"
                    aria-hidden="true"
                    class="size-6 text-red-600"
                  >
                    <path
                      d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 id="dialog-title" class="text-base font-semibold text-gray-900">Forgot password</h3>
                  <div>
                    <p class="text-sm text-gray-500">No worries, we'll send you reset instructions.</p>
                  </div>
                  <div class="mt-4">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div>
                      <input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autocomplete="email"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-cblue sm:text-sm/6"
                        placeholder="Enter your email"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button
                type="button"
                command="close"
                commandfor="dialog"
                class="inline-flex w-full justify-center rounded-md bg-cblue px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-cblue/85 sm:ml-3 sm:w-auto"
              >
                Send Verification
              </button>
              <button
                type="button"
                command="close"
                commandfor="dialog"
                class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
              >
                Cancel
              </button>
            </div>
          </form>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</x-layout>

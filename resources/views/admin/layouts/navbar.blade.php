<header class="z-10 py-4 bg-white shadow-md">
  <div class="container flex items-center justify-between h-full px-6 mx-auto text-deep-purple">
    <!-- Mobile hamburger -->
    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none" @click="toggleSideMenu" aria-label="Menu">
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"></path>
      </svg>


    </button>
    <div class="flex items-center">
      <span class="hidden md:flex lg:flex px-2 font-dmsans font-bold text-xl text-gray-700">
        @yield('title')
      </span>
    </div>
    <div class="items-center">
      <span class="relative px-2 mx-2 font-poppins font-medium text-sm text-gray-500">
        Hi, @if (Auth::check())
          {{ Auth::user()->name }}
        @endif
      </span>
    </div>
  </div>
</header>

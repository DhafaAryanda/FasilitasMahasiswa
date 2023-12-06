<header class="z-10 py-2 bg-white shadow-md">
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
    <div class="relative items-center font-poppins font-semibold text-[13px] text-gray-500">
      <a href="{{ route('member.profile') }}">
        <button class="flex hover:bg-blue-500/5 p-1 rounded-md items-center">
          <div class="flex flex-col items-start">
            <div>
              @if (Auth::check())
                {{ Auth::user()->name }}
              @endif
            </div>
            <div>
              @if (Auth::check())
                {{ Auth::user()->email }}
              @endif
            </div>
          </div>
          <div class="px-3 py-2 mx-2 bg-blue-100 rounded-md text-blue-500">
            @if (Auth::check())
              <?php $initial = strtoupper(substr(Auth::user()->name, 0, 1)); ?>
              {{ $initial }}
            @endif
          </div>
        </button>

      </a>
      {{-- <span class="relative px-2 mx-2 ">
        Hi, @if (Auth::check())
          {{ Auth::user()->name }}
        @endif
      </span> --}}
    </div>
  </div>
</header>

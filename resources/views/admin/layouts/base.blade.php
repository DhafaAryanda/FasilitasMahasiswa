<!DOCTYPE html>
<html x-data="data()" lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('fasilitasmahasiswa/assets/js/init-alpine.js') }}"></script>


  </head>

  <body class="bg-[#F5F5F5]">
    <div class="flex h-screen" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- sidebar -->
      <!-- Desktop sidebar -->
      <aside class="z-20 hidden w-[274px] overflow-y-auto bg-white md:block flex-shrink-0 font-dmsans">

        @yield('sidebar-menu-desktop')

      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
      <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-[274px] mt-16 overflow-y-auto bg-white md:hidden font-dmsans"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">

        @yield('sidebar-menu-mobile')
      </aside>

      <div class="flex flex-col flex-1 w-full">
        <!-- navbar -->
        @include('admin.layouts.navbar')

        @yield('content')
      </div>
    </div>

    @yield('js')

  </body>

</html>

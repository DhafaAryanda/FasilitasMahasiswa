<!DOCTYPE html>
<html x-data="data()" lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">
    @vite('resources/css/app.css')

    <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css" />


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('fasilitasmahasiswa/assets/js/init-alpine.js') }}"></script>

  </head>

  <body class="bg-[#EEF0F8]  ">

    <div class="flex" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- sidebar -->
      <!-- Desktop sidebar -->


      <div class="md:ml-[268px]"></div>
      @include('member.layouts.sidebar')

      <div class="flex flex-col flex-1 w-full">
        <!-- navbar -->
        @include('admin.layouts.navbar')

        @yield('content')
      </div>
    </div>
  </body>

</html>

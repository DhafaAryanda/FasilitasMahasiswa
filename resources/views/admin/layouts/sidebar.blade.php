<aside
  class="shadow-lg fixed z-20 hidden w-[268px] h-screen overflow-y-auto bg-white md:block flex-shrink-0 font-dmsans">

  <div class="py-4 text-gray-500">
    <a class="flex ml-8 items-center mt-1 mb-7" href="#">
      <img src="{{ '/storage/assets/images/logo.png' }}" alt="Logo" class="w-auto max-h-14">
    </a>

    <div class="pt-4">
      <div class="block px-6 py-1 ">
        <span class="font-semibold text-gray-400 ml-2 text-sm">ADMIN</span>
      </div>
      <ul>
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md active">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.dashboard') }}">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                stroke="none">
                <path
                  d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" />
                <path
                  d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                  opacity="0.3" />
              </svg>
              <span class="ml-4">Dashboard</span>
            </a>
          </div>
        </li>
        <div class="block mx-6 my-1 mt-3">
          <span class="font-semibold text-gray-400 ml-2 text-sm">Manajemen Peminjaman</span>
        </div>
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.manajemen.sewa.facility') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Prasarana</span>
            </a>
          </div>
        </li>
        {{-- <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="#">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Sarana </span>
            </a>
          </div>
        </li> --}}
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.manajemen.history') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Riwayat Transaksi</span>
            </a>
          </div>
        </li>
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.manajemen.create.transaction') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Buat Transaksi</span>
            </a>
          </div>
        </li>
        <div class="block mx-6 my-1 mt-3">
          <span class="font-semibold text-gray-400 ml-2 text-sm">Manajemen Konten</span>
        </div>
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.manajemen.konten.facility') }}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Prasarana</span>
            </a>
          </div>
        </li>
        {{-- <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="#">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Sarana </span>
            </a>
          </div>
        </li> --}}
        <div class="block mx-6 my-1 mt-3">
          <span class="font-semibold text-gray-400 ml-2 text-sm">Akun</span>
        </div>
        <li
          class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
              href="{{ route('admin.profile') }}">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                stroke="none">
                <path path path
                  d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                  opacity="0.3"></path>
                <path path
                  d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
                </path>
              </svg>
              <span class="ml-4">Profile</span>
            </a>
          </div>
        </li>
        <li
          class="relative transition-colors duration-150 active:text-red-800 active:bg-red-100 hover:text-red-800 hover:bg-red-100 mx-4 my-1 rounded-md">
          <div class="flex items-center">
            <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="{{ route('logout') }}">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                stroke="none" fill-rule="evenodd">
                <polygon fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684">
                </polygon>
                <path
                  d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z">
                </path>
              </svg>
              <span class="ml-4">Keluar</span>
            </a>
          </div>
        </li>
      </ul>
    </div>


  </div>
</aside>

<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-cloak x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside x-cloak
  class="shadow-lg fixed inset-y-0 z-20 flex-shrink-0 h-screen w-[274px] mt-16  bg-white md:hidden font-dmsans"
  x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu">

  <div class="text-gray-500">
    <div class="px-6 py-4">
      <span class="font-bold text-slate-600 ml-5 text-sm">ADMIN</span>
    </div>
    <ul>
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md active">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.dashboard') }}">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
              stroke="none">
              <path
                d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" />
              <path
                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                opacity="0.3" />
            </svg>
            <span class="ml-4">Dashboard</span>
          </a>
        </div>
      </li>
      <div class="block mx-6 my-1 mt-3">
        <span class="font-semibold text-gray-400 ml-2 text-sm">Manajemen Peminjaman</span>
      </div>
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.manajemen.sewa.facility') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Prasarana</span>
          </a>
        </div>
      </li>
      {{-- <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="#">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Sarana </span>
          </a>
        </div>
      </li> --}}
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.manajemen.history') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Riwayat Transaksi</span>
          </a>
        </div>
      </li>
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.manajemen.create.transaction') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Buat Transaksi</span>
          </a>
        </div>
      </li>
      <div class="block mx-6 my-1 mt-3">
        <span class="font-semibold text-gray-400 ml-2 text-sm">Manajemen Konten</span>
      </div>
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.manajemen.konten.facility') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Prasarana</span>
          </a>
        </div>
      </li>
      {{-- <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="#">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Sarana </span>
          </a>
        </div>
      </li> --}}
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.manajemen.create.transaction') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Buat Transaksi</span>
          </a>
        </div>
      </li>
      <div class="block mx-6 my-1 mt-3">
        <span class="font-semibold text-gray-400 ml-2 text-sm">Akun</span>
      </div>
      <li
        class="relative transition-colors duration-150 active:text-blue-500 active:bg-blue-sky-1 hover:text-blue-500 hover:bg-blue-sky-1 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold"
            href="{{ route('admin.profile') }}">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              stroke="none">
              <path path path
                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                opacity="0.3"></path>
              <path path
                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
              </path>
            </svg>
            <span class="ml-4">Profile</span>
          </a>
        </div>
      </li>
      <li
        class="relative transition-colors duration-150 active:text-red-800 active:bg-red-100 hover:text-red-800 hover:bg-red-100 mx-4 my-1 rounded-md">
        <div class="flex items-center">
          <a class="px-6 py-4 inline-flex items-center w-full text-sm font-semibold" href="{{ route('logout') }}">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              stroke="none" fill-rule="evenodd">
              <polygon fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684">
              </polygon>
              <path
                d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z">
              </path>
            </svg>
            <span class="ml-4">Keluar</span>
          </a>
        </div>
      </li>
    </ul>

  </div>
</aside>

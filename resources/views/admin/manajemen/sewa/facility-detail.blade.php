@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')

@section('sidebar-menu-desktop')
  <div class="py-4 text-gray-500">
    <a class="flex ml-8 items-center mt-1 mb-7" href="{{ route('admin.dashboard') }}">
      <img src="https://mbkmunggul.usk.ac.id/assets/img/logo/logo_mbkm_dark.png" alt="Logo" class="w-auto max-h-14">
    </a>

    <div class="block px-6 py-3">
      <span class="font-bold text-gray-400 ml-5 text-sm">ADMIN</span>
    </div>
    <ul>
      <li class="relative px-6 py-3 duration-150">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-deep-purple"
          href="{{ route('admin.dashboard') }}">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
            <path
              d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" />
            <path
              d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
              opacity="0.3" />
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold text-blue-gray transition-colors duration-150 hover:text-deep-purple"
          href="{{ route('admin.profile') }}">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none">
            <path path path
              d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
              opacity="0.3"></path>
            <path path
              d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
            </path>
          </svg>
          <span class="ml-4">Profile</span>
        </a>
      </li>
      <li class="relative px-6 py-3" x-data="{ isMenu1Open: true }">
        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg" aria-hidden="true">
        </span>
        <button
          class="inline-flex items-center justify-between w-full text-sm font-bold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(1)" aria-haspopup="true">
          <span class="inline-flex items-center text-yellow-orange">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4 text-deep-purple">Manajemen Peminjaman</span>
          </span>
          <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <template x-if="isMenu1Open">
          <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md" aria-label="submenu">
            <li class="mt-2 px-2 py-1 transition-colors duration-150 text-deep-purple">
              <span class="inline-flex items-center font-bold justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5 text-yellow-orange" viewBox="0 0 11 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="{{ route('admin.manajemen.sewa.facility') }}">Fasilitas
                  Gelanggang</a>
              </span>
            </li>
            <li class="mt-2 px-2 py-1 transition-colors duration-150">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
              </span>
            </li>
          </ul>
        </template>
      </li>
      <li class="relative px-6 py-3">
        <button
          class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(2)" aria-haspopup="true">
          <span class="inline-flex items-center">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Manajemen Konten</span>
          </span>
          <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <template x-if="isMenu2Open">
          <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md" aria-label="submenu">
            <li class="mt-2 px-2 py-1 transition-colors duration-150">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="{{ route('admin.manajemen.konten.facility') }}">Fasilitas
                  Gelanggang</a>
              </span>
            </li>
            <li class="mt-2 px-2 py-1 transition-colors duration-150">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
              </span>
            </li>
          </ul>
        </template>
      </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-red-800"
          href="{{ route('admin.logout') }}">
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
      </li>
    </ul>
  </div>
@endsection

@section('sidebar-menu-mobile')
  <div class="text-gray-500">
    <div class="block  px-6 py-3">
      <span class="font-bold text-slate-600 ml-5 text-sm">ADMIN</span>
    </div>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          href="index.html">
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
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          href="forms.html">
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
      </li>
      <li class="relative px-6 py-3" x-data="{ isMenu1Open: true }">
        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg"
          aria-hidden="true"></span>
        <button
          class="inline-flex items-center justify-between w-full text-sm font-bold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(1)" aria-haspopup="true">
          <span class="inline-flex items-center text-yellow-orange">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4 text-deep-purple">Manajemen Peminjaman</span>
          </span>
          <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <template x-if="isMenu1Open">
          <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md" aria-label="submenu">
            <li class="px-2 py-1 transition-colors duration-150 text-deep-purple">
              <span class="inline-flex items-center font-bold justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5 text-yellow-orange" viewBox="0 0 11 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Fasilitas Gelanggang</a>
              </span>
            </li>
            <li class="mt-1 px-2 py-1 transition-colors duration-150 hover:text-deep-purple">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
              </span>
            </li>
          </ul>
        </template>
      </li>
      <li class="relative px-6 py-3">
        <button
          class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(2)" aria-haspopup="true">
          <span class="inline-flex items-center">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Manajemen Konten</span>
          </span>
          <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <template x-if="isMenu2Open">
          <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
            class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md" aria-label="submenu">
            <li class="px-2 py-1 transition-colors duration-150">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Fasilitas Gelanggang</a>
              </span>
            </li>
            <li class="mt-1 px-2 py-1 transition-colors duration-150 hover:text-deep-purple">
              <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
                <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor" />
                </svg>
                <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
              </span>
            </li>
          </ul>
        </template>
      </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-red-800"
          href="form.html">
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
      </li>
    </ul>

  </div>
@endsection

@section('content')
  <div class=" m-10 items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <h2 class="font-semibold text-xl text-blue-gray">Detail Transaksi</h2>
      <div class="flex flex-row mt-5 mb-10">
        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">ID Pemesanan</li>
            <p class="text-sm text-gray-500">{{ $transaction->transaction_code }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Fasilitas</li>
            <p class="text-sm text-gray-500">{{ $transaction->facility->title }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Kegiatan</li>
            <p class="text-sm text-gray-500">{{ $transaction->activity_name }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Penyewa</li>
            <p class="text-sm text-gray-500">{{ $transaction->user->name }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nomor Telepon</li>
            <p class="text-sm text-gray-500">{{ $transaction->phone_number }}</p>
          </ul>

        </div>

        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">Durasi Kegiatan</li>
            <p class="text-sm text-gray-500">{{ $transaction->duration_hours }} Jam</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Jadwal Kegiatan Berlangsung</li>
            <p class="text-sm text-gray-500">{{ $transaction->schedule_start }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Jadwal Kegiatan Selesai</li>
            <p class="text-sm text-gray-500">{{ $transaction->schedule_end }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Total Biaya</li>
            <p class="text-sm text-gray-500">Rp. {{ $transaction->amount }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Pesanan Dibuat</li>
            <p class="text-sm text-gray-500">{{ $transaction->created_at }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Bukti Transfer</li>
            <a href="#" class="text-sm font-medium text-blue-500 underline" id="showImage">Lihat Bukti
              Transfer</a>
          </ul>

          <!-- Create a hidden div for the pop-up image -->
          <div id="imagePopup"
            class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center z-50 bg-black bg-opacity-50">
            <div class="relative bg-white p-4 rounded shadow-lg">
              <a href="#" id="closeImagePopup"
                class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-lg">×</a>
              <img class="w-[750px] h-auto" src="https://mbkmunggul.usk.ac.id/assets/img/logo/logo_mbkm_dark.png"
                alt="Bukti Transfer" />
            </div>
          </div>

        </div>

        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">Bank Pengirim</li>
            <p class="text-sm text-gray-500">{{ $transaction->bank_name }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nomor Rekening Pengirim</li>
            <p class="text-sm text-gray-500">{{ $transaction->bank_account_number }}</p>
          </ul>
          <form class="confirmation-form"
            action="{{ route('admin.manajemen.sewa.facility.reject', $transaction->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
            <ul class="mt-5">
              <li class="text-base font-medium">Bukti Pengembalian Dana Jika Menolak Sewa</li>
              <input type="file" name="refund_proof" id="refund_proof"
                class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
              <p class="text-xs text-gray-500">
                Lampirkan file bukti transfer ke rekening pengirim jika menolak tawaran peminjaman
              </p>

            </ul>
            <ul class="mt-5">
              <li class="text-base font-medium">Alasan Menolak Sewa</li>
              <textarea type="text" name="message" id="message"
                class="text-sm h-28 w-full border  mt-2 rounded-md  bg-gray-50 " placeholder=""></textarea>
            </ul>
            <div class="block m-5 text-sm">
              <button type="submit" name="action" value="reject"
                class="w-full h-auto bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Tolak
                Sewa</button>
            </div>
          </form>
          <div class="block m-5 text-sm">
            <form action="{{ route('admin.manajemen.sewa.facility.confirm', $transaction->id) }}" method="POST">
              @csrf
              @method('PUT')
              <button type="submit" name="action" value="confirm"
                class="w-full h-auto bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Terima Sewa
              </button>
            </form>
          </div>
        </div>


      </div>



    </div>
  </div>

  <script>
    function confirmReject() {
      return confirm('Apakah Anda yakin ingin menolak?');
    }

    // Ambil semua elemen form dengan class "confirmation-form"
    const confirmationForms = document.querySelectorAll('.confirmation-form');

    // Loop melalui setiap form dan tambahkan event listener untuk menampilkan konfirmasi
    confirmationForms.forEach(form => {
      form.addEventListener('submit', function(event) {
        if (!confirmReject()) {
          event.preventDefault(); // Mencegah pengiriman form jika pengguna memilih "Batal"
        }
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const confirmationForm = document.querySelector(".confirmation-form");
      const refundProofInput = document.querySelector("#refund_proof");
      const messageInput = document.querySelector("#message");

      confirmationForm.addEventListener("submit", function(e) {
        if (refundProofInput.value === "" || messageInput.value === "") {
          e.preventDefault(); // Mencegah pengiriman formulir jika ada bidang yang kosong
          alert("Pastikan untuk mengisi kedua bidang yang diperlukan sebelum menolak.");
        }
      });
    });
  </script>

  <script>
    // Function to show the image pop-up
    function showImagePopup() {
      const imagePopup = document.getElementById('imagePopup');
      imagePopup.classList.remove('hidden');
    }

    // Function to close the image pop-up
    function closeImagePopup() {
      const imagePopup = document.getElementById('imagePopup');
      imagePopup.classList.add('hidden');
    }

    // Add event listeners to show and close the pop-up
    const showImageLink = document.getElementById('showImage');
    showImageLink.addEventListener('click', showImagePopup);

    const closeImageLink = document.getElementById('closeImagePopup');
    closeImageLink.addEventListener('click', closeImagePopup);
  </script>
@endsection
@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')

@section('sidebar-menu-desktop')
<div class="py-4 text-blue-gray">
  <a
    class="flex ml-8 items-center mt-1 mb-7"
    href="{{route('admin.dashboard')}}"
  >
    <img src="https://mbkmunggul.usk.ac.id/assets/img/logo/logo_mbkm_dark.png" alt="Logo" class="w-auto max-h-14">
  </a>

  <div class="block px-6 py-3">
    <span class="font-bold text-gray-400 ml-5 text-sm">ADMIN</span>
  </div>
  <ul>
    <li class="relative px-6 py-3 duration-150">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-deep-purple"
        href="{{route('admin.dashboard')}}"
      >
        <svg 
            class="w-5 h-5" 
            xmlns="http://www.w3.org/2000/svg" 
            fill="currentColor" 
            viewBox="0 0 24 24" 
            stroke="none">
            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" />
            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" opacity="0.3" />
          </svg>
        <span class="ml-4">Dashboard</span>
      </a>
    </li>
    <li class="relative px-6 py-3">
        <a
          class="inline-flex items-center w-full text-sm font-semibold text-blue-gray transition-colors duration-150 hover:text-deep-purple"
          href="{{route('admin.profile')}}"
        >
            <svg 
            class="w-5 h-5" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 24 24" 
            fill="currentColor" 
            stroke="none"
            >
            <path path path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" opacity="0.3"></path>
            <path path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"></path>
            </svg>
          <span class="ml-4">Profile</span>
        </a>
    </li>
    <li class="relative px-6 py-3">
      <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
        @click="toggleMenu(1)"
        aria-haspopup="true"
      >
        <span class="inline-flex items-center">
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
          </svg>
          <span class="ml-4">Manajemen Peminjaman</span>
        </span>
        <svg
          class="w-4 h-4"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <template x-if="isMenu1Open">
        <ul
          x-transition:enter="transition-all ease-in-out duration-300"
          x-transition:enter-start="opacity-25 max-h-0"
          x-transition:enter-end="opacity-100 max-h-xl"
          x-transition:leave="transition-all ease-in-out duration-300"
          x-transition:leave-start="opacity-100 max-h-xl"
          x-transition:leave-end="opacity-0 max-h-0"
          class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md"
          aria-label="submenu"
        >
          <li
            class="mt-2 px-2 py-1 transition-colors duration-150"
            >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg 
                class="w-2.5 h-2.5" 
                viewBox="0 0 11 11" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="{{route('admin.manajemen.peminjaman.facility')}}">Fasilitas Gelanggang</a>
            </span>
          </li>
          <li
            class="mt-2 px-2 py-1 transition-colors duration-150"
          >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg 
                class="w-2.5 h-2.5" 
                viewBox="0 0 11 11" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
            </span>
          </li>
        </ul>
      </template>
    </li>
    <li class="relative px-6 py-3" x-data="{ isMenu2Open:true }">
        <span
          class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg"
          aria-hidden="true">
        </span>
      <button
        class="inline-flex items-center justify-between w-full text-sm font-bold transition-colors duration-150 hover:text-deep-purple"
        @click="toggleMenu(2)"
        aria-haspopup="true"
      >
        <span class="inline-flex items-center text-yellow-orange">
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
          </svg>
          <span class="ml-4 text-deep-purple">Manajemen Konten</span>
        </span>
        <svg
          class="w-4 h-4"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <template x-if="isMenu2Open">
        <ul
          x-transition:enter="transition-all ease-in-out duration-300"
          x-transition:enter-start="opacity-25 max-h-0"
          x-transition:enter-end="opacity-100 max-h-xl"
          x-transition:leave="transition-all ease-in-out duration-300"
          x-transition:leave-start="opacity-100 max-h-xl"
          x-transition:leave-end="opacity-0 max-h-0"
          class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md"
          aria-label="submenu"
        >
          <li
            class="mt-2 px-2 py-1 transition-colors duration-150 text-deep-purple"
          >
            <span class="inline-flex items-center font-bold justify-between w-full hover:text-deep-purple">
              <svg 
                class="w-2.5 h-2.5  text-yellow-orange" 
                viewBox="0 0 11 11" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="{{route('admin.manajemen.konten.facility')}}">Fasilitas Gelanggang</a>
            </span>
          </li>
          <li
            class="mt-2 px-2 py-1 transition-colors duration-150"
          >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg 
                class="w-2.5 h-2.5" 
                viewBox="0 0 11 11" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
            </span>
          </li>
        </ul>
      </template>
    </li>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-red-800"
        href="{{route('admin.logout')}}"
      >
        <svg 
          class="w-5 h-5" 
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 24 24" 
          fill="currentColor" 
          stroke="none"
          fill-rule="evenodd">
            <polygon fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684"></polygon>
            <path d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z"></path>
        </svg>
        <span class="ml-4">Keluar</span>
      </a>
    </li>
  </ul>
</div>
@endsection

@section('sidebar-menu-mobile')
<div class="text-blue-gray">
  <div class="block  px-6 py-3">
    <span class="font-bold text-slate-600 ml-5 text-sm">ADMIN</span>
  </div>
  <ul>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
        href="index.html"
      >
        <svg 
          class="w-5 h-5" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="currentColor" 
          viewBox="0 0 24 24" 
          stroke="none">
          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" />
          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" opacity="0.3" />
        </svg>
        <span class="ml-4">Dashboard</span>
      </a>
    </li>
  </ul>
  <ul>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
        href="forms.html"
      >
        <svg 
          class="w-5 h-5" 
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 24 24" 
          fill="currentColor" 
          stroke="none">
          <path path path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" opacity="0.3"></path>
          <path path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"></path>
        </svg>
        <span class="ml-4">Profile</span>
      </a>
    </li>
    <li class="relative px-6 py-3">
      <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
        @click="toggleMenu(1)"
        aria-haspopup="true"
      >
        <span class="inline-flex items-center">
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
          </svg>
          <span class="ml-4">Manajemen Peminjaman</span>
        </span>
        <svg
          class="w-4 h-4"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <template x-if="isMenu1Open">
        <ul
          x-transition:enter="transition-all ease-in-out duration-300"
          x-transition:enter-start="opacity-25 max-h-0"
          x-transition:enter-end="opacity-100 max-h-xl"
          x-transition:leave="transition-all ease-in-out duration-300"
          x-transition:leave-start="opacity-100 max-h-xl"
          x-transition:leave-end="opacity-0 max-h-0"
          class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md"
          aria-label="submenu"
        >
          <li
            class="px-2 py-1 transition-colors duration-150"
          >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Fasilitas Gelanggang</a>
            </span>
          </li>
          <li
            class="mt-1 px-2 py-1 transition-colors duration-150 hover:text-deep-purple"
          >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
            </span>
          </li>
        </ul>
      </template>
    </li>
    <li class="relative px-6 py-3" x-data="{ isMenu2Open:true }">
      <span
        class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
      ></span>
      <button
        class="inline-flex items-center justify-between w-full text-sm font-bold transition-colors duration-150 hover:text-deep-purple"
        @click="toggleMenu(2)"
        aria-haspopup="true"
      >
        <span class="inline-flex items-center text-yellow-orange">
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
            ></path>
          </svg>
          <span class="ml-4 text-deep-purple">Manajemen Konten</span>
        </span>
        <svg
          class="w-4 h-4"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <template x-if="isMenu2Open">
        <ul
          x-transition:enter="transition-all ease-in-out duration-300"
          x-transition:enter-start="opacity-25 max-h-0"
          x-transition:enter-end="opacity-100 max-h-xl"
          x-transition:leave="transition-all ease-in-out duration-300"
          x-transition:leave-start="opacity-100 max-h-xl"
          x-transition:leave-end="opacity-0 max-h-0"
          class="p-1 space-y-3 overflow-hidden text-sm font-medium text-blue-gray rounded-md"
          aria-label="submenu"
        >
          <li
            class="px-2 py-1 transition-colors duration-150 text-deep-purple"
          >
            <span class="inline-flex items-center font-bold justify-between w-full hover:text-deep-purple">
              <svg 
                class="w-2.5 h-2.5 text-yellow-orange" 
                viewBox="0 0 11 11" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                >
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Fasilitas Gelanggang</a>
            </span>
          </li>
          <li
            class="mt-1 px-2 py-1 transition-colors duration-150 hover:text-deep-purple"
          >
            <span class="inline-flex items-center justify-between w-full hover:text-deep-purple">
              <svg class="w-2.5 h-2.5" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="5.456" cy="5.5" rx="4.09174" ry="4.125" fill="currentColor"/>
              </svg>
              <a class="w-full ml-5" href="pages/login.html">Kesenian & Alat Olahraga</a>
            </span>
          </li>
        </ul>
      </template>
    </li>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-red-800"
        href="form.html"
      >
        <svg 
          class="w-5 h-5" 
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 24 24" 
          fill="currentColor" 
          stroke="none"
          fill-rule="evenodd"
        >
          <polygon fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684"></polygon>
          <path d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z"></path>
        </svg>
        <span class="ml-4">Keluar</span>
      </a>
    </li>
  </ul>

</div>
@endsection

@section('content')

<div class=" m-10 flex items-center justify-center font-dmsans">
  <div class="container max-w-screen-lg mx-auto">
    @if ($errors->any())
    <div class="mb-4" role="alert">
      <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        Danger
      </div>
      <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
        <ul>
          @foreach($errors->all() as $errors)
            <li>{{ $errors }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
    <div>
      <h2 class="font-semibold text-xl text-blue-gray">Edit Fasilitas Gelanggang</h2>
      <p class="text-gray-500 mb-6 text-sm">Form untuk mengedit kontent</p>
      <!-- Form Start -->
      <form enctype="multipart/form-data" action="{{ route('admin.manajemen.konten.facility.update', $facility->id) }}" method="POST" id="facilityForm">
        @csrf
        @method('PUT')
        <section>
          <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div>
              <p class="mt-8 mx-10 font-bold">Informasi Fasilitas</p>
            </div>

            <div class="mt-4 mb-4 mx-10 ">            
              <div class="flex py-3 mx-2">
                <div class="w-[250px] mt-5  font-semibold">
                  <p>Nama</p>
                  <p>Fasilitas</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan nama fasilitas</p>
                </div>
  
                <div class="flex items-center">
                  <div class="flex w-[600px]">
                    <input type="text" name="title" id="title" class="h-10 border mt-2 rounded px-4 w-full text-sm bg-gray-50" value="{{ $facility->title }}"/>
                  </div>
                </div>     
              </div>
              <div class="flex py-3 mx-2">
                <div class="w-[250px] mt-5  font-semibold">
                  <p>Kategori</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Pilih kategori fasilitas</p>
                </div>
  
                <div class="flex items-center">
                  <div class="flex w-[600px]">
                    <select type="text" name="categories" id="categories" class="h-10 border mt-2 rounded px-4 w-full bg-gray-50 text-sm">
                      <option value="" disabled selected>Pilih kategori</option>
                      <option value="Lapangan Indoor" {{ $facility->categories == 'Lapangan Indoor' ? 'selected' : '' }}>Lapangan Indoor</option>
                      <option value="Lapangan Outdoor" {{ $facility->categories == 'Lapangan Outdoor' ? 'selected' : '' }}>Lapangan Outdoor</option>
                      <option value="Ruangan" {{ $facility->categories == 'Ruangan' ? 'selected' : '' }}>Ruangan</option>
                      <option value="Prasarana" {{ $facility->categories == 'Prasarana' ? 'selected' : '' }}>Prasarana</option>
                    </select>
                  </div>
                </div>     
              </div>

            </div>       
          </div>
        </section>

        <section>
          <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div>
              <p class="mt-8 mx-10 font-bold">Detail Fasilitas</p>
            </div>
            <div class="mt-4 mb-4 mx-10 ">            
              <div class="flex py-6 mx-2">
                <div class="mt-5 w-[240px] font-semibold">
                  <p>Foto</p>
                  <p>Fasilitas</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Unggah Foto Fasilitas</p>
                </div>
  
                <div class="grid grid-cols-4 gap-3">
                  <div class="items-center justify-center w-full">
                    <label for="image1_detail" class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <img id="selected-image-1" src="" alt="" class="w-full h-full hidden">
                        <p id="image-text-1" class="mb-2 text-base text-gray-500">Foto Utama</p>
                      </div>
                      <input id="image1_detail" name="image1_detail" type="file" class="hidden" accept="image/*">
                    </label>
                  </div>
                  <div class=" items-center justify-center w-full">
                    <label for="image2_detail" class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <img id="selected-image-2" src="" alt="" class="w-full h-full hidden">
                        <p id="image-text-2" class="mb-2 text-base text-gray-500">Foto 2</p>
                      </div>
                      <input id="image2_detail" name="image2_detail" type="file" class="hidden" accept="image/*">
                    </label>
                  </div>
                  <div class=" items-center justify-center w-full">
                    <label for="image3_detail" class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <img id="selected-image-3" src="" alt="" class="w-full h-full hidden">
                        <p id="image-text-3" class="mb-2 text-base text-gray-500">Foto 3</p>
                      </div>
                      <input id="image3_detail" name="image3_detail" type="file" class="hidden" accept="image/*">
                    </label>
                  </div>
                  <div class="items-center justify-center w-full">
                    <label for="image4_detail" class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <img id="selected-image-4" src="" alt="" class="w-full h-full hidden">
                        <p id="image-text-4" class="mb-2 text-base text-gray-500">Foto 4</p>
                      </div>
                      <input id="image4_detail" name="image4_detail" type="file" class="hidden" accept="image/*">
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="flex py-6 mx-2">
                <div class="mt-5 w-[250px] font-semibold">
                  <p>Deskripsi</p>
                  <p>Fasilitas</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Tuliskan deskripsi fasilitas</p>
                </div>
                <textarea type="text" name="about" id="about" class="text-sm h-64 w-[600px] border  mt-2 rounded-md  bg-gray-50 " placeholder="" >{{ $facility->about }}</textarea>

              </div>

              
            </div>
            
          </div>
        </section>

        <section>
          <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div>
              <p class="mt-8 mx-10 font-bold">Harga Sewa</p>
            </div>
            <div class="mt-4 mb-4 mx-10 ">            
              <div class="flex py-3 mx-2">
                <div class="w-[250px] mt-5  font-semibold">
                  <p>Harga</p>
                  <p>Per Jam</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan harga sewa 1 jam</p>
                </div>
  
                <div class="flex items-center">
                  <div class="flex w-[600px]">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                      <div class="text-gray-500 font-bold">
                        Rp
                      </div>
                    </span>
                    <input type="text" id="price_per_hour" name="price_per_hour" class="rounded-none rounded-r-md bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="misal: 250000" value="{{ $facility->price_per_hour }}">
                  </div>
                </div>     
              </div>
            </div>

            <div class="mt-4 mb-4 mx-10 ">            
              <div class="flex py-3 mx-2">
                <div class="w-[250px] mt-5  font-semibold">
                  <p>Harga</p>
                  <p>Per Hari</p>
                  <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan harga sewa 1 Hari &#40;7 jam&#41;</p>
                </div>
  
                <div class="flex items-center">
                  <div class="flex w-[600px]">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                      <div class="text-gray-500 font-bold">
                        Rp
                      </div>
                    </span>
                    <input type="text" id="price_per_day" name="price_per_day" class="rounded-none rounded-r-md bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="misal: 2000000" value="{{ $facility->price_per_day }}">
                  </div>
                </div>     
              </div>
            </div>
            
          </div>
        </section>

        <section>
          <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div>
              <p class="mt-8 mx-10 font-bold">Pengelolaan Fasilitas</p>
            </div>
            <div class="lg:col-span-2 mt-8 mb-4 mx-10 ">            
              <div class="grid gap-4 gap-y-3 text-sm grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-2 mb-5">
                  <label for="show" class="font-medium after:content-['*'] after:text-red-500">Tampilkan</label>
                  <select type="text" name="show" id="show" class="h-10 border mt-2 rounded px-4 w-full bg-gray-50">
                    <option value="" disabled selected>Pilih tampilkan/sembunyikan konten</option>
                    <option value="0" {{ $facility->show == '0' ? 'selected' : '' }} >Sembunyikan</option>
                    <option value="1" {{ $facility->show == '1' ? 'selected' : '' }}>Tampilkan</option>
                  </select>
                  <p class="text-xs mt-2 text-[#858584]">Pilih kategori fasilitas</p>
                </div>
              </div>
            </div>
            
          </div>
        </section>

        <div class="md:col-span-5 text-right">
          <div class="flex items-end">
            <button type="button" id="deleteButton" class="bg-red-500 mx-2 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus Fasilitas</button>
            <div class="ml-auto">
              <a href="{{ route('admin.manajemen.konten.facility') }}" class="bg-gray-400 mx-2 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
              <button type="submit" name="action" value="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Perbarui</button>
            </div>
          </div>
        </div>     

      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('deleteButton').addEventListener('click', function() {
      if (confirm("Apakah Anda yakin ingin menghapus fasilitas ini?")) {
          var form = document.getElementById('facilityForm');
          var inputMethod = document.createElement('input');
          inputMethod.type = 'hidden';
          inputMethod.name = '_method';
          inputMethod.value = 'DELETE';
          form.appendChild(inputMethod);

          form.action = "{{ route('admin.manajemen.konten.facility.destroy', $facility->id) }}";
          form.submit();
      }
  });
</script>

@endsection
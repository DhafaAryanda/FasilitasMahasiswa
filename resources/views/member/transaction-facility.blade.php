@extends('admin.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Fasilitas Gelanggang')

@section('sidebar-menu-desktop')
  <div class="py-4 text-gray-500">
    <a class="flex ml-8 items-center mt-1 mb-7" href="#">
      <img src="https://mbkmunggul.usk.ac.id/assets/img/logo/logo_mbkm_dark.png" alt="Logo" class="w-auto max-h-14">
    </a>

    <div class="block px-6 py-3">
      <span class="font-bold text-gray-400 ml-5 text-sm">@yield('role')</span>
    </div>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold text-blue-gray transition-colors duration-150 hover:text-deep-purple"
          href="index.html">
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
      <li class="relative px-6 py-3 duration-150">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-deep-purple"
          href="forms.html">
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
      <li class="relative px-6 py-3 duration-150">
        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg" aria-hidden="true">
        </span>
        <a class="inline-flex items-center w-full text-sm font-bold transition-colors duration-150 text-deep-purple hover:text-deep-purple"
          href="forms.html">
          <svg class="w-5 h-5 text-yellow-orange" aria-hidden="true" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
            </path>
          </svg>
          <span class="ml-4">Fasilitas Gelanggang</span>
        </a>
      </li>
      <li class="relative px-6 py-3 duration-150">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-deep-purple"
          href="forms.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
            </path>
          </svg>
          <span class="ml-4">Kesenian & Alat Olahraga</span>
        </a>
      </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-blue-gray hover:text-red-800"
          href="forms.html">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"
            fill-rule="evenodd">
            <polygon fill-rule="nonzero" opacity="0.3" points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684"></polygon>
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
      <span class="font-bold text-slate-600 ml-5 text-sm">@yield('role')</span>
    </div>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          href="index.html">
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
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          href="forms.html">
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
      <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg" aria-hidden="true">
        </span>
        <a class="inline-flex items-center w-full text-sm font-bold text-deep-purple transition-colors duration-150 hover:text-deep-purple"
          href="forms.html">
          <svg class="w-5 h-5 text-yellow-orange" aria-hidden="true" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
            </path>
          </svg>
          <span class="ml-4">Fasilitas Gelanggang</span>
        </a>
      </li>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          href="forms.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
            </path>
          </svg>
          <span class="ml-4">Kesenian & Alat Olahraga</span>
        </a>
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

@section('sidebar-menu-mobile')
  <div class="text-blue-gray">
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
      <li class="relative px-6 py-3">
        <button
          class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(1)" aria-haspopup="true">
          <span class="inline-flex items-center">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4">Manajemen Peminjaman</span>
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
      <li class="relative px-6 py-3" x-data="{ isMenu2Open: true }">
        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-orange rounded-tr-lg rounded-br-lg"
          aria-hidden="true"></span>
        <button
          class="inline-flex items-center justify-between w-full text-sm font-bold transition-colors duration-150 hover:text-deep-purple"
          @click="toggleMenu(2)" aria-haspopup="true">
          <span class="inline-flex items-center text-yellow-orange">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
            <span class="ml-4 text-deep-purple">Manajemen Konten</span>
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

  {{-- transaction-facility --}}


  <div class=" m-10 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      @if ($errors->any())
        <div class="mb-4" role="alert">
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Danger
          </div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul>
              @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
      <div>
        <h2 class="font-semibold text-xl text-slate-700 mb-6">Sewa Fasilitas</h2>
        <!-- Form Start -->
        <form class="mb-20" action="{{ route('member.transaction.store', ['id' => $facility->id]) }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-5">
              <div class="items-center mb-3">
                <p class=" mx-10 mt-3 mb-2  font-bold">Form Sewa Fasilitas</p>
                <hr>
              </div>
              <div class="flex mb-5">

                <div class="flex-1 mx-5">

                  <div class="mt-4 mb-4 mx-5 text-sm">
                    <div class="md:col-span-5 mb-5">
                      <h4 for="title" class="font-medium ">Fasilitas</h4>
                      <h4 class="flex items-center font-medium bg-gray-50 h-10 border mt-2 rounded px-4 w-full">
                        {{ $facility->title }}
                      </h4>
                    </div>
                    <div class="md:col-span-5 mb-5">
                      <h4 for="title" class="font-medium ">Nama Pemohon</h4>
                      <h4 class="flex items-center font-medium bg-gray-50 h-10 border mt-2 rounded px-4 w-full">
                        {{ $user->name }}
                      </h4>
                      <p class="text-xs mt-2 text-[#858584]">Nama pemohon penyewa fasilitas</p>
                    </div>
                    <div class="md:col-span-5 mb-5">
                      <label for="phone_number" class="font-medium after:content-['*'] after:text-red-500 ">Nomor
                        Telepon</label>
                      <input type="text" name="phone_number" id="phone_number"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan Nomor Telepon yang menggunakan Whatsapp</p>
                    </div>
                    <div class="md:col-span-5 mb-5">
                      <label for="description" class="font-medium after:content-['*'] after:text-red-500 ">Deskripsi
                        Kegiatan</label>
                      <textarea type="text" name="description" id="description" class="h-24 border mt-2 rounded px-4 w-full bg-gray-50"
                        placeholder=""></textarea>
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan keperluan Nomor Telepon yang menggunakan Whatsapp
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex-1 mx-5">

                  <div class="mt-4 mb-4 mx-5 text-sm">
                    <div class="md:col-span-5 mb-5">
                      <label for="activity_name" class="font-medium after:content-['*'] after:text-red-500 ">Nama
                        Kegiatan</label>
                      <input type="text" name="activity_name" id="activity_name"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan nama kegiatan atau acara</p>
                    </div>
                    <div class="md:col-span-5 mb-5">
                      <label for="schedule_start" class="font-medium after:content-['*'] after:text-red-500 ">Jadwal
                        Kegiatan
                        Berlangsung</label>
                      <input type="text" name="schedule_start" id="schedule_start"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan nama fasilitas</p>
                    </div>
                    <div class="md:col-span-5 mb-5">
                      <label for="duration_hours" class="font-medium after:content-['*'] after:text-red-500 ">Durasi
                        Kegiatan</label>
                      <input type="text" name="duration_hours" id="duration_hours"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan durasi kegiatan dalam jam</p>
                    </div>
                    <div x-data="datetimepicker()" x-init="[initDate(), getNoOfDays()]" x-cloak class="md:col-span-5 mb-5 ">
                      <label for="duration_hours" class="font-medium after:content-['*'] after:text-red-500 ">Durasi
                        Kegiatan</label>
                      <div class="relative">
                        <input type="hidden" name="date" x-ref="date" :value="datepickerValue" />
                        <input type="text" x-on:click="showDatepicker = !showDatepicker" x-model="datepickerValue"
                          x-on:keydown.escape="showDatepicker = false"
                          class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 font-medium focus:ring focus:ring-blue-600 focus:ring-opacity-50"
                          placeholder="Select date" readonly />

                        <div class="absolute top-0 right-0 px-3 py-2">
                          <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                        </div>

                        <!-- <div x-text="no_of_days.length"></div>
                                                                                                                                                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                                                                                                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                        <div class="flex flex-col gap-5 bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                          style="width: 17rem" x-show.transition="showDatepicker" @click.away="showDatepicker = false">
                          <div class="bg-gray-100 border rounded w-full h-full p-2">
                            <div class="flex justify-between items-center mb-2">
                              <div>
                                <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                              </div>
                              <div>
                                <button type="button"
                                  class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                  @click="if (month == 0) {
                                              year--;
                                              month = 12;
                                            } month--; getNoOfDays()">
                                  <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7" />
                                  </svg>
                                </button>
                                <button type="button"
                                  class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                  @click="if (month == 11) {
                                              month = 0; 
                                              year++;
                                            } else {
                                              month++; 
                                            } getNoOfDays()">
                                  <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 5l7 7-7 7" />
                                  </svg>
                                </button>
                              </div>
                            </div>

                            <div class="flex flex-wrap mb-3 -mx-1">
                              <template x-for="(day, index) in DAYS" :key="index">
                                <div style="width: 14.26%" class="px-0.5">
                                  <div x-text="day" class="text-gray-800 font-medium text-center text-xs"></div>
                                </div>
                              </template>
                            </div>

                            <div class="flex flex-wrap -mx-1">
                              <template x-for="blankday in blankdays">
                                <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm">
                                </div>
                              </template>
                              <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%" class="px-1 mb-1">
                                  <div @click="getDateValue(date)" x-text="date"
                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                    :class="{
                                        'bg-indigo-200': isToday(date) == true,
                                        'text-gray-600 hover:bg-indigo-200': isToday(date) == false &&
                                            isSelectedDate(date) == false,
                                        'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                    }">
                                  </div>
                                </div>
                              </template>
                            </div>

                          </div>
                          <div class="bg-gray-100 border rounded w-full h-full">
                            <label for="datepicker" class="font-bold mx-3 my-3 text-gray-700 block">Pilih Jam</label>
                            <div class="grid grid-cols-3 gap-2 p-2">
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  07:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  08:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  09:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  10:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  11:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  12:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  13:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  14:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  15:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  16:00
                                </button>
                              </div>
                              <div
                                class="rounded-md bg-white border hover:border-red-200 hover:bg-red-200 text-black font-bold px-3 py-2">
                                <button>
                                  17:00
                                </button>
                              </div>





                            </div>
                          </div>

                        </div>
                      </div>
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan durasi kegiatan dalam jam</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="flex justify-end mx-10">
            <a href="{{ route('member.dashboard') }}"
              class="bg-gray-400 mx-2 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg">Kembali</a>
            <button type="submit" name="action" value="update"
              class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">Berikutnya</button>
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection

<script>
  const MONTH_NAMES = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const MONTH_SHORT_NAMES = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  function datetimepicker() {
    return {
      showDatepicker: false,
      datepickerValue: "",
      selectedDate: "2023-11-16",
      dateFormat: "DD-MM-YYYY",
      month: "",
      year: "",
      no_of_days: [],
      blankdays: [],
      initDate() {
        let today;
        if (this.selectedDate) {
          today = new Date(Date.parse(this.selectedDate));
        } else {
          today = new Date();
        }
        this.month = today.getMonth();
        this.year = today.getFullYear();
        this.datepickerValue = this.formatDateForDisplay(
          today
        );
      },
      formatDateForDisplay(date) {
        let formattedDay = DAYS[date.getDay()];
        let formattedDate = ("0" + date.getDate()).slice(
          -2
        ); // appends 0 (zero) in single digit date
        let formattedMonth = MONTH_NAMES[date.getMonth()];
        let formattedMonthShortName =
          MONTH_SHORT_NAMES[date.getMonth()];
        let formattedMonthInNumber = (
          "0" +
          (parseInt(date.getMonth()) + 1)
        ).slice(-2);
        let formattedYear = date.getFullYear();
        if (this.dateFormat === "DD-MM-YYYY") {
          return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
        }
        if (this.dateFormat === "YYYY-MM-DD") {
          return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
        }
        if (this.dateFormat === "D d M, Y") {
          return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
        }
        return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
      },
      isSelectedDate(date) {
        const d = new Date(this.year, this.month, date);
        return this.datepickerValue ===
          this.formatDateForDisplay(d) ?
          true :
          false;
      },
      isToday(date) {
        const today = new Date();
        const d = new Date(this.year, this.month, date);
        return today.toDateString() === d.toDateString() ?
          true :
          false;
      },
      getDateValue(date) {
        let selectedDate = new Date(
          this.year,
          this.month,
          date
        );
        this.datepickerValue = this.formatDateForDisplay(
          selectedDate
        );
        // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
        this.isSelectedDate(date);
        this.showDatepicker = false;
      },
      getNoOfDays() {
        let daysInMonth = new Date(
          this.year,
          this.month + 1,
          0
        ).getDate();
        // find where to start calendar day of week
        let dayOfWeek = new Date(
          this.year,
          this.month
        ).getDay();
        let blankdaysArray = [];
        for (var i = 1; i <= dayOfWeek; i++) {
          blankdaysArray.push(i);
        }
        let daysArray = [];
        for (var i = 1; i <= daysInMonth; i++) {
          daysArray.push(i);
        }
        this.blankdays = blankdaysArray;
        this.no_of_days = daysArray;
      },
    };
  }
</script>

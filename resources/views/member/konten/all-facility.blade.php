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
          href="{{ route('member.dashboard') }}">
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
          href="{{ route('member.profile') }}">
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
          href="{{ route('member.konten.facility') }}">
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
          href="#">
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
          href="{{ route('member.logout') }}">
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

@section('content')

  <div class=" p-10 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <div x-data="alpineInit()" x-init="init()">
        <div class="flex mb-6 items-center">
          <div class="flex-auto">
            <h2 class="font-semibold text-xl text-blue-gray">Prasarana Universitas Syiah Kuala</h2>
            <p class="text-gray-500 text-sm">Temukan Fasilitas Sesuai kebutuhan anda</p>
          </div>
          <a href="{{ route('member.konten.facility.all') }}"
            class="flex items-center gap-2 text-xs font-semibold bg-white px-2 py-1 rounded-2xl border-yellow-orange border-2">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.33931 6.74556C4.8292 5.25567 7.16714 3.75 10.5 3.75C13.8329 3.75 16.1708 5.25567 17.6607 6.74556C18.4038 7.4887 18.9397 8.23076 19.2906 8.78809C19.4664 9.06724 19.5966 9.30146 19.684 9.4683C19.7277 9.55176 19.7608 9.61849 19.7835 9.66569C19.7949 9.6893 19.8037 9.70804 19.8099 9.72157L19.8174 9.7379L19.8197 9.74306L19.8206 9.74487L19.8209 9.74558C19.821 9.74588 19.8211 9.74616 19.25 10C19.8211 10.2538 19.821 10.2541 19.8209 10.2544L19.8206 10.2551L19.8197 10.2569L19.8174 10.2621L19.8099 10.2784C19.8037 10.292 19.7949 10.3107 19.7835 10.3343C19.7608 10.3815 19.7277 10.4482 19.684 10.5317C19.5966 10.6985 19.4664 10.9328 19.2906 11.2119C18.9397 11.7692 18.4038 12.5113 17.6607 13.2544C16.1708 14.7443 13.8329 16.25 10.5 16.25C7.16714 16.25 4.8292 14.7443 3.33931 13.2544C2.59617 12.5113 2.0603 11.7692 1.70939 11.2119C1.53362 10.9328 1.40337 10.6985 1.31598 10.5317C1.27227 10.4482 1.23921 10.3815 1.21648 10.3343C1.20511 10.3107 1.19632 10.292 1.19007 10.2784L1.18258 10.2621L1.18026 10.2569L1.17944 10.2551L1.17913 10.2544C1.17899 10.2541 1.17887 10.2538 1.75 10C1.17887 9.74616 1.17899 9.74588 1.17913 9.74558L1.17944 9.74487L1.18026 9.74306L1.18258 9.7379L1.19007 9.72157C1.19632 9.70804 1.20511 9.6893 1.21648 9.66569C1.23921 9.61849 1.27227 9.55176 1.31598 9.4683C1.40337 9.30146 1.53362 9.06724 1.70939 8.78809C2.0603 8.23076 2.59617 7.4887 3.33931 6.74556ZM1.75 10L1.17887 9.74616C1.10704 9.90777 1.10704 10.0922 1.17887 10.2538L1.75 10ZM2.44882 10C2.52235 10.1377 2.62794 10.3248 2.76718 10.5459C3.08033 11.0433 3.56008 11.7074 4.22319 12.3706C5.5458 13.6932 7.58286 15 10.5 15C13.4171 15 15.4542 13.6932 16.7768 12.3706C17.4399 11.7074 17.9197 11.0433 18.2328 10.5459C18.3721 10.3248 18.4777 10.1377 18.5512 10C18.4777 9.86227 18.3721 9.67524 18.2328 9.4541C17.9197 8.95674 17.4399 8.29255 16.7768 7.62944C15.4542 6.30683 13.4171 5 10.5 5C7.58286 5 5.5458 6.30683 4.22319 7.62944C3.56008 8.29255 3.08033 8.95674 2.76718 9.4541C2.62794 9.67524 2.52235 9.86227 2.44882 10ZM19.25 10L19.8211 10.2538C19.893 10.0922 19.893 9.90777 19.8211 9.74616L19.25 10Z"
                fill="#E59934" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5ZM6.75 10C6.75 7.92893 8.42893 6.25 10.5 6.25C12.5711 6.25 14.25 7.92893 14.25 10C14.25 12.0711 12.5711 13.75 10.5 13.75C8.42893 13.75 6.75 12.0711 6.75 10Z"
                fill="#E59934" />
            </svg>

            <p>Lihat Semua</p>
          </a>

        </div>

        <div class="grid grid-cols-3 gap-4">
          @foreach ($facilities as $facility)
            <div
              class="relative flex flex-col text-gray-700 bg-white shadow-md w-[310px]  rounded-[20px] bg-clip-border">
              <div
                class="relative mx-[10px] my-[10px] overflow-hidden text-white shadow-lg rounded-[20px] bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
                <img src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img"
                  class="w-[290px] h-[200px] object-cover" />
              </div>
              <div class="px-6 mt-2 mb-5">
                <h5
                  class="block mb-[10px] font-poppins text-base antialiased font-medium leading-snug tracking-normal text-blue-gray-900">
                  {{ $facility->title }}
                </h5>
                <div class="flex flex-row justify-between items-center">

                  <div class="flex flex-col">
                    <h6 class="mt-2 text-xs font-poppins font-normal text-[#858584]">
                      Harga
                    </h6>
                    <h6 class="mt-2 text-xs font-poppins font-normal">
                      Rp. {{ number_format($facility->price_per_hour, 2, ',', '.') }}/hrs
                    </h6>
                  </div>
                  <a href="{{ route('member.konten.facility.detail', $facility->id) }}"
                    class=" flex justify-center items-center rounded-3xl w-20 h-8 bg-yellow-orange text-center align-middle font-sans text-xs font-medium text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg  focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Detail
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection

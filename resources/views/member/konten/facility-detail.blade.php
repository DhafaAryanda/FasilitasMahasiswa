@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Fasilitas Gelanggang')

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
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"
            fill-rule="evenodd">
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

  <div x-data="{ showSchedule: false }" class="p-10 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <h2 class="font-bold text-2xl text-slate-800">{{ $facility->title }}</h2>

        <div class="flex flex-row gap-4 my-10">
          <div class="w-[800px] h-[500px]">
            <img id="featured-image" class="w-full h-full object-cover rounded-lg"
              src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img">
          </div>
          <div class="flex flex-col gap-4">
            <div class="w-44 h-24">
              <img class="w-full h-full object-cover rounded-lg"
                src="{{ asset('storage/detail/' . $facility->image2_detail) }}" alt="img"
                onclick="setFeaturedImage(this)">
            </div>
            @if (isset($facility->image3_detail))
              <div class="w-44 h-28">
                <img class="w-full h-full object-cover rounded-lg"
                  src="{{ asset('storage/detail/' . $facility->image3_detail) }}" alt="img"
                  onclick="setFeaturedImage(this)">
              </div>
            @endif

            @if (isset($facility->image4_detail))
              <div class="w-44 h-24">
                <img class="w-full h-full object-cover rounded-lg"
                  src="{{ asset('storage/detail/' . $facility->image4_detail) }}" alt="img"
                  onclick="setFeaturedImage(this)">
              </div>
            @endif

            <a href="{{ route('member.transaction', ['id' => $facility->id]) }}">
              <button
                class="justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 w-44 border-2 border-yellow-orange">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                    stroke="#E59934" stroke-width="1.2" />
                  <path d="M12.6783 11.2322L9.14277 14.7678L7.375 13" stroke="#E59934" stroke-width="1.2"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.75 6.875V5C13.75 2.92893 12.0711 1.25 10 1.25V1.25C7.92893 1.25 6.25 2.92893 6.25 5V6.875"
                    stroke="#E59934" stroke-width="1.2" stroke-linecap="round" />
                </svg>
                <span class="text-black text-sm font-semibold">Sewa Sekarang</span>
              </button>
            </a>
            <button @click="showSchedule = {{ $facility->id }}"
              class="justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 w-44 border-2 border-blue-400">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                  stroke="#858584" stroke-width="1.2" />
              </svg>
              <span class="text-black text-sm font-semibold">Lihat Jadwal</span>
            </button>
          </div>
        </div>

        <div x-show="showSchedule === {{ $facility->id }}" x-transition:enter="ease-out duration-300"
          x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-90"
          class="fixed flex justify-center items-center top-0 left-0 w-full h-full z-50"
          style="background-color: rgba(0,0,0,0.5)">
          <div
            class="container py-10 px-12 w-7/12 h-auto bg-white rounded-lg border border-gray-200 shadow-md relative z-50">
            <h2 class="text-xl font-semibold mb-3">Jadwal Tersedia</h2>
            <div class="flex mx-5 my-5">

              {{-- <input id="datetimepicker" type="text" class="h-10 border mt-2 rounded px-4 w-full bg-gray-50"
                readonly />
                 --}}

              {{-- <form action="{{ route('member.transaction.show.schedule', $transaction->id) }}" method="get">

                <label for="targetDateTime">Target Date and Time:</label>
                <input type="datetime-local" id="targetDateTime" name="targetDateTime" required>
                <button type="submit">Show Transactions</button>
              </form> --}}
              @foreach ($transactions as $transaction)
                <div>
                  nama aktivitas: {{ $transaction->activity_name }}
                  Jadwal: {{ $transaction->schedule_start }}
                </div>
              @endforeach



            </div>
            <div class="flex justify-end pt-2">
              <a class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
                action
              </a>
              <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                @click="showSchedule = false">Close</button>
            </div>

          </div>

        </div>

        <h4 class="font-semibold text-xl text-slate-800 my-3">About</h4>
        <p>{!! $facility->about !!}</p>


      </div>
    </div>
  </div>

  <script>
    // Fungsi untuk mengganti "featured image" saat mengklik gambar lain
    function setFeaturedImage(clickedImage) {
      const featuredImage = document.getElementById('featured-image');
      const tempImageUrl = featuredImage.src;
      featuredImage.src = clickedImage.src;
      clickedImage.src = tempImageUrl;
    }
  </script>
@endsection

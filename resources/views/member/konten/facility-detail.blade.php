@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Prasarana')

@section('content')

  <div x-data="{ showSchedule: false }" class="sm:p-10 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <div class="flex flex-col">
        <h2 class="order-2 sm:order-1 font-bold text-lg sm:text-xl md:text-2xl text-slate-800 mx-5 my-5 sm:my-1 sm:mx-1">
          {{ $facility->title }}
        </h2>

        <div class="order-1 sm:order-2 flex flex-col lg:flex-row gap-4 my-2 mx-1 sm:mx-0 ">
          <div
            class="w-full h-[300px] sm:w-full sm:h-[350px] md:w-full md:h-[390px] lg:w-[750px] lg:h-[500px] xl:w-[800px] xl:h-[500px]">
            <img id="featured-image" class="w-full h-full object-cover sm:rounded-lg"
              src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img">
          </div>
          <div class="flex flex-row lg:flex-col gap-4 mx-4 sm:mx-0">
            <div class="w-20 h-16 sm:w-28 sm:h-20 md:w-32 md:h-20 lg:w-48 lg:h-28 xl:w-52 xl:h-28">
              <img class="w-full h-full object-cover rounded-lg"
                src="{{ asset('storage/detail/' . $facility->image2_detail) }}" alt="img"
                onclick="setFeaturedImage(this)">
            </div>
            @if (isset($facility->image3_detail))
              <div class="w-20 h-16 sm:w-28 sm:h-20 md:w-32 md:h-20 lg:w-48 lg:h-28 xl:w-52 xl:h-28">
                <img class="w-full h-full object-cover rounded-lg"
                  src="{{ asset('storage/detail/' . $facility->image3_detail) }}" alt="img"
                  onclick="setFeaturedImage(this)">
              </div>
            @endif

            @if (isset($facility->image4_detail))
              <div class="w-20 h-16 sm:w-28 sm:h-20 md:w-32 md:h-20 lg:w-48 lg:h-28 xl:w-52 xl:h-28">
                <img class="w-full h-full object-cover rounded-lg"
                  src="{{ asset('storage/detail/' . $facility->image4_detail) }}" alt="img"
                  onclick="setFeaturedImage(this)">
              </div>
            @endif

            <div class=" space-y-3 hidden lg:block">
              <a href="{{ route('member.transaction', ['id' => $facility->id]) }}">
                <button
                  class="justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 md:w-36 lg:w-full border-2 border-yellow-orange">
                  <svg width="18" height="18" viewBox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                      stroke="#E59934" stroke-width="1.2" />
                    <path d="M12.6783 11.2322L9.14277 14.7678L7.375 13" stroke="#E59934" stroke-width="1.2"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M13.75 6.875V5C13.75 2.92893 12.0711 1.25 10 1.25V1.25C7.92893 1.25 6.25 2.92893 6.25 5V6.875"
                      stroke="#E59934" stroke-width="1.2" stroke-linecap="round" />
                  </svg>
                  <span class="text-black text-xs  lg:text-sm font-semibold ">Sewa Sekarang</span>
                </button>
              </a>
              <button @click="showSchedule = {{ $facility->id }}"
                class="justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 w-full border-2 border-blue-400">
                <svg width="18" height="18" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                    stroke="#858584" stroke-width="1.2" />
                </svg>
                <span class="text-black text-xs  lg:text-sm font-semibold">Lihat Jadwal</span>
              </button>

            </div>
          </div>
          <div class="lg:hidden flex gap-4 mt-5 mx-10 sm:mx-0">
            <a href="{{ route('member.transaction', ['id' => $facility->id]) }}" class="flex-1">
              <button
                class="justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 w-full border-2 border-yellow-orange">
                <svg width="18" height="18" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                    stroke="#E59934" stroke-width="1.2" />
                  <path d="M12.6783 11.2322L9.14277 14.7678L7.375 13" stroke="#E59934" stroke-width="1.2"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.75 6.875V5C13.75 2.92893 12.0711 1.25 10 1.25V1.25C7.92893 1.25 6.25 2.92893 6.25 5V6.875"
                    stroke="#E59934" stroke-width="1.2" stroke-linecap="round" />
                </svg>
                <span class="text-black text-xs  lg:text-sm font-semibold ">Sewa Sekarang</span>
              </button>
            </a>
            <button @click="showSchedule = {{ $facility->id }}"
              class="flex-1 justify-center items-center flex gap-x-2 rounded-lg bg-white h-10 w-full border-2 border-blue-400">
              <svg width="18" height="18" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.42359 5.66695C2.46678 5.14866 2.90004 4.75 3.42013 4.75H16.5799C17.1 4.75 17.5332 5.14866 17.5764 5.66695L18.5695 17.5839C18.6667 18.7499 17.7465 19.75 16.5764 19.75H3.4236C2.25352 19.75 1.33334 18.7499 1.43051 17.5839L2.42359 5.66695Z"
                  stroke="#858584" stroke-width="1.2" />
              </svg>
              <span class="text-black text-xs  lg:text-sm font-semibold">Lihat Jadwal</span>
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

              <input id="datepicker" class="" type="text" placeholder="Select Date.." readonly="readonly">

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
        <div class="order-3 mx-5 my-5 sm:my-1 sm:mx-1">
          <h4 class="font-semibold text-base sm:text-lg md:text-xl text-slate-800 mb-3">About</h4>
          <p>{!! $facility->about !!}</p>
        </div>


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

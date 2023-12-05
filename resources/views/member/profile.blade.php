@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Profile')

@section('content')
  <div x-data="{ showDetail: false }" class="m-10 flex items-center justify-center font-dmsans relative">
    <div class="container max-w-screen-lg mx-auto">
      <div class="flex flex-col sm:flex-row gap-3">
        <section>
          <div class="w-full sm:w-64 h-full bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div class="my-3 mx-10 font-bold">
              Menu Profile
            </div>
            <hr>

            <div class="flex flex-col gap-4 mt-4 mb-4 items-center ">
              <a href="#biodata"
                class="flex grow gap-4 text-gray-500 hover:bg-gray-100 w-48 hover:text-yellow-orange py-3 px-4 rounded-lg font-medium"
                id="biodataLink">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  stroke="none">
                  <path path path
                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                    opacity="0.3"></path>
                  <path path
                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
                  </path>
                </svg>
                Biodata
              </a>
              <a href="#riwayat"
                class="flex grow gap-4 text-gray-500 hover:bg-gray-100 w-48 hover:text-yellow-orange py-3 px-4 rounded-lg font-medium"
                id="riwayatLink">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                  </path>
                </svg>
                Riwayat
              </a>
            </div>
          </div>
        </section>
        <section class="grow" id="biodataSection">
          <div class=" h-full bg-white rounded-lg border border-gray-200 shadow-md mb-3 font-medium">
            <div class="my-3 mx-10 font-bold">
              Biodata
            </div>
            <hr>

            <div class="flex flex-col gap-4 my-6 ">
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Nama
                </div>
                <div>
                  {{ $user->name }}
                </div>
              </div>
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Nim
                </div>
                <div>
                  {{ $user->nim }}
                </div>
              </div>
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Role
                </div>
                <div>
                  {{ $user->role }}
                </div>
              </div>
            </div>

          </div>
        </section>
        <section class="grow hidden" id="riwayatSection">
          <div class=" h-full bg-white rounded-lg border border-gray-200 shadow-md mb-3 font-medium">
            <div class="my-3 mx-10 font-bold">
              Riwayat
            </div>
            <hr>

            <div class="flex flex-col gap-4 my-2 mx-5 overflow-x-auto">
              <div class="items-center gap-14">
                <div class="mx-5 my-5 font-medium">
                  Sewa Fasilitas Gelanggang
                </div>

                <div class="overflow-x-scroll  rounded border border-white w-full">
                  <table class="table-auto w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">No.</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Fasilitas</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Tgl Pengajuan</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Tgl Sewa</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Status</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Aksi</th>
                      </tr>

                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                      @foreach ($transactions as $index => $transaction)
                        <tr class="hover:bg-gray-50">
                          <td class="px-6 py-4">{{ $index + 1 }}</td>
                          <td class="px-6 py-4">{{ $transaction->facility->title }}</td>
                          <td class="px-6 py-4">{{ $transaction->created_at }} </td>
                          <td class="px-6 py-4">{{ $transaction->schedule_start }}</td>
                          <td class="px-6 py-4">{{ $transaction->status }}</td>
                          <td class="px-6 py-4">
                            <button @click="showDetail = {{ $transaction->id }}"
                              class="rounded-xl bg-deep-purple text-white h-8 w-20 text-xs">Detail</button>
                          </td>
                        </tr>



                        <div x-show="showDetail === {{ $transaction->id }}" x-transition:enter="ease-out duration-300"
                          x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                          x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                          x-transition:leave-end="opacity-0 scale-90"
                          class="fixed flex justify-center items-center top-0 left-0 w-full h-full z-50"
                          style="background-color: rgba(0,0,0,0.5)">
                          <div
                            class="container py-10 px-12 w-full md:w-7/12 h-auto bg-white rounded-lg border border-gray-200 shadow-md relative z-50">
                            <h2 class="text-xl font-semibold mb-3">Detail Transaksi</h2>
                            <div class="flex flex-row mx-5 my-5">
                              <div class="text-sm flex flex-col gap-6 flex-1">
                                <div class="">
                                  <p class="font-medium">Fasilitas</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->facility->title }}</p>
                                </div>
                                <div class="">
                                  <p class="font-medium">Nama Kegiatan</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->activity_name }}</p>
                                </div>
                                <div class="">
                                  <p class="font-medium">Nama Pemohon</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->user->name }}</p>
                                </div>
                                <div class="">
                                  <p class="font-medium">Nomor Telepon</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->phone_number }}</p>
                                </div>
                                <div class="">
                                  <p class="font-medium">Jadwal Kegiatan Berlangsung</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->schedule_start }}</p>
                                </div>
                              </div>
                              <div class="text-sm flex flex-col gap-6 flex-1">
                                <div class="col-span-5 ">
                                  <p class="font-medium">Durasi Sewa</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->duration_hours }}</p>
                                </div>
                                <div class="col-span-5">
                                  <p class="font-medium">Jadwal Kegiatan Selesai</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->schedule_end }}</p>
                                </div>
                                <div class="col-span-5">
                                  <p class="font-medium">Total Biaya</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->amount }}</p>
                                </div>
                                <div class="col-span-5">
                                  <p class="font-medium">Pesanan Dibuat</->
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->created_at }}</p>
                                </div>
                                <div class="col-span-5">
                                  <p class="font-medium">Bukti Transfer</p>
                                  <p class=" mt-2 text-[#858584]">{{ $transaction->proof_of_payment }}</p>
                                </div>
                              </div>
                            </div>
                            <div class="flex justify-end pt-2">
                              @if ($transaction->status === 'confirmed')
                                <a class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
                                  href="{{ route('member.profile.generate.pdf', ['transactionId' => $transaction->id]) }}">
                                  Unduh
                                </a>
                              @endif
                              <button
                                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                                @click="showDetail = false">Close</button>
                            </div>

                          </div>

                        </div>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

          </div>
        </section>
      </div>
    </div>
  </div>

  <script>
    // Function to set the "active" class for the initial state
    function setInitialActiveState() {
      document.getElementById('biodataLink').classList.add('active', 'bg-gray-100', 'text-yellow-orange');
    }

    // Call the function when the page loads
    window.addEventListener('load', setInitialActiveState);
    // Function to toggle sections and set the active class
    function toggleSections(activeSection, inactiveSection, activeLink, inactiveLink) {
      document.getElementById(activeSection).classList.remove('hidden');
      document.getElementById(inactiveSection).classList.add('hidden');
      document.getElementById(activeLink).classList.add('active', 'bg-gray-100', 'text-yellow-orange');
      document.getElementById(inactiveLink).classList.remove('active', 'bg-gray-100', 'text-yellow-orange');
    }

    // Add event listeners to the navigation links
    document.getElementById('biodataLink').addEventListener('click', function() {
      toggleSections('biodataSection', 'riwayatSection', 'biodataLink', 'riwayatLink');
    });

    document.getElementById('riwayatLink').addEventListener('click', function() {
      toggleSections('riwayatSection', 'biodataSection', 'riwayatLink', 'biodataLink');
    });
  </script>

  <style>
    [x-cloak] {
      display: none;
    }

    /* .duration-300 {
                        transition-duration: 300ms;
                      } */

    .ease-in {
      transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    .ease-out {
      transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }

    .scale-90 {
      transform: scale(.9);
    }

    .scale-100 {
      transform: scale(1);
    }
  </style>



@endsection

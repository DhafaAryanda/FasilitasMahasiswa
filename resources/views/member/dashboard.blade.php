@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Dashboard')

@section('content')
  <div class="px-8 mx-auto mt-6 flex items-center justify-center ">
    <div class="container">
      <div class="flex flex-col">

        <div class="h-28 sm:h-48 md:h-60 lg:h-72 w-full relative my-4 rounded-xl">
          <img class="object-cover h-full w-full rounded-xl border border-gray-100 shadow-sm"
            src="/fasilitasmahasiswa/assets/images/welcome.jpg" alt="images">

          <h2
            class="w-44  sm:w-60 md:w-96 mx-10 md:mx-20 flex font-medium sm:font-semibold  text-sm sm:text-xl md:text-2xl  absolute inset-y-0 items-center justify-center">
            Halo Dhafa Aryanda, Selamat Datang di Fasilitas USK
          </h2>
        </div>

        <div class="flex flex-col gap-4 lg:gap-0 bg-white rounded-xl  h-full w-full my-4 relative" x-data="{ selected: null }">
          <button type="button"
            class="p-5 flex justify-start items-center  text-xs sm:text-sm lg:text-base font-medium w-full h-full"
            @click="selected !== 1 ? selected = 1 : selected = null">
            <span class="text-md font-semibold text-slate-800">
              Prosedur Pengajuan Peminjaman Fasilitas USK Tahun 2023
            </span>
          </button>
          <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1"
            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
            <hr>
            <div class="p-5 flex flex-col gap-5">
              <div class="flex justify-center">
                <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full">
                  <div class="font-medium mx-5 my-3 flex items-center">
                    Memilih Prasarana
                    <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                      1</span>
                  </div>
                  <div class="flex mx-5 my-3 items-center">Pilihlah prasarana berdasarkan keperluan anda
                  </div>
                </div>
              </div>
              <div class="  flex justify-center">
                <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full">
                  <div class="font-medium mx-5 my-3 flex items-center">
                    Lihat Ketersediaan
                    <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                      2</span>
                  </div>

                  <div class="flex mx-5 my-3 items-center">Lihat apakah prasarana yang ingin anda sewa tersedia pada
                    jadwal
                  </div>
                </div>
              </div>
              <div class=" flex justify-center">
                <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full">
                  <div class="font-medium mx-5 my-3 flex items-center">
                    Mengisi Formulir Sewa
                    <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                      3</span>
                  </div>

                  <div class="flex mx-5 my-3 items-center">Isilah formulir sewa berdasarkan kegiatan anda
                  </div>
                </div>
              </div>
              <div class=" flex justify-center">
                <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full">
                  <div class="font-medium mx-5 my-3 flex items-center">
                    Melakukan Pembayaran
                    <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                      4</span>
                  </div>

                  <div class="flex mx-5 my-3 items-center">Melakukan konfirmasi sewa dengan melakukan pembayaran sewa
                  </div>
                </div>
              </div>
              <div class=" flex justify-center">
                <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full">
                  <div class="font-medium mx-5 my-3 flex items-center">
                    Menunggu Konfirmasi
                    <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                      5</span>
                  </div>

                  <div class="flex mx-5 my-3 items-center">Menunggu konfirmasi admin terkait penyewaan, anda juga dapat
                    menghubungi admin untuk mengingatkan terkait konfirmasi sewa
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

        <div class="flex flex-col gap-4 lg:gap-0 bg-white rounded-xl  h-full w-full my-4 relative"
          x-data="{ selected: null }">
          <button type="button"
            class="p-5 flex justify-start items-center  text-xs sm:text-sm lg:text-base font-medium w-full h-full"
            @click="selected !== 1 ? selected = 1 : selected = null">
            <span class="text-md font-semibold text-slate-800">
              Rekomendasi Prasarana
            </span>
          </button>
          <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1"
            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
            <hr>
            <div class="p-5">
              <a href="{{ route('member.konten.facility.all') }}"
                class=" flex ml-auto mr-5 mb-1 mt-2 w-fit items-center gap-2 text-sm font-bold px-2 py-1 rounded-2xl text-blue-600 hover:text-blue-800">
                Lihat Semua >
              </a>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-2 lg:gap-0 mb-5">
                @foreach ($facilities as $facility)
                  <a href="{{ route('member.konten.facility.detail', $facility->id) }}" class="mx-auto  my-2">
                    <div
                      class="max-w-xs cursor-pointer rounded-2xl bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                      <img class="w-[300px] h-[200px] rounded-xl object-cover object-center"
                        src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img" />
                      <div>
                        <div class="my-6 flex items-center justify-between px-4">
                          <p class="font-bold text-gray-500">{{ $facility->title }}</p>
                        </div>
                        <div class="my-3 flex items-center justify-between px-4">
                          <p class="text-sm font-semibold text-gray-500">Kategori</p>
                          <p class="rounded-full bg-gray-200 px-2 py-0.5 text-xs font-semibold text-gray-600">
                            {{ $facility->categories }}</p>
                        </div>
                        <div class="my-3 flex items-center justify-between px-4">
                          <p class="text-sm font-semibold text-gray-500">Harga</p>
                          <p class="rounded-full bg-blue-500 px-2 py-0.5 text-xs font-semibold text-white">
                            Rp. {{ number_format($facility->price_per_hour, 0, ',', '.') }} / jam</p>
                        </div>
                        {{-- <div class="mx-4 my-2 flex flex-row justify-between items-end">
                        <div class="flex flex-col">
                          <h6 class="text-xs font-poppins font-normal text-[#858584]">
                            Harga
                          </h6>
                          <h6 class="mt-1 text-xs tracking-tight font-poppins font-medium">
                            Rp. {{ number_format($facility->price_per_hour, 0, ',', '.') }}/hrs
                          </h6>
                        </div>
                        <div
                          class="flex justify-center items-center rounded-3xl w-20 h-8 bg-blue-500 text-center align-middle font-sans text-xs font-medium text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                          type="button" data-ripple-light="true">
                          Detail
                        </div>
                      </div> --}}
                      </div>
                    </div>
                  </a>
                @endforeach
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

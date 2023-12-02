@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Dashboard')

@section('content')
  <div class="mx-10 mt-10 flex items-center justify-center font-poppins">
    <div class="container mx-auto">
      <div class="flex flex-col">

        <div class="h-28 sm:h-48 md:h-60 lg:h-72 w-full relative mb-8">
          <img class="object-cover h-full w-full rounded-lg border border-gray-100 shadow-sm"
            src="/fasilitasmahasiswa/assets/images/welcome.jpg" alt="images">

          <h2
            class="w-44  sm:w-60 md:w-96 mx-10 md:mx-20 flex font-medium sm:font-semibold  text-sm sm:text-xl md:text-2xl  absolute inset-y-0 items-center justify-center">
            Halo Dhafa Aryanda, Selamat Datang di Fasilitas USK
          </h2>
        </div>

        <div class="flex flex-col pt-2 border-2 gap-4 lg:gap-0 bg-white rounded-lg  h-full w-full relative"
          x-data="{ selected: null }">
          <button type="button" class="mx-10 mt-3 mb-2 text-xs sm:text-sm lg:text-base font-medium"
            @click="selected !== 1 ? selected = 1 : selected = null">
            <span>
              Prosedur Pengajuan Peminjaman Fasilitas USK Tahun 2023
            </span>
          </button>
          <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1"
            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
            <hr>
            <div class="mx-5 sm:mx-10 lg:mt-10 flex justify-center">
              <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
                <div class="font-medium mx-5 my-3 flex items-center">
                  Memilih Prasarana
                  <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                    1</span>
                </div>
                <div class="flex mx-5 my-3 items-center">Pilihlah prasarana berdasarkan keperluan anda
                </div>
              </div>
            </div>
            <div class="mx-5 sm:mx-10 flex justify-center">
              <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
                <div class="font-medium mx-5 my-3 flex items-center">
                  Lihat Ketersediaan
                  <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                    2</span>
                </div>

                <div class="flex mx-5 my-3 items-center">Lihat apakah prasarana yang ingin anda sewa tersedia pada jadwal
                </div>
              </div>
            </div>
            <div class="mx-5 sm:mx-10 flex justify-center">
              <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
                <div class="font-medium mx-5 my-3 flex items-center">
                  Mengisi Formulir Sewa
                  <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                    3</span>
                </div>

                <div class="flex mx-5 my-3 items-center">Isilah formulir sewa berdasarkan kegiatan anda
                </div>
              </div>
            </div>
            <div class="mx-5 sm:mx-10 flex justify-center">
              <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
                <div class="font-medium mx-5 my-3 flex items-center">
                  Melakukan Pembayaran
                  <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap
                    4</span>
                </div>

                <div class="flex mx-5 my-3 items-center">Melakukan konfirmasi sewa dengan melakukan pembayaran sewa
                </div>
              </div>
            </div>
            <div class="mx-5 sm:mx-10 flex justify-center">
              <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
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
    </div>
  </div>

@endsection

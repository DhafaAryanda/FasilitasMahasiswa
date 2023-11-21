@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Dashboard')

@section('content')
  <div class="m-10 flex items-center justify-center font-poppins">
    <div class="container mx-auto">
      <div class="flex flex-col">

        <div class="bg-white rounded-lg h-28 sm:h-48 md:h-60 lg:h-72 w-full relative mb-8">
          <img class="object-cover h-full w-full rounded-lg border border-gray-100 shadow-sm"
            src="/fasilitasmahasiswa/assets/images/welcome.jpg" alt="images">

          <h2
            class="w-44  sm:w-60 md:w-96 mx-10 md:mx-20 flex font-medium sm:font-semibold  text-sm sm:text-xl md:text-2xl  absolute inset-y-0 items-center justify-center">
            Halo Dhafa Aryanda, Selamat Datang di Fasilitas USK
          </h2>
        </div>

        <div class="flex flex-col py-2 gap-4 lg:gap-0 bg-white rounded-lg  h-full w-full relative">
          <h3 class="mx-10 mt-3 mb-2 text-xs sm:text-sm lg:text-base font-medium">Prosedur Pengajuan Peminjaman Fasilitas
            USK Tahun
            2023
          </h3>
          <hr>

          <div class="mx-10 lg:mt-10 flex justify-center">
            <svg class="hidden lg:block" width="42" height="108" viewBox="0 0 42 108" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="21" cy="21" r="20" fill="white" stroke="#EDEDED" stroke-width="2" />
              <path d="M21.3394 18.1399H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 18.1399L16.5356 18.8274L18.5981 16.7649" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.3394 24.5566H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 24.5566L16.5356 25.2441L18.5981 23.1816" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M18.2502 30.1666H23.7502C28.3335 30.1666 30.1668 28.3333 30.1668 23.7499V18.2499C30.1668 13.6666 28.3335 11.8333 23.7502 11.8333H18.2502C13.6668 11.8333 11.8335 13.6666 11.8335 18.2499V23.7499C11.8335 28.3333 13.6668 30.1666 18.2502 30.1666Z"
                stroke="#F58282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <line x1="20" y1="42" x2="20" y2="108" stroke="#EDEDED" stroke-width="2" />
            </svg>

            <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
              <div class="font-medium mx-5 my-3 flex items-center">
                Memilih Prasarana
                <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap 1</span>
              </div>
              <div class="flex mx-5 my-3 items-center">Pilihlah prasarana berdasarkan keperluan anda
              </div>
            </div>
          </div>
          <div class="mx-10 flex justify-center">
            <svg class="hidden lg:block" width="42" height="108" viewBox="0 0 42 108" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="21" cy="21" r="20" fill="white" stroke="#EDEDED" stroke-width="2" />
              <path d="M21.3394 18.1399H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 18.1399L16.5356 18.8274L18.5981 16.7649" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.3394 24.5566H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 24.5566L16.5356 25.2441L18.5981 23.1816" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M18.2502 30.1666H23.7502C28.3335 30.1666 30.1668 28.3333 30.1668 23.7499V18.2499C30.1668 13.6666 28.3335 11.8333 23.7502 11.8333H18.2502C13.6668 11.8333 11.8335 13.6666 11.8335 18.2499V23.7499C11.8335 28.3333 13.6668 30.1666 18.2502 30.1666Z"
                stroke="#F58282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <line x1="20" y1="42" x2="20" y2="108" stroke="#EDEDED" stroke-width="2" />
            </svg>

            <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
              <div class="font-medium mx-5 my-3 flex items-center">
                Lihat Ketersediaan
                <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap 2</span>
              </div>

              <div class="flex mx-5 my-3 items-center">Lihat apakah prasarana yang ingin anda sewa tersedia pada jadwal
              </div>
            </div>
          </div>
          <div class="mx-10 flex justify-center">
            <svg class="hidden lg:block" width="42" height="108" viewBox="0 0 42 108" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="21" cy="21" r="20" fill="white" stroke="#EDEDED" stroke-width="2" />
              <path d="M21.3394 18.1399H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 18.1399L16.5356 18.8274L18.5981 16.7649" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.3394 24.5566H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 24.5566L16.5356 25.2441L18.5981 23.1816" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M18.2502 30.1666H23.7502C28.3335 30.1666 30.1668 28.3333 30.1668 23.7499V18.2499C30.1668 13.6666 28.3335 11.8333 23.7502 11.8333H18.2502C13.6668 11.8333 11.8335 13.6666 11.8335 18.2499V23.7499C11.8335 28.3333 13.6668 30.1666 18.2502 30.1666Z"
                stroke="#F58282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <line x1="20" y1="42" x2="20" y2="108" stroke="#EDEDED" stroke-width="2" />
            </svg>

            <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
              <div class="font-medium mx-5 my-3 flex items-center">
                Mengisi Formulir Sewa
                <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap 3</span>
              </div>

              <div class="flex mx-5 my-3 items-center">Isilah formulir sewa berdasarkan kegiatan anda
              </div>
            </div>
          </div>
          <div class="mx-10 flex justify-center">
            <svg class="hidden lg:block" width="42" height="108" viewBox="0 0 42 108" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="21" cy="21" r="20" fill="white" stroke="#EDEDED" stroke-width="2" />
              <path d="M21.3394 18.1399H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 18.1399L16.5356 18.8274L18.5981 16.7649" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.3394 24.5566H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 24.5566L16.5356 25.2441L18.5981 23.1816" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M18.2502 30.1666H23.7502C28.3335 30.1666 30.1668 28.3333 30.1668 23.7499V18.2499C30.1668 13.6666 28.3335 11.8333 23.7502 11.8333H18.2502C13.6668 11.8333 11.8335 13.6666 11.8335 18.2499V23.7499C11.8335 28.3333 13.6668 30.1666 18.2502 30.1666Z"
                stroke="#F58282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <line x1="20" y1="42" x2="20" y2="108" stroke="#EDEDED" stroke-width="2" />
            </svg>

            <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
              <div class="font-medium mx-5 my-3 flex items-center">
                Melakukan Pembayaran
                <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap 4</span>
              </div>

              <div class="flex mx-5 my-3 items-center">Melakukan konfirmasi sewa dengan melakukan pembayaran sewa
              </div>
            </div>
          </div>
          <div class="mx-10 flex justify-center">
            <svg class="hidden lg:block" width="42" height="108" viewBox="0 0 42 108" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="21" cy="21" r="20" fill="white" stroke="#EDEDED" stroke-width="2" />
              <path d="M21.3394 18.1399H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 18.1399L16.5356 18.8274L18.5981 16.7649" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.3394 24.5566H26.1519" stroke="#F58282" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.8481 24.5566L16.5356 25.2441L18.5981 23.1816" stroke="#F58282" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M18.2502 30.1666H23.7502C28.3335 30.1666 30.1668 28.3333 30.1668 23.7499V18.2499C30.1668 13.6666 28.3335 11.8333 23.7502 11.8333H18.2502C13.6668 11.8333 11.8335 13.6666 11.8335 18.2499V23.7499C11.8335 28.3333 13.6668 30.1666 18.2502 30.1666Z"
                stroke="#F58282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <line x1="20" y1="42" x2="20" y2="108" stroke="#EDEDED" stroke-width="2" />
            </svg>

            <div class="text-xs md:text-sm bg-[#F4F3F3] rounded-lg w-full h-full lg:ml-10">
              <div class="font-medium mx-5 my-3 flex items-center">
                Menunggu Konfirmasi
                <span class="ml-2 md:ml-3 bg-blue-500 text-white text-[11px] font-normal px-3  rounded-md">Tahap 5</span>
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

@endsection

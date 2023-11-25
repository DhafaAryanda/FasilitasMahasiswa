@extends('admin.layouts.base')

@section('title', 'Riwayat Transaksi')

@section('content')

  <!-- component -->
  <div x-data="{ showDetail: false }" class="  mt-10 mx-10 flex items-center justify-center font-poppins">
    <div class="container max-w-screen-lg mx-auto">

      <div>
        <h2 class="font-semibold text-xl text-blue-gray">Riwayat Transaksi</h2>
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
                <tr class="hover:bg-gray-50" x-data>
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
                          <label for="title" class="font-medium">Fasilitas</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->facility->title }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nama Kegiatan</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->activity_name }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nama Pemohon</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->user->name }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nomor Telepon</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->phone_number }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Jadwal Kegiatan Berlangsung</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->schedule_start }}</p>
                        </div>
                      </div>
                      <div class="text-sm flex flex-col gap-6 flex-1">
                        <div class="col-span-5 ">
                          <label for="title" class="font-medium">Durasi Sewa</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->duration_hours }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Jadwal Kegiatan Selesai</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->schedule_end }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Total Biaya</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->amount }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Pesanan Dibuat</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->created_at }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Bukti Transfer</label>
                          <p class=" mt-2 text-[#858584]">{{ $transaction->proof_of_payment }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-end pt-2">
                      <a class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
                        href="{{ route('admin.manajemen.history.generate.pdf', ['transactionId' => $transaction->id]) }}">
                        Unduh
                      </a>
                      <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                        @click="showDetail = false">Close</button>
                    </div>

                  </div>

                </div>
              @endforeach
            </tbody>
          </table>
        </div>


      </div>
      {{-- <div>
        <h2 class="font-semibold text-xl text-blue-gray">Riwayat Transaksi Tanpa Akun</h2>
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
              @foreach ($guestTransaction as $index => $guestTransaction)
                <tr class="hover:bg-gray-50" x-data>
                  <td class="px-6 py-4">{{ $index + 1 }}</td>
                  <td class="px-6 py-4">{{ $guestTransaction->facility->title }}</td>
                  <td class="px-6 py-4">{{ $guestTransaction->created_at }} </td>
                  <td class="px-6 py-4">{{ $guestTransaction->schedule_start }}</td>
                  <td class="px-6 py-4">{{ $guestTransaction->status }}</td>
                  <td class="px-6 py-4">
                    <button @click="showDetail = {{ $guestTransaction->id }}"
                      class="rounded-xl bg-deep-purple text-white h-8 w-20 text-xs">Detail</button>
                  </td>
                </tr>



                <div x-show="showDetail === {{ $guestTransaction->id }}" x-transition:enter="ease-out duration-300"
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
                          <label for="title" class="font-medium">Fasilitas</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->facility->title }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nama Kegiatan</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->activity_name }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nama Pemohon</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->guest_name }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Nomor Telepon</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->phone_number }}</p>
                        </div>
                        <div class="">
                          <label for="title" class="font-medium">Jadwal Kegiatan Berlangsung</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->schedule_start }}</p>
                        </div>
                      </div>
                      <div class="text-sm flex flex-col gap-6 flex-1">
                        <div class="col-span-5 ">
                          <label for="title" class="font-medium">Durasi Sewa</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->duration_hours }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Jadwal Kegiatan Selesai</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->schedule_end }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Total Biaya</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->amount }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Pesanan Dibuat</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->created_at }}</p>
                        </div>
                        <div class="col-span-5">
                          <label for="title" class="font-medium">Bukti Transfer</label>
                          <p class=" mt-2 text-[#858584]">{{ $guestTransaction->proof_of_payment }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-end pt-2">
                      <a class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
                        href="{{ route('admin.manajemen.history.generate.guest.pdf', ['guestTransactionId' => $guestTransaction->id]) }}">
                        Unduh
                      </a>
                      <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                        @click="showDetail = false">Close</button>
                    </div>

                  </div>

                </div>
              @endforeach
            </tbody>
          </table>
        </div>


      </div> --}}
    </div>
  </div>

@endsection

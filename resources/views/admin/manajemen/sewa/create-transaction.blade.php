@extends('admin.layouts.base')

@section('title', 'Transaksi Tanpa Akun')

@section('content')
  {{-- transaction-facility --}}

  <div class="p-5 lg:p-10 flex items-center justify-center font-dmsans">
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
        <form class="mb-20" action="{{ route('admin.manajemen.create.transaction.store') }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-5">
              <div class="items-center mb-3">
                <p class=" mx-10 mt-3 mb-2  font-bold">Form Sewa Fasilitas</p>
                <hr>
              </div>
              <div class="flex flex-col md:flex-row mb-5">

                <div class="flex-1 mx-10 md:mx-3 lg:mx-5">

                  <div class="mt-4 mb-4 md:mx-1 lg:mx-5 text-sm">
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="facility_id" class="font-medium after:content-['*'] after:text-red-500 ">Nama
                        Prasarana</label>
                      <select name="facility_id" id="facility_id" class="h-10 border mt-2 rounded px-4 w-full bg-gray-50">
                        <option value="" disabled selected>Select a Facility</option>
                        @foreach ($facilities as $facility)
                          <option value="{{ $facility->id }}">{{ $facility->title }}</option>
                        @endforeach
                      </select>
                      <p class="text-xs mt-2 text-[#858584]">Nama prasarana yang disewa</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="guest_name" class="font-medium after:content-['*'] after:text-red-500 ">Nama
                        Penyewa</label>
                      <input type="text" name="guest_name" id="guest_name"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Nama penyewa prasarana</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="guest_email" class="font-medium after:content-['*'] after:text-red-500 ">Email
                        Penyewa</label>
                      <input type="text" name="guest_email" id="guest_email"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Email penyewa prasarana</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="nim" class="font-medium">NIM/NIP</label>
                      <input type="text" name="nim" id="nim"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Masukkan jika hanya penyewa pegawai atau mahasiswa USK</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="phone_number" class="font-medium after:content-['*'] after:text-red-500 ">Nomor
                        Telepon</label>
                      <input type="text" name="phone_number" id="phone_number"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan Nomor Telepon yang menggunakan Whatsapp</p>
                    </div>
                  </div>
                </div>
                <div class="flex-1 mx-10 md:mx-3 lg:mx-5">

                  <div class="mt-4 mb-4 md:mx-1 lg:mx-5 text-sm">
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="activity_name" class="font-medium after:content-['*'] after:text-red-500 ">Nama
                        Kegiatan</label>
                      <input type="text" name="activity_name" id="activity_name"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan nama kegiatan atau acara</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="dateandtimepicker1" class="font-medium after:content-['*'] after:text-red-500 ">Jadwal
                        Kegiatan Berlangsung</label>
                      <input id="dateandtimepicker1" type="text" name="schedule_start" id="schedule_start"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50 " readonly />
                      <p class="text-xs mt-2 text-[#858584]">Pilih jadwal kegiatan berlangsung</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="duration_hours" class="font-medium after:content-['*'] after:text-red-500 ">Durasi
                        Kegiatan</label>
                      <input type="text" name="duration_hours" id="duration_hours"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan durasi kegiatan dalam jam</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="description" class="font-medium after:content-['*'] after:text-red-500 ">Deskripsi
                        Kegiatan</label>
                      <textarea type="text" name="description" id="description" class="h-24 border mt-2 rounded px-4 w-full bg-gray-50"
                        placeholder=""></textarea>
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan keperluan meminjam prasarana
                      </p>
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

@extends('member.layouts.base')

@section('title', 'Prasarana')

@section('content')

  <div class=" m-10 flex items-center justify-center font-poppins">
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
        <h2 class="font-semibold md:text-lg xl:text-xl text-blue-gray">Edit Fasilitas Gelanggang</h2>
        <p class="text-gray-500 mb-6 text-sm">Form untuk mengedit kontent</p>
        <!-- Form Start -->
        <form class="mb-20" enctype="multipart/form-data"
          action="{{ route('member.transaction.confirm.store', $facility->id) }}" method="POST" id="facilityForm">
          @csrf

          <div class="flex flex-col lg:flex-row md:gap-5 xl:gap-10 lg:mx-5 xl:mx-10 my-5">
            <section class="xl:flex-1 h-fit bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div class="my-3 text-sm xl:text-base mx-10 font-semibold">
                Menu Profile
              </div>
              <hr>
              <div class="flex">
                <div class="my-5 mx-6 sm:mx-12 lg:mx-10 xl:mx-12 text-sm flex flex-col gap-6">
                  <div class="md:col-span-5 ">
                    <label for="title" class="font-medium">Prasarana</label>
                    <p class=" mt-2 text-[#858584]">{{ $facility->title }}</p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Nama Kegiatan</label>
                    <p class=" mt-2 text-[#858584]">{{ session('transaction-facility-data.activity_name') }}</p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Nama Pemohon</label>
                    <p class=" mt-2 text-[#858584]">{{ $user->name }}
                    </p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Nomor Telepon</label>
                    <p class=" mt-2 text-[#858584]">{{ session('transaction-facility-data.phone_number') }}</p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Jadwal Kegiatan Berlangsung</label>
                    <p class=" mt-2 text-[#858584]">{{ session('transaction-facility-data.schedule_start') }}</p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Durasi Kegiatan</label>
                    <p class=" mt-2 text-[#858584]">{{ session('transaction-facility-data.duration_hours') }} Jam</p>
                  </div>
                  <div class="md:col-span-5">
                    <label for="title" class="font-medium">Jadwal Kegiatan Selesai</label>
                    <p class=" mt-2 text-[#858584]">{{ session('transaction-facility-data.schedule_end') }}</p>
                  </div>
                </div>
              </div>

            </section>
            <section class="flex-1 bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div class="my-3 mx-10 text-sm font-semibold">
                Ringkasan Pesanan
              </div>
              <hr>
              <div class="my-5 mx-6 sm:mx-12 lg:mx-6 xl:mx-12 text-sm flex flex-col gap-3 ">
                <div class="flex">
                  <label for="title" class="flex-1 font-medium">Pesanan Dibuat</label>
                  <p class="">
                    {{-- <p class="">{{ session('transaction-facility-data.created_at')->format('l, d F Y') }}</p> --}}

                  </p>
                </div>
                <div class="flex">
                  <label for="title" class="flex-1 font-medium">Subtotal</label>
                  <p class="">Rp. {{ number_format($facility->price_per_hour, 2, ',', '.') }} x
                    {{ session('transaction-facility-data.duration_hours') }}</p>
                </div>
              </div>
              <hr>
              <div class="mt-5 mb-12 mx-6 sm:mx-12 lg:mx-6 xl:mx-12 text-sm flex flex-col gap-3 ">
                <div class="flex font-medium">
                  <label for="title" class="flex-1">Total</label>
                  <p class="">Rp. {{ number_format($transaction['amount'], 2, ',', '.') }}</p>
                </div>
              </div>
              <div class="my-5 mx-6 sm:mx-12 lg:mx-6 xl:mx-12 text-sm flex flex-col gap-2">
                <p class="font-semibold mb-3">Transfer sejumlah diatas ke Rekening berikut:</p>
                <p class="text-sm">Bank Syariah Indonesia</p>
                <div class="flex">
                  <label for="title" class="flex-1">2008107010032</label>
                  <p class="">a.n. Samsil Bihri</p>
                </div>
              </div>
              <hr>
              <div class=" mt-5 mb-12 mx-6 sm:mx-12 lg:mx-6 xl:mx-12 text-sm flex flex-col gap-3 ">
                <div class="flex flex-col">
                  <label for="title" class="flex-1 font-medium">Bank Pengirim</label>

                  <div class="flex items-center">
                    <div class="flex w-full">
                      <select type="text" name="bank_name" id="bank_name"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50 text-sm">
                        <option value="" disabled selected>Pilih Bank</option>
                        <option value="Bank Aceh" {{ old('bank_name') == 'Bank Aceh' ? 'selected' : '' }}>Bank Aceh
                        </option>
                        <option value="Bank Syariah Indonesia (BSI)"
                          {{ old('bank_name') == 'Bank Syariah Indonesia (BSI)' ? 'selected' : '' }}>
                          Bank Syariah Indonesia (BSI)</option>
                        <option value="Bank Central Asia (BCA)"
                          {{ old('bank_name') == 'Bank Central Asia (BCA)' ? 'selected' : '' }}>
                          Bank Central Asia (BCA)</option>
                        <option value="Bank Rakyat Indonesia (BRI)"
                          {{ old('bank_name') == 'Bank Rakyat Indonesia (BRI)' ? 'selected' : '' }}>Bank Rakyat Indonesia
                          (BRI)</option>
                        <option value="Bank Negara Indonesia (BNI)"
                          {{ old('bank_name') == 'Bank Negara Indonesia (BNI)' ? 'selected' : '' }}>Bank Negara Indonesia
                          (BNI)
                        </option>
                      </select>
                    </div>
                  </div>
                  <p class="text-xs mt-2 text-[#858584]">Pilih Bank pengirim</p>
                </div>
                <div class="flex flex-col">
                  <label for="bank_account_number" class="flex-1 font-medium">Nomor Rekening Pengirim</label>
                  <input type="text" name="bank_account_number" id="bank_account_number"
                    class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" value="" />
                  <p class="text-xs mt-2 text-[#858584]">Tuliskan rekening pengirim</p>
                </div>
                <div class="flex flex-col">
                  <label for="proof_of_payment" class="flex-1 font-medium">Bukti Transfer</label>
                  <input type="file" name="proof_of_payment" id="proof_of_payment"
                    class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                  <p class="text-xs mt-2 text-[#858584]">Lampirkan file bukti transfer ke rekening yang disebutkan</p>
                </div>
              </div>
              <hr>
              <p class="text-xs text-[#858584] my-4 mx-6">
                Catatan: Uang akan dikembalikan jika permintaan sewa ditolak
              </p>
            </section>
          </div>
          <div class="flex justify-end mx-10">
            <a href="{{ route('admin.manajemen.konten.facility') }}"
              class="bg-gray-400 mx-2 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg">Kembali</a>
            <button type="submit" name="action" value="update"
              class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

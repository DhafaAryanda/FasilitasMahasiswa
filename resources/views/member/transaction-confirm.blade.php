@extends('member.layouts.base')

@section('title', 'Prasarana')

@section('content')

  <div x-data="{ showmodal: false }" class=" m-10 flex items-center justify-center font-poppins">
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
                        <option value="Lainnya" {{ old('bank_name') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <p class="text-xs mt-2 text-[#858584]">Pilih Bank pengirim</p>
                </div>

                <div id="lainnyaInput" class="flex flex-col hidden">
                  <label for="other_bank" class="flex-1 font-medium">Bank Lainnya</label>
                  <input type="text" name="other_bank" id="other_bank"
                    class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" value="{{ old('other_bank') }}" />
                  <p class="text-xs mt-2 text-[#858584]">Tuliskan nama bank jika memilih "Lainnya"</p>
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
            <button @click="showModal = true" type="submit" name="action" value="update"
              class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">Submit</button>

          </div>
        </form>
      </div>
    </div>
  </div>
  <div x-show="showModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
    class="fixed flex justify-center items-center top-0 left-0 w-full h-full z-50"
    style="background-color: rgba(0,0,0,0.5)">
    <div class=" flex min-h-screen items-center justify-center z-50">
      <div class="rounded-lg bg-gray-50 px-16 py-14">
        <div class="flex justify-center">
          <div class="rounded-full bg-green-200 p-6">
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
            </div>
          </div>
        </div>
        <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Congratuation!!!</h3>
        <p class="w-[230px] text-center font-normal text-gray-600">Your order have been taken and is being attended to
        </p>
        <button
          class="mx-auto mt-10 block rounded-xl border-4 border-transparent bg-orange-400 px-6 py-3 text-center text-base font-medium text-orange-100 outline-8 hover:outline hover:duration-300">Track
          Order</button>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('bank_name').addEventListener('change', function() {
      var lainnyaInput = document.getElementById('lainnyaInput');
      var otherBankInput = document.getElementById('other_bank');

      if (this.value === 'Lainnya') {
        lainnyaInput.classList.remove('hidden');
      } else {
        lainnyaInput.classList.add('hidden');
      }

      // Update the value of the "Lainnya" option based on the input value
      document.querySelector('select[name="bank_name"] option[value="Lainnya"]').value = otherBankInput.value;
    });
  </script>


@endsection

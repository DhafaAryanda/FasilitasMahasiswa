@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')


@section('content')
  <div class=" m-10 items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <h2 class="font-semibold text-xl text-blue-gray">Detail Transaksi</h2>
      <div class="flex flex-row mt-5 mb-10">
        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">ID Pemesanan</li>
            <p class="text-sm text-gray-500">{{ $transaction->transaction_code }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Fasilitas</li>
            <p class="text-sm text-gray-500">{{ $transaction->facility->title }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Kegiatan</li>
            <p class="text-sm text-gray-500">{{ $transaction->activity_name }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nama Penyewa</li>
            <p class="text-sm text-gray-500">
              @if ($transaction->user_id)
                {{ $transaction->user->name }}
              @else
                {{ $transaction->guest_name }}
              @endif
            </p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nomor Telepon</li>
            <p class="text-sm text-gray-500">{{ $transaction->phone_number }}</p>
          </ul>

        </div>

        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">Durasi Kegiatan</li>
            <p class="text-sm text-gray-500">{{ $transaction->duration_hours }} Jam</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Jadwal Kegiatan Berlangsung</li>
            <p class="text-sm text-gray-500">{{ $transaction->schedule_start }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Jadwal Kegiatan Selesai</li>
            <p class="text-sm text-gray-500">{{ $transaction->schedule_end }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Total Biaya</li>
            <p class="text-sm text-gray-500">Rp. {{ $transaction->amount }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Pesanan Dibuat</li>
            <p class="text-sm text-gray-500">{{ $transaction->created_at }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Bukti Transfer</li>
            <a href="{{ asset('storage/proof_of_payment/' . $transaction->proof_of_payment) }}" data-lightbox="image-1"
              data-title="Bukti Transfer" class="text-sm font-medium text-blue-500 underline">Lihat
              Bukti Transfer</a>
          </ul>



        </div>

        <div class="flex-1 flex-col">
          <ul class="mt-5">
            <li class="text-base font-medium">Bank Pengirim</li>
            <p class="text-sm text-gray-500">{{ $transaction->bank_name }}</p>
          </ul>
          <ul class="mt-5">
            <li class="text-base font-medium">Nomor Rekening Pengirim</li>
            <p class="text-sm text-gray-500">{{ $transaction->bank_account_number }}</p>
          </ul>
          <form class="confirmation-form" action="{{ route('admin.manajemen.sewa.facility.reject', $transaction->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
            <ul class="mt-5">
              <li class="text-base font-medium">Bukti Pengembalian Dana Jika Menolak Sewa</li>
              <input type="file" name="refund_proof" id="refund_proof"
                class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
              <p class="text-xs text-gray-500">
                Lampirkan file bukti transfer ke rekening pengirim jika menolak tawaran peminjaman
              </p>

            </ul>
            <ul class="mt-5">
              <li class="text-base font-medium">Alasan Menolak Sewa</li>
              <textarea type="text" name="message" id="message" class="text-sm h-28 w-full border  mt-2 rounded-md  bg-gray-50 "
                placeholder=""></textarea>
            </ul>
            <div class="block m-5 text-sm">
              <button type="submit" name="action" value="reject"
                class="w-full h-auto bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Tolak
                Sewa</button>
            </div>
          </form>
          <div class="block m-5 text-sm">
            <form action="{{ route('admin.manajemen.sewa.facility.confirm', $transaction->id) }}" method="POST">
              @csrf
              @method('PUT')
              <button type="submit" name="action" value="confirm"
                class="w-full h-auto bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Terima Sewa
              </button>
            </form>
          </div>
        </div>


      </div>



    </div>
  </div>

  <script>
    function confirmReject() {
      return confirm('Apakah Anda yakin ingin menolak?');
    }

    // Ambil semua elemen form dengan class "confirmation-form"
    const confirmationForms = document.querySelectorAll('.confirmation-form');

    // Loop melalui setiap form dan tambahkan event listener untuk menampilkan konfirmasi
    confirmationForms.forEach(form => {
      form.addEventListener('submit', function(event) {
        if (!confirmReject()) {
          event.preventDefault(); // Mencegah pengiriman form jika pengguna memilih "Batal"
        }
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const confirmationForm = document.querySelector(".confirmation-form");
      const refundProofInput = document.querySelector("#refund_proof");
      const messageInput = document.querySelector("#message");

      confirmationForm.addEventListener("submit", function(e) {
        if (refundProofInput.value === "" || messageInput.value === "") {
          e.preventDefault(); // Mencegah pengiriman formulir jika ada bidang yang kosong
          alert() - > warning('kesalahan',
            'Pastikan untuk mengisi kedua bidang yang diperlukan sebelum menolak.');
        }
      });
    });
  </script>
@endsection

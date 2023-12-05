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

          @if ($transaction->status === 'rejected' && $transaction->rejected_transactions)
            <ul class="mt-5">
              <li class="text-base font-medium">Alasan Menolak</li>
              <p class="text-sm text-gray-500">{{ $transaction->rejected_transactions->message }}</p>
            </ul>
            <ul class="mt-5">
              <li class="text-base font-medium">Bukti Refund</li>
              <a href="{{ asset('storage/refund/' . $transaction->rejected_transactions->refund_proof) }}"
                data-lightbox="image-2" data-title="Bukti Refund"
                class="text-sm font-medium text-blue-500 underline">Lihat Bukti Refund</a>
            </ul>
          @endif

        </div>
      </div>



    </div>
  </div>
@endsection

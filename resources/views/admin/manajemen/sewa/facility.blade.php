@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')

@section('content')

  <!-- component -->
  <div class=" mt-10 mx-10 flex items-center justify-center font-poppins">
    <div class="container max-w-screen-lg mx-auto">

      @if (session()->has('success'))
        <div class="mb-5 bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Berhasil</strong>
          {{ session('success') }}
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <title>Close</title>
              <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
          </span>
        </div>
      @endif

      <div>
        <h2 class="font-semibold text-xl text-blue-gray">Fasilitas Gelanggang</h2>
        <p class="text-gray-700 mt-8  mx-7 text-sm font-medium">Menunggu Diterima</p>

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
          <table id="pending_transaction"
            class="table-auto w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">No.</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">ID Pemesanan</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Fasilitas</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Penyewa</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Tgl Sewa</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Status</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Aksi</th>
              </tr>

            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
              @php
                $counter = 0;
              @endphp
              @foreach ($pendingTransactions as $key => $transaction)
                @php
                  $counter++;
                @endphp
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4">{{ $counter }}</td>
                  <td class="px-6 py-4">{{ $transaction->transaction_code }}</td>
                  <td class="px-6 py-4">{{ $transaction->facility->title }}</td>
                  <td class="px-6 py-4">
                    @if ($transaction->user_id)
                      {{ $transaction->user->name }}
                    @else
                      {{ $transaction->guest_name }}
                    @endif
                  </td>
                  <td class="px-6 py-4">{{ $transaction->schedule_start }}</td>
                  <td class="px-6 py-4">{{ $transaction->status }}</td>
                  <td class="px-6 py-4">
                    <a href="{{ route('admin.manajemen.sewa.facility.detail', $transaction->id) }}">
                      <button class="rounded-xl bg-deep-purple text-white h-8 w-20 text-xs">
                        Detail
                      </button>

                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>

  <div class=" m-10 flex items-center justify-center font-poppins">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <p class="text-gray-700  mx-7 text-sm font-medium">Penyewa Aktif</p>

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
          <table id="active_transaction"
            class="table-auto w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">No.</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">ID Pemesanan</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Fasilitas</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Penyewa</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Tgl Sewa</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Status</th>
                <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Aksi</th>
              </tr>

            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
              @php
                $counter = 0;
              @endphp
              @foreach ($activeTransactions as $key => $transaction)
                @php
                  $counter++;
                @endphp
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4">{{ $counter }}</td>
                  <td class="px-6 py-4">{{ $transaction->transaction_code }}</td>
                  <td class="px-6 py-4">{{ $transaction->facility->title }}</td>
                  <td class="px-6 py-4">
                    @if ($transaction->user_id)
                      {{ $transaction->user->name }}
                    @else
                      {{ $transaction->guest_name }}
                    @endif
                  </td>
                  <td class="px-6 py-4">{{ $transaction->schedule_start }}</td>
                  <td class="px-6 py-4">{{ $transaction->status }}</td>
                  <td class="px-6 py-4">
                    <button class="rounded-xl bg-deep-purple text-white h-8 w-20 text-xs">
                      Detail
                    </button>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

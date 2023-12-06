@extends('admin.layouts.base')

@section('title', 'Dashboard')

@section('content')
  <main class="h-full overflow-y-auto">
    <div class="container px-8 mx-auto grid mt-10">
      <div class="bg-white p-5 rounded-xl mb-5">
        <!-- Cards -->
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
          <!-- Card -->
          <div class="flex justify-center items-center p-8 bg-purple-500/10 rounded-xl shadow-sm">
            <div class="flex flex-col justify-center items-center ">
              <p class="mb-2 text-3xl font-bold text-gray-600">
                {{ $totalFacilityShow }}
              </p>
              <p class="text-sm font-semibold text-gray-700">
                Total Prasarana
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex justify-center items-center p-8 bg-orange-500/10 rounded-lg shadow-sm">
            <div class="flex flex-col justify-center items-center ">
              <p class="mb-2 text-3xl font-bold text-gray-600">
                {{ $pendingTransactions }}
              </p>
              <p class="text-sm font-semibold text-gray-700">
                Menunggu Diterima
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex justify-center items-center p-8 bg-lime-500/10 rounded-lg shadow-sm">

            <div class="flex flex-col justify-center items-center ">
              <p class="mb-2 text-3xl font-bold text-gray-600">
                {{ $totalActiveTransactions }}

              </p>
              <p class="text-sm font-semibold text-gray-700">
                Penyewa Aktif
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex justify-center items-center p-8 bg-blue-500/10 rounded-lg shadow-sm">

            <div class="flex flex-col justify-center items-center ">
              <p class="mb-2 text-3xl font-bold text-gray-600">
                0
              </p>
              <p class="text-sm font-semibold text-gray-700">
                -
              </p>
            </div>
          </div>
        </div>

      </div>
      <div class="bg-white p-5 rounded-xl">
        <div class="grid ">
          <p class="text-md font-semibold text-slate-800">Penyewa Aktif</p>
          <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mt-5">
            <table id="active_transaction"
              class="table-auto w-full border-collapse bg-white text-left text-sm text-gray-500">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">No.</th>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Fasilitas</th>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Nama Penyewa</th>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Jadwal Sewa</th>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Jadwal Selesai</th>
                  <th scope="col" class="px-6 py-4 font-semibold text-gray-900">Aksi</th>
                </tr>

              </thead>
              <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @if (count($activeTransactions) > 0)
                  @php
                    $counter = 0;
                  @endphp
                  @foreach ($activeTransactions as $key => $transaction)
                    @php
                      $counter++;
                    @endphp
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4">{{ $counter }}</td>
                      <td class="px-6 py-4">{{ $transaction->facility->title }}</td>
                      <td class="px-6 py-4">
                        @if ($transaction->user_id)
                          {{ $transaction->user->name }}
                        @else
                          {{ $transaction->guest_name }}
                        @endif
                      </td>
                      <td class="px-6 py-4">{{ $transaction->schedule_start }}</td>
                      <td class="px-6 py-4">{{ $transaction->schedule_end }}</td>
                      <td class="px-6 py-4">
                        <button class="rounded-xl bg-deep-purple text-white h-8 w-20 text-xs">
                          Detail
                        </button>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
            @if (count($activeTransactions) === 0)
              <p class="text-gray-500 text-center py-4">Data tidak tersedia.</p>
            @endif
          </div>
        </div>

      </div>

      {{-- <a href="{{ route('admin.monthly.income') }}">Lihat Pendapatan Bulanan</a> --}}


      {{-- <div class="m-20 bg-white">
        <div id='calendar'></div>

      </div> --}}

    </div>
  </main>
@endsection()
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });
</script>

<form wire:submit.prevent="fetchSchedule">
  @csrf
  <div class="flex mx-5 my-5">
    <input type="date" wire:model="selectedDate" wire:change="fetchSchedule" required id="datepicker" id="start_date"
      readonly="readonly"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
      placeholder="Select date">
  </div>

  <div class="my-5">
    <h3 class="text-base font-semibold mb-2">Data Ketersediaan:</h3>

    <table class="w-full text-sm text-left text-gray-700">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          <th scope="col" class="py-3 px-6">Nama Kegiatan</th>
          <th scope="col" class="py-3 px-6">Jadwal Kegiatan Dimulai</th>
          <th scope="col" class="py-3 px-6">Jadwal Kegiatan Selesai</th>
        </tr>
      </thead>
      <tbody>

        @if ($transactions->count() > 0)
          @foreach ($transactions as $transaction)
            <tr class="bg-white border-b">
              <td class="py-4 px-6">{{ $transaction->activity_name }}</td>
              <td class="py-4 px-6">{{ $transaction->schedule_start }}</td>
              <td class="py-4 px-6">{{ $transaction->schedule_end }}</td>
            </tr>
          @endforeach
        @else
          <tr class="bg-white border-b">
            <td class="py-4 px-6">-</td>
            <td class="py-4 px-6">-</td>
            <td class="py-4 px-6">-</td>
          </tr>
        @endif
      </tbody>
    </table>

  </div>

  <div class="flex justify-end pt-2">
    {{-- <button type="submit"
      class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
      Action
    </button> --}}
    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
      @click="showSchedule = false">Tutup
    </button>
  </div>
</form>

<form wire:submit.prevent="fetchSchedule">
  @csrf
  <div class="flex mx-5 my-5">
    <input type="date" wire:model="selectedDate" wire:change="fetchSchedule" required id="datepicker" id="start_date"
      placeholder="Select Date.." readonly="readonly">
  </div>

  <div class="my-5">
    <h3 class="text-lg font-semibold mb-2">Data Ketersediaan:</h3>

    @if ($transactions->count() > 0)
      <ul>
        @foreach ($transactions as $transaction)
          <li>{{ $transaction->activity_name }} {{ $transaction->schedule_start }} -
            {{ $transaction->schedule_end }} </li>
          <!-- Add other transaction details as needed -->
        @endforeach
      </ul>
    @else
      <p>Belum ada data sewa pada tanggal ini</p>
    @endif
  </div>

  <div class="flex justify-end pt-2">
    <button type="submit"
      class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
      Action
    </button>
    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
      @click="showSchedule = false">Close
    </button>
  </div>
</form>

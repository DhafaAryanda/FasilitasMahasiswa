<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Facility;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ScheduleTable extends Component
{
    public $facility;
    public $selectedDate;
    public $transactions;

    public function mount($facility)
    {
        $this->facility = $facility;
        $this->selectedDate = now()->toDateString(); // Set a default date if needed
        $this->fetchSchedule();
    }

    public function fetchSchedule()
    {
        $this->transactions = Transaction::where('facility_id', $this->facility->id)
            ->whereDate('schedule_start', '=', $this->selectedDate)
            ->get();
    }

    public function render()
    {
        return view('livewire.schedule-table');
    }
}

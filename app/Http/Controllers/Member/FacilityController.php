<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('show', true)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);


        return view('member.konten.facility', ['facilities' => $facilities]);
    }

    public function showAll()
    {
        $facilities = Facility::where('show', true)
        ->orderBy('created_at', 'DESC')
        ->get();


        return view('member.konten.all-facility', ['facilities' => $facilities]);
    }

    

    public function show($id, Request $request)
    {
        $facility = Facility::find($id);

        $selectedDate = $request->input('selected_date');

         // Retrieve transactions based on the selected date
        $transactions = Transaction::where('facility_id', $id)
        ->whereDate('schedule_start', '=', $selectedDate)
        ->get();

        
        return view('member.konten.facility-detail', ['facility' => $facility,  'transactions' => $transactions,  'selectedDate' => $selectedDate,]);
    }

}

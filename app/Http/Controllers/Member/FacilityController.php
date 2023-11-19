<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Transaction;
use Carbon\Carbon;



class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('show', true)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);


        return view('member.konten.facility', ['facilities' => $facilities]);
    }

    

    public function show($id)
    {
        $facility = Facility::find($id);

        $targetDateTime = '2023-11-07 09:00:00';

        $transactions = Transaction::where('facility_id', $id)
        ->where('schedule_start', $targetDateTime)
        ->with('facility') // Optional: Jika ingin mendapatkan data fasilitas bersamaan dengan transaksi
        ->get();

        if ($transactions->isEmpty()) {
            dd("Tidak ada transaksi pada tanggal dan waktu yang ditentukan.");
        }
        return view('member.konten.facility-detail', ['facility' => $facility, 'transactions' => $transactions]);
    }
}

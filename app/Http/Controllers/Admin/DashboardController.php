<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Models\Facility;


class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $activeTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'confirmed')
        ->where('schedule_end', '>', $now)
        ->get();

        $totalFacilityShow = $facilities = Facility::where('show', true)
        ->count();

        $totalActiveTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'confirmed')
        ->where('schedule_end', '>', $now)
        ->count();

        $totalPendingTransactions =  $pendingTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'pending')
        ->count();

        return view('admin.dashboard', ['activeTransactions' => $activeTransactions, 'totalActiveTransactions' => $totalActiveTransactions, 'pendingTransactions' => $pendingTransactions, 'totalFacilityShow' => $totalFacilityShow]);
    }
}

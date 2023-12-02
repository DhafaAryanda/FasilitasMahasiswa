<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $activeTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'confirmed')
        ->where('schedule_end', '>', $now)
        ->get();

        return view('admin.dashboard', ['activeTransactions' => $activeTransactions]);
    }
}
